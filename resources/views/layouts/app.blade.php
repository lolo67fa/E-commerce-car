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
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .top-nav {
            width: 92%;
            margin: 18px auto 0;
            padding: 12px 18px;
            border-radius: 14px;
            background: rgba(19, 28, 46, 0.55);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.18);
            box-shadow: 0 8px 18px rgba(0,0,0,0.20);
            position: relative;
            z-index: 10;
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

        .brand-logo:hover {
            color: #fff;
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

        @media (max-width: 768px) {
            .top-nav {
                width: 94%;
            }

            .nav-links {
                display: none;
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
                <a href="/">Home</a>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>