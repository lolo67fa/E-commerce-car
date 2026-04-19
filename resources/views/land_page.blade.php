<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
       
   body {
    background: url('/images/road-220058_1280.jpg');
    background-size: cover;
    background-position: center;
}

        .navbar-custom {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(8px);
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .hero-section {
            padding: 90px 0 50px;
        }

        .hero-card {
            background: rgba(255, 255, 255, 0.78);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.55);
            border-radius: 32px;
            padding: 60px 40px;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.10);
        }

        
          .hero-card {
    max-width: 800px; /* كان كبير */
    margin: auto;
    padding: 40px 30px; /* صغرناه */
    background: rgba(255,255,255,0.85);
    border-radius: 20px;
}
        

        .hero-title {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.2;
            color: #0f172a;
            margin-bottom: 18px;
        }

        .hero-text {
            max-width: 760px;
            margin: 0 auto;
            color: #64748b;
            font-size: 1.12rem;
            line-height: 1.9;
        }

        .brand-btn {
            min-width: 155px;
            padding: 14px 20px;
            border-radius: 18px;
            font-weight: 700;
            font-size: 1rem;
            border: none;
            transition: all 0.25s ease;
            box-shadow: 0 12px 22px rgba(15, 23, 42, 0.08);
        }

        .brand-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 28px rgba(15, 23, 42, 0.12);
        }

        .toyota-btn {
            background: #ef4444;
            color: white;
        }

        .kia-btn {
            background: #111827;
            color: white;
        }

        .hyundai-btn {
            background: #2563eb;
            color: white;
        }

        .mazda-btn {
            background: #facc15;
            color: #111827;
        }

        .allcars-btn {
            background: #10b981;
            color: white;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: #0f172a;
        }

        .section-text {
            color: #64748b;
            max-width: 650px;
            margin: 12px auto 0;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.60);
            border-radius: 26px;
            padding: 32px 24px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.08);
            height: 100%;
            transition: 0.25s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 66px;
            height: 66px;
            margin: 0 auto 18px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eff6ff;
            color: #2563eb;
            font-size: 1.8rem;
        }

        .feature-title {
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .feature-desc {
            color: #64748b;
            line-height: 1.8;
            margin: 0;
        }

        .footer {
            margin-top: 70px;
            background: rgba(15, 23, 42, 0.97);
            color: #cbd5e1;
            text-align: center;
            padding: 18px 0;
            font-size: 15px;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-card {
                padding: 40px 24px;
            }

            .brand-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-car-front-fill me-2"></i>Car Store
            </a>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="hero-card text-center">
                <div class="hero-badge">
                    <i class="bi bi-stars"></i>
                    Premium Car Collection
                </div>

                <h1 class="hero-title">Find the right car for your next drive</h1>

                <p class="hero-text">
                    Explore a clean collection of modern cars from trusted brands.
                    Compare models, browse by brand, and view cars in a simple and elegant interface.
                </p>

                <div class="d-flex flex-wrap justify-content-center gap-3 mt-5">
                    <a href="/brand/Toyota" class="btn brand-btn toyota-btn">
                        <i class="bi bi-car-front me-2"></i>Toyota
                    </a>

                    <a href="/brand/Kia" class="btn brand-btn kia-btn">
                        <i class="bi bi-lightning-charge-fill me-2"></i>Kia
                    </a>

                    <a href="/brand/Hyundai" class="btn brand-btn hyundai-btn">
                        <i class="bi bi-speedometer2 me-2"></i>Hyundai
                    </a>

                    <a href="/brand/Mazda" class="btn brand-btn mazda-btn">
                        <i class="bi bi-fire me-2"></i>Mazda
                    </a>

                    <a href="/cars" class="btn brand-btn allcars-btn">
                        <i class="bi bi-grid-3x3-gap-fill me-2"></i>View All Cars
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-4">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why choose our store?</h2>
                <p class="section-text">
                    We focused on keeping the design simple, modern, and clear for a better browsing experience.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="feature-title">Trusted Selection</h3>
                        <p class="feature-desc">
                            Browse carefully presented car models with details that help users compare clearly.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                        <h3 class="feature-title">Clear Prices</h3>
                        <p class="feature-desc">
                            Each car is shown with direct pricing and simple information for fast understanding.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="bi bi-ui-checks-grid"></i>
                        </div>
                        <h3 class="feature-title">Smooth Browsing</h3>
                        <p class="feature-desc">
                            Move between brands easily and view all cars in a clean, user-friendly layout.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        Car Store © 2026
    </footer>

</body>
</html>