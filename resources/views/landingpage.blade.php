<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickNPay - Your One-Stop E-Commerce Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('/images/hero-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .features {
            padding: 50px 0;
        }

        .footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>Welcome to ClickNPay</h1>
            <p>Your one-stop solution for all your shopping needs.</p>
            <a href="#shop" class="btn btn-primary btn-lg">Start Shopping</a>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features text-center">
        <div class="container">
            <h2>Why Choose ClickNPay?</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <i class="bi bi-cart-check" style="font-size: 3rem;"></i>
                    <h4>Wide Range of Products</h4>
                    <p>Find everything you need in one place.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-shield-check" style="font-size: 3rem;"></i>
                    <h4>Secure Payments</h4>
                    <p>Shop with confidence with our secure payment system.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-truck" style="font-size: 3rem;"></i>
                    <h4>Fast Delivery</h4>
                    <p>Get your orders delivered quickly and safely.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} ClickNPay. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
