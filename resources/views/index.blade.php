<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bunga Indah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-pink-200 text-pink-900 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-xl font-bold">Toko Bunga Indah</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-pink-700">Beranda</a></li>
                    <li><a href="#" class="hover:text-pink-700">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-pink-700">Layanan</a></li>
                    <li><a href="#" class="hover:text-pink-700">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Welcome Section -->
    <section class="text-center py-16 bg-white">
        <h2 class="text-3xl font-bold text-pink-900 mb-4">Selamat Datang di Toko Bunga Indah</h2>
        <p class="text-gray-700 mb-8">Kami menyediakan berbagai macam bunga segar untuk segala keperluan Anda.</p>
    </section>

    <!-- About Us -->
    <section class="container mx-auto py-16 px-4">
        <div class="flex flex-col md:flex-row items-center">
            <img src="assets/images/flo.jpg" alt="Bunga" class="w-full md:w-1/3 rounded-lg shadow-lg mb-8 md:mb-0 md:mr-8">
            <div class="md:w-2/3">
                <h3 class="text-2xl font-bold text-pink-900 mb-4">Tentang Kami</h3>
                <p class="text-gray-700">Toko Bunga Indah adalah toko bunga yang telah berpengalaman dalam menyediakan bunga-bunga segar dan berkualitas tinggi untuk berbagai acara. Kami berdedikasi untuk memberikan layanan terbaik kepada pelanggan dengan produk-produk yang indah dan penuh cinta.</p>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold text-pink-900 mb-8">Layanan Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="font-bold text-lg text-pink-900 mb-2">Rangkaian Bunga Pernikahan</h4>
                    <p class="text-gray-700">Menyediakan rangkaian bunga yang indah untuk hari istimewa Anda.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="font-bold text-lg text-pink-900 mb-2">Bunga Meja</h4>
                    <p class="text-gray-700">Bunga meja yang cantik untuk menghiasi ruangan Anda.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="font-bold text-lg text-pink-900 mb-2">Buket Bunga</h4>
                    <p class="text-gray-700">Buket bunga segar untuk hadiah atau keperluan lainnya.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="font-bold text-lg text-pink-900 mb-2">Bunga untuk Pemakaman</h4>
                    <p class="text-gray-700">Menyediakan bunga untuk upacara pemakaman dengan penuh hormat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <footer class="bg-gray-200 py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-around mb-4">
                <div class="mb-4 md:mb-0">
                    <h4 class="font-bold text-lg text-pink-900">Alamat</h4>
                    <p class="text-gray-700">Jl. Bunga No. 123, Jakarta</p>
                </div>
                <div class="mb-4 md:mb-0">
                    <h4 class="font-bold text-lg text-pink-900">Email</h4>
                    <p class="text-gray-700">info@tokobungaindah.com</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg text-pink-900">Telepon</h4>
                    <p class="text-gray-700">(021) 123-4567</p>
                </div>
            </div>
            <p class="text-gray-500">&copy; 2024 Toko Bunga Indah. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
