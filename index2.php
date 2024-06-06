<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harum - Penginapan Murah di Bali</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- cdn slider js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="font-sans antialiased">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-4">
                <img src="./img/logo.jpg" alt="Harum Logo" class="h-10">
            </div>
            <nav class="space-x-6">
                <a href="#" class="text-gray-600 hover:text-gray-800">Hotel</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Villa</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Apartemen</a>
            </nav>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Daftar</button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="bg-gray-50">
        <!-- Hero Section -->
        <section class="relative bg-cover bg-center" style="background-image: url('./img/banner.png');">
            <div class="container mx-auto py-32 text-center text-white">
                <h1 class="text-4xl font-bold">Penginapan murah yang ada di Bali.</h1>
                <p class="mt-4">Membuat anda berhemat</p>
            </div>
        </section>

        <!-- subjudul -->
        <div class="subjudul mt-15 p-5">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Inspirasi hotel untuk kamu</h1>
        <p>Cek inspirasi menginapmu di Bali sekarang</p>
        </div>
        
        <!-- slider -->
        <div class="container mx-auto mt-5 p-10 gap-4">
            <div class="responsive space-x-5">
                <img src="./img/rekomend1.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend2.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend3.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend4.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend1.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend2.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend3.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend4.jpg" alt="" class="w-48 h-20 object-cover">
                <img src="./img/rekomend1.jpg" alt="" class="w-48 h-20 object-cover">
            </div>
        </div>
        <!-- end slider -->

        <!-- main content -->
        <div class="container">
            <h1 class="text-bold text-center text-2xl font-bold text-gray-800 mb-4"><span class="text-blue">Rekomendasi hotel </span>bintang 5 untuk anda!</h1>
            <div class="bungkus-luar flex p-5">
                <div class="konten-kiri mr-4">
                    <img src="./img/apurva.png" alt="" class="w-50 h-100 object-cover">
                </div>
                <div class="konten-kanan">
                    <h3 class="text-blue-500 text-xl font-semibold">The Apurva Kempinski Bali</h3>
                </div>
            </div>
        </div>
        <!-- end main content -->

        <!-- Footer -->
        <footer class="bg-white py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="./img/logo.jpg" alt="">
                <span class="text-gray-600">©2024 - Harum</span>
                <div class="space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Tim Developer</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Kontak Kami</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">About</a>
                </div>
            </div>
        </footer>
        <script src="./js/script.js"></script>
    </body>
</html>
