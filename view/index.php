<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harum - Penginapan Murah di Bali</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- cdn slider js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container d-flex justify-content-between align-items-center py-4 px-6">
            <div class="d-flex align-items-center">
                <img src="./img/logo.jpg" alt="Harum Logo" class="img-fluid" style="height: 40px;">
            </div>
            <nav class="d-flex">
                <a href="#" class="text-dark mx-2">Hotel</a>
                <a href="#" class="text-dark mx-2">Villa</a>
                <a href="#" class="text-dark mx-2">Apartemen</a>
            </nav>
            <button class="btn btn-primary">Daftar</button>
        </div>
    </header>

    <!-- Main Content --> 
    <main class="bg-light">
        <!-- Hero Section -->
        <section class="bg-cover bg-center text-white text-center" style="background-image: url('./img/banner.png'); padding: 80px 0;">
            <div class="container">
                <h1 class="display-4 font-weight-bold">Penginapan murah yang ada di Bali.</h1>
                <p class="mt-4">Membuat anda berhemat</p>
            </div>
        </section>

        <!-- subjudul -->
        <div class="subjudul mt-4 p-4">
            <h1 class="h2 font-weight-bold text-dark mb-3">Inspirasi hotel untuk kamu</h1>
            <p>Cek inspirasi menginapmu di Bali sekarang</p>
        </div>
        
        <!-- slider -->
        <div class="container mt-4 p-4">
            <div class="responsive d-flex">
                <img src="./img/rekomend1.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend2.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend3.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend4.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend1.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend2.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend3.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend4.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
                <img src="./img/rekomend1.jpg" alt="" class="img-fluid mr-3" style="width: 200px; height: 100px; object-fit: cover;">
            </div>
        </div>
        <!-- end slider -->

        <!-- main content -->
        <div class="container">
            <h1 class="text-center h2 font-weight-bold text-dark mb-4"><span class="text-primary">Rekomendasi hotel </span>bintang 5 untuk anda!</h1>
            <div class="bungkus-luar d-flex p-4">
                <div class="konten-kiri mr-3">
                    <img src="./img/apurva.png" alt="" class="img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="konten-kanan">
                    <h3 class="text-primary">The Apurva Kempinski Bali</h3>
                </div>
            </div>
        </div>
        <!-- end main content -->

        <!-- Footer -->
        <footer class="bg-white py-4">
            <div class="container d-flex justify-content-between align-items-center">
                <img src="./img/logo.jpg" alt="" class="img-fluid" style="height: 40px;">
                <span class="text-dark">©2024 - Harum</span>
                <div class="d-flex">
                    <a href="#" class="text-dark mx-2">Tim Developer</a>
                    <a href="#" class="text-dark mx-2">Kontak Kami</a>
                    <a href="#" class="text-dark mx-2">About</a>
                </div>
            </div>
        </footer>
        <script src="./js/script.js"></script>
    </body>
</html>
