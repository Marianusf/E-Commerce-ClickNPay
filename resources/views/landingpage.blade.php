<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClickNPay - Your One-Stop E-Commerce Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <section class="relative h-screen text-white">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/30 z-10"></div>

        <!-- Background Image -->
        <img src="https://source.unsplash.com/1600x900/?shopping,ecommerce" alt="ClickNPay Hero Background"
            class="absolute inset-0 w-full h-full object-cover z-0" />

        <!-- Hero Content -->
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to ClickNPay</h1>
            <p class="mb-6 text-lg md:text-xl max-w-xl">Your one-stop solution for all your shopping needs.</p>
            <a href="#shop"
                class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg text-lg transition duration-300 ease-in-out">
                Start Shopping
            </a>
        </div>
    </section>


    <!-- Features Section -->
    <section class="py-16 bg-white text-center">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Why Choose ClickNPay?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="text-blue-500 text-5xl mb-4">🛒</div>
                    <h4 class="text-xl font-semibold mb-2">Wide Range of Products</h4>
                    <p>Find everything you need in one place.</p>
                </div>
                <div>
                    <div class="text-green-500 text-5xl mb-4">🔒</div>
                    <h4 class="text-xl font-semibold mb-2">Secure Payments</h4>
                    <p>Shop with confidence with our secure payment system.</p>
                </div>
                <div>
                    <div class="text-yellow-500 text-5xl mb-4">🚚</div>
                    <h4 class="text-xl font-semibold mb-2">Fast Delivery</h4>
                    <p>Get your orders delivered quickly and safely.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Preview -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Your Cart Preview</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-lg p-4">
                    <img src="/images/product1.jpg" class="w-full h-40 object-cover rounded mb-3" alt="Product 1">
                    <h4 class="font-semibold text-lg">Product Name 1</h4>
                    <p class="text-gray-600">Rp 120.000</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4">
                    <img src="/images/product2.jpg" class="w-full h-40 object-cover rounded mb-3" alt="Product 2">
                    <h4 class="font-semibold text-lg">Product Name 2</h4>
                    <p class="text-gray-600">Rp 95.000</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4">
                    <img src="/images/product3.jpg" class="w-full h-40 object-cover rounded mb-3" alt="Product 3">
                    <h4 class="font-semibold text-lg">Product Name 3</h4>
                    <p class="text-gray-600">Rp 150.000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Products Chart -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Best-Selling Products</h2>
            <canvas id="productChart" class="mx-auto w-full max-w-md"></canvas>
        </div>
    </section>

    <section class="bg-gray-100 py-10 overflow-hidden">
        <h2 class="text-2xl font-bold text-center mb-6">What Our Customers Say</h2>

        <div class="whitespace-nowrap overflow-x-hidden">
            <div class="inline-block animate-marquee space-x-20">
                <span class="inline-block bg-white shadow-md rounded-xl px-6 py-4 mx-2">
                    "Amazing experience! Fast delivery and great quality." - Sarah
                </span>
                <span class="inline-block bg-white shadow-md rounded-xl px-6 py-4 mx-2">
                    "ClickNPay made my life easier. Love the interface!" - John
                </span>
                <span class="inline-block bg-white shadow-md rounded-xl px-6 py-4 mx-2">
                    "Secure payments and responsive support. Highly recommended!" - Nina
                </span>
                <span class="inline-block bg-white shadow-md rounded-xl px-6 py-4 mx-2">
                    "Found everything I need in one place. Thanks ClickNPay!" - Alex
                </span>
            </div>
        </div>
    </section>

    <!-- Tambahkan animasi marquee ke CSS kamu -->
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            display: inline-block;
            animation: marquee 30s linear infinite;
        }
    </style>

    <!-- Platform Advantages -->
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">What Makes ClickNPay Stand Out?</h2>
            <ul class="space-y-4 text-left max-w-xl mx-auto">
                <li>✅ Easy-to-use interface</li>
                <li>✅ Mobile-responsive design</li>
                <li>✅ 24/7 customer support</li>
                <li>✅ Secure checkout with multiple payment options</li>
                <li>✅ Frequent discounts and flash sales</li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy;
            <script>
                document.write(new Date().getFullYear())
            </script> ClickNPay. All rights reserved.
        </p>
    </footer>

    <!-- ChartJS Script -->
    <script>
        const ctx = document.getElementById('productChart').getContext('2d');
        const productChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Product Beras', 'Product Sabun', 'Product Kuliah', 'Product D'],
                datasets: [{
                    label: 'Sales (Units)',
                    data: [120, 95, 150, 80],
                    backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `${context.parsed.y} units sold`;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
