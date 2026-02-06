<?php

namespace App\Jobs\Auth;

use App\Abstracts\Job;
use App\Models\Auth\UserInvitation;
use App\Notifications\Auth\Invitation as Notification;
use App\Traits\Sources;
use Exception;
use Illuminate\Support\Str;
use Symfony\Component\Mailer\Exception\TransportException;
use Illuminate\Support\Facades\Log;

class CreateInvitation extends Job
{
    use Sources;

    protected $invitation;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function handle(): UserInvitation
    {
        \DB::transaction(function () {
            // حذف أي دعوات سابقة لنفس المستخدم لتجنب التكرار
            $invitations = UserInvitation::where('user_id', $this->user->id)->get();

            foreach ($invitations as $invitation) {
                $invitation->delete();
            }

            // إنشاء سجل الدعوة الجديد مع توكن UUID
            $this->invitation = UserInvitation::create([
                'user_id' => $this->user->id,
                'token' => (string) Str::uuid(),
                'created_by' => user_id(),
                'created_from' => $this->getSourceName(request()),
            ]);

            // --- كود استخراج الرابط للبيئة المحلية ---
            $registrationLink = route('register', $this->invitation->token);
            
            Log::info('************************************************');
            Log::info('NEW USER INVITATION GENERATED');
            Log::info('User Email: ' . $this->user->email);
            Log::info('Registration Link: ' . $registrationLink);
            Log::info('************************************************');
            // ---------------------------------------

            $notification = new Notification($this->invitation);

            try {
                // إرسال الإشعار (سيتم تسجيله في اللوج أيضاً إذا كان MAIL_MAILER=log)
                $this->dispatch(new NotifyUser($this->user, $notification));
            } catch (TransportException $e) {
                $message = trans('errors.title.500');

                throw new Exception($message);
            }
        });

        return $this->invitation;
    }
}