<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>UMKMShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    @include('components.navbar')
    <main class="mt-4">
        @yield('content')
    </main>
</body>

</html>
