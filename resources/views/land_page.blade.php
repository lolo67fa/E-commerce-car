<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            color: #fff;
            background:
                linear-gradient(rgba(9, 18, 35, 0.35), rgba(9, 18, 35, 0.35)),
                url('/images/road-220058_1280.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .top-nav {
            width: 90%;
            margin: 18px auto 0;
            padding: 12px 18px;
            border-radius: 14px;
            background: rgba(19, 28, 46, 0.45);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.18);
            box-shadow: 0 8px 18px rgba(0,0,0,0.20);
        }

        .brand-logo {
            color: #fff;
            text-decoration: none;
            font-size: 1.15rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .brand-logo i {
            font-size: 1.35rem;
        }

        .nav-links a {
            color: rgba(255,255,255,0.88);
            text-decoration: none;
            margin-left: 28px;
            font-size: 0.95rem;
            transition: 0.2s ease;
        }

        .nav-links a:hover {
            color: #ffffff;
        }

        .hero-wrapper {
            min-height: calc(100vh - 110px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px 80px;
        }

        .hero-card {
    width: 100%;
    max-width: 760px;
    background: rgba(255,255,255,0.90);
    border-radius: 24px;
    padding: 34px 34px 28px;
    color: #111827;
    box-shadow: 0 22px 40px rgba(0,0,0,0.22);
    border: 1px solid rgba(255,255,255,0.65);
    position: relative;
}

        .mini-label {
            text-align: center;
            font-size: 0.95rem;
            color: #3f3f46;
            margin-bottom: 8px;
        }

        .mini-label i {
            font-size: 0.78rem;
            margin-right: 5px;
        }

        .hero-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.18;
            color: #0f172a;
            margin-bottom: 18px;
        }

        .hero-text {
            text-align: center;
            color: #374151;
            font-size: 1.05rem;
            line-height: 1.9;
            max-width: 640px;
            margin: 0 auto 28px;
        }

        .brand-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
            margin-bottom: 14px;
        }

        .brand-btn {
            min-width: 138px;
            padding: 12px 18px;
            border-radius: 14px;
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            text-align: center;
            border: 2px solid rgba(255,255,255,0.38);
            box-shadow:
                inset 0 2px 4px rgba(255,255,255,0.18),
                0 8px 16px rgba(0,0,0,0.18);
            transition: all 0.22s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .brand-btn:hover {
            transform: translateY(-2px);
            color: #fff;
        }

        .toyota-btn {
            background: linear-gradient(180deg, #b5222b, #8f1019);
        }

        .kia-btn {
            background: linear-gradient(180deg, #17855c, #116646);
        }

        .hyundai-btn {
            background: linear-gradient(180deg, #35598d, #253d63);
        }

        .mazda-btn {
            background: linear-gradient(180deg, #7c7f87, #5d6168);
        }

        .allcars-wrap {
            text-align: center;
            margin-top: 10px;
        }

        .allcars-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-width: 175px;
            padding: 13px 22px;
            border-radius: 14px;
            background: linear-gradient(180deg, #3ca89d, #287f77);
            color: white;
            text-decoration: none;
            font-weight: 700;
            border: 2px solid rgba(255,255,255,0.40);
            box-shadow:
                inset 0 2px 4px rgba(255,255,255,0.18),
                0 10px 18px rgba(0,0,0,0.18);
            transition: 0.22s ease;
        }

        .allcars-btn:hover {
            transform: translateY(-2px);
            color: #fff;
        }

        .corner-icon {
            position: absolute;
            color: #1f2937;
            opacity: 0.88;
            font-size: 1.8rem;
        }

        .corner-top-right {
            top: 24px;
            right: 24px;
        }

        .corner-bottom-left {
            bottom: 20px;
            left: 20px;
            font-size: 1.6rem;
        }

        .corner-bottom-right {
            bottom: 20px;
            right: 24px;
            font-size: 1.8rem;
        }

        .footer-bar {
            width: 90%;
            margin: 0 auto 20px;
            padding: 12px 18px;
            border-radius: 14px;
            background: rgba(19, 28, 46, 0.45);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.18);
            box-shadow: 0 8px 18px rgba(0,0,0,0.20);
            color: #fff;
        }

        .social-links a {
            color: #fff;
            margin-right: 14px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .social-links a:hover {
            opacity: 0.8;
        }

        .copyright {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.92);
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-card {
                max-width: 95%;
                padding: 28px 20px 24px;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-text {
                font-size: 0.98rem;
            }

            .brand-btn,
            .allcars-btn {
                width: 100%;
            }

            .brand-row {
                gap: 10px;
            }

            .corner-icon {
                display: none;
            }

            .footer-bar {
                text-align: center;
            }

            .footer-bar .d-flex {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

    <nav class="top-nav">
        <div class="d-flex justify-content-between align-items-center">
            <a href="/" class="brand-logo">
                <i class="bi bi-car-front-fill"></i>
                <span>Car Store</span>
            </a>

            <div class="nav-links">
                <a href="/cars">Models</a>
                <a href="#about">About Us</a>
                <a href="#contact">Contact</a>
                <a href="#blog">Blog</a>
            </div>
        </div>
    </nav>

    <section class="hero-wrapper">
        <div class="hero-card">
            <div class="corner-icon corner-top-right">
                <i class="bi bi-speedometer2"></i>
            </div>

            <div class="mini-label">
                <i class="bi bi-stars"></i>Premium Car Collection
            </div>

            <h1 class="hero-title">Find the right car for your next drive</h1>

            <p class="hero-text">
                Explore a clean collection of modern cars from trusted brands.
                Compare models, browse by brand, and view cars in a simple and elegant interface.
            </p>

            <div class="brand-row">
                <a href="/brand/Toyota" class="brand-btn toyota-btn">
                    <i class="bi bi-car-front"></i>Toyota
                </a>

                <a href="/brand/Kia" class="brand-btn kia-btn">
                    <i class="bi bi-lightning-charge-fill"></i>Kia
                </a>

                <a href="/brand/Hyundai" class="brand-btn hyundai-btn">
                    <i class="bi bi-speedometer2"></i>Hyundai
                </a>

                <a href="/brand/Mazda" class="brand-btn mazda-btn">
                    <i class="bi bi-fire"></i>Mazda
                </a>
            </div>

            <div class="allcars-wrap">
                <a href="/cars" class="allcars-btn">
                    <i class="bi bi-grid-3x3-gap-fill"></i>View All Cars
                </a>
            </div>

            <div class="corner-icon corner-bottom-left">
                <i class="bi bi-award"></i>
            </div>

            <div class="corner-icon corner-bottom-right">
                <i class="bi bi-speedometer2"></i>
            </div>
        </div>
    </section>

    <footer class="footer-bar" id="contact">
        <div class="d-flex justify-content-between align-items-center">
            <div class="social-links">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>

            <div class="copyright">
                © 2026 Car Store
            </div>
        </div>
    </footer>

</body>
</html>