<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md border-r">
        <div class="p-4 text-xl font-bold text-blue-600 border-b">Dashboard Admin</div>
        <nav class="p-4 space-y-2">
            <a href="/admin/produk" class="block px-4 py-2 rounded hover:bg-blue-100">Kelola Produk</a>
            <a href="/admin/pesanan" class="block px-4 py-2 rounded hover:bg-blue-100">Pesanan</a>
            <a href="/admin/pengguna" class="block px-4 py-2 rounded hover:bg-blue-100">Pengguna</a>
            <a href="/admin/laporan" class="block px-4 py-2 rounded hover:bg-blue-100">Laporan</a>
            <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-red-100">Keluar</a>
        </nav>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 p-6">
        @yield('content')
    </div>
</div>
