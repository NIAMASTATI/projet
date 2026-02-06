<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Accounting Software for Small Businesses - Akaunting</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --akaunting-green: #6da252;
            --akaunting-green-dark: #5a8a44;
            --akaunting-green-light: rgba(109, 162, 82, 0.1);
            --akaunting-green-lighter: rgba(109, 162, 82, 0.05);
            --akaunting-dark: #1a202c;
            --akaunting-gray-dark: #2d3748;
            --akaunting-gray: #64748b;
            --akaunting-gray-light: #e2e8f0;
            --akaunting-light: #f8fafc;
            --gradient-primary: linear-gradient(135deg, var(--akaunting-dark) 0%, var(--akaunting-green) 100%);
            --gradient-green: linear-gradient(135deg, var(--akaunting-green) 0%, #7bb85d 100%);
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-green: 0 8px 20px rgba(109, 162, 82, 0.25);
            --radius-sm: 6px;
            --radius-md: 10px;
            --radius-lg: 16px;
            --radius-xl: 24px;
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #ffffff;
            color: var(--akaunting-dark);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header / Nav */
        nav {
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--akaunting-gray-light);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        nav.scrolled { padding: 1.2rem 5%; box-shadow: var(--shadow-md); }

        .logo {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--akaunting-dark);
            text-decoration: none;
            display: flex;
            align-items: center;
            letter-spacing: -0.5px;
            transition: var(--transition);
            position: relative;
        }

        .logo:hover { transform: translateY(-2px); }

        .logo-dot { color: var(--akaunting-green); font-size: 2.5rem; line-height: 1; margin-left: 2px; }

        /* ✅ Login Button Green */
        .login-link {
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.75rem 1.75rem;
            border-radius: var(--radius-md);
            transition: var(--transition);
            border: 1px solid var(--akaunting-green);
            background-color: var(--akaunting-green);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .login-link:hover {
            background-color: var(--akaunting-green-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-green);
        }

        .login-link::before { display: none; }

        /* Hero Section */
        .hero {
            padding: 140px 5% 100px;
            text-align: center;
            max-width: 1000px;
            margin: 0 auto;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, var(--akaunting-green-light) 0%, transparent 70%);
            border-radius: 50%;
            z-index: -1;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(26, 32, 44, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            z-index: -1;
        }

        .hero h1 {
            font-size: 3.75rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.75rem;
            letter-spacing: -0.02em;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            padding-bottom: 1.5rem;
        }

        .hero h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gradient-green);
            border-radius: 2px;
        }

        .hero p {
            font-size: 1.3rem;
            color: var(--akaunting-gray);
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
            line-height: 1.7;
        }

        .highlight { color: var(--akaunting-green); font-weight: 600; position: relative; display: inline-block; }

        .highlight::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 0;
            width: 100%;
            height: 6px;
            background-color: var(--akaunting-green-light);
            z-index: -1;
            border-radius: 3px;
        }

        /* ✅ Get Started Free Button Green */
        .btn-container { display: flex; justify-content: center; gap: 1.5rem; margin-top: 2rem; flex-wrap: wrap; }

        .btn-primary {
            background: var(--akaunting-green);
            color: white;
            padding: 1.15rem 3rem;
            border-radius: var(--radius-xl);
            font-size: 1.15rem;
            font-weight: 700;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            box-shadow: var(--shadow-green);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary:hover {
            background: var(--akaunting-green-dark);
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(109, 162, 82, 0.3);
        }

        .btn-primary:active { transform: translateY(-1px); }

        /* Features Section */
        .features { padding: 80px 5%; background-color: var(--akaunting-light); margin-top: 40px; }

        .features-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 2.5rem 2rem;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--akaunting-gray-light);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-green);
            transition: width 0.3s ease;
        }

        .feature-card:hover::before { width: 8px; }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 1.5rem;
            background: var(--akaunting-green-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--akaunting-green);
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            background: var(--gradient-green);
            color: white;
            transform: scale(1.1);
        }

        .feature-title { font-size: 1.4rem; font-weight: 700; margin-bottom: 1rem; color: var(--akaunting-dark); }
        .feature-desc { color: var(--akaunting-gray); font-size: 1rem; line-height: 1.6; }

        /* Footer */
        .simple-footer { padding: 2.5rem 5%; text-align: center; color: var(--akaunting-gray); font-size: 0.95rem; border-top: 1px solid var(--akaunting-gray-light); margin-top: auto; background-color: white; }

        .footer-links { display: flex; justify-content: center; gap: 2rem; margin-top: 1.5rem; flex-wrap: wrap; }
        .footer-link { color: var(--akaunting-gray); text-decoration: none; transition: var(--transition); font-weight: 500; position: relative; padding-bottom: 2px; }
        .footer-link::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background-color: var(--akaunting-green); transition: var(--transition); }
        .footer-link:hover { color: var(--akaunting-green); }
        .footer-link:hover::after { width: 100%; }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 { font-size: 3.25rem; }
            .features-container { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.75rem; }
            .hero p { font-size: 1.2rem; padding: 0 1rem; }
            .btn-container { flex-direction: column; align-items: center; }
            .btn-primary { width: 100%; max-width: 320px; }
            nav { padding: 1.2rem 5%; }
            .hero { padding: 120px 5% 80px; }
            .features-container { grid-template-columns: 1fr; max-width: 500px; }
        }

        @media (max-width: 480px) {
            .hero h1 { font-size: 2.25rem; }
            .hero p { font-size: 1.1rem; }
            .logo { font-size: 1.5rem; }
            .footer-links { flex-direction: column; gap: 1rem; }
            .hero::before, .hero::after { display: none; }
        }

        /* Animations */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

        .hero h1, .hero p, .btn-container { animation: fadeIn 0.8s ease-out forwards; }
        .hero p { animation-delay: 0.2s; opacity: 0; }
        .btn-container { animation-delay: 0.4s; opacity: 0; }
        .feature-card { animation: fadeIn 0.8s ease-out forwards; opacity: 0; }
        .feature-card:nth-child(1) { animation-delay: 0.5s; }
        .feature-card:nth-child(2) { animation-delay: 0.6s; }
        .feature-card:nth-child(3) { animation-delay: 0.7s; }

        .btn-primary { animation: float 3s ease-in-out infinite 1s; }

    </style>
</head>
<body>

    <nav id="navbar">
        <a href="/" class="logo">Akaunting<span class="logo-dot">.</span></a>
        <a href="{{ route('login') }}" class="login-link">
            <i class="fas fa-sign-in-alt"></i>
            Login
        </a>
    </nav>

    <section class="hero">
        <h1>Free Accounting Software <br>for Small Businesses</h1>
        <p>From <span class="highlight">invoicing</span> to <span class="highlight">expense tracking</span> to <span class="highlight">accounting</span>, Akaunting has all the tools you need to manage your money online, for free.</p>
        
        <div class="btn-container">
            <form action="{{ route('login') }}" method="GET">
                <button type="submit" class="btn-primary">
                    <i class="fas fa-rocket"></i>
                    Get Started Free
                </button>
            </form>
        </div>
    </section>

    <section class="features">
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3 class="feature-title">Professional Invoicing</h3>
                <p class="feature-desc">Create beautiful, customizable invoices in minutes and get paid faster with automatic payment reminders.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">Real-Time Reports</h3>
                <p class="feature-desc">Monitor your business health with detailed financial reports and dashboards updated in real-time.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="feature-title">Secure & Reliable</h3>
                <p class="feature-desc">Your data is protected with enterprise-grade security and automatic backups. Always available.</p>
            </div>
        </div>
    </section>

    <footer class="simple-footer">
        <p>&copy; 2023 Akaunting. Free accounting software for small businesses.</p>
        <div class="footer-links">
            <a href="#" class="footer-link">Privacy Policy</a>
            <a href="#" class="footer-link">Terms of Service</a>
            <a href="#" class="footer-link">Contact Support</a>
            <a href="#" class="footer-link">Documentation</a>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
