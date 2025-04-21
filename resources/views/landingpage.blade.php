<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClickNPay - Your One-Stop E-Commerce Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="font-sans text-gray-800">

    <!-- Hero Section -->
    <div class="hero bg-cover bg-center h-screen text-white flex items-center justify-center text-center"
        style="background-image: url('/images/hero-bg.jpg')">
        <div class="bg-black bg-opacity-50 p-8 rounded">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to ClickNPay</h1>
            <p class="text-lg md:text-xl mb-6">Your one-stop solution for all your shopping needs.</p>
            <a href="#shop" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded text-lg">Start
                Shopping</a>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features py-16 bg-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12">Why Choose ClickNPay?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <i class="bi bi-cart-check text-blue-600 text-5xl mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Wide Range of Products</h4>
                    <p>Find everything you need in one place.</p>
                </div>
                <div>
                    <i class="bi bi-shield-check text-blue-600 text-5xl mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Secure Payments</h4>
                    <p>Shop with confidence with our secure payment system.</p>
                </div>
                <div>
                    <i class="bi bi-truck text-blue-600 text-5xl mb-4"></i>
                    <h4 class="text-xl font-semibold mb-2">Fast Delivery</h4>
                    <p>Get your orders delivered quickly and safely.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p>&copy; <span id="year"></span> ClickNPay. All rights reserved.</p>
    </footer>

    <script>
        // Auto-update year
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

</body>

</html>
