



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harum - Penginapan Murah di Bali</title>
    <link rel="stylesheet" href="/UTSwebC/css/coba.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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
    <header class="bg-white shadow-sm py-3 fw-bold fixed-top ">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="coba1.html">
                    <img src="../img/logo.jpg" alt="Harum Logo" class="img-fluid" style="height: 40px;">
                </a>
            </div>
            <div class="right-side d-flex align-items-center">
                <nav class="navbar d-flex justify-content-end">
                    <a href="#" class="text-dark mx-2">Hotel</a>
                    <a href="#" class="text-dark mx-2">Villa</a>
                    <a href="#" class="text-dark mx-2">Apartemen</a>
                </nav>
                <div class="ml-2">
                    <a href="account.html">
                        <img src="/UTSwebC/img/pp.png" alt="Profile" class="profile img-fluid rounded-circle profile-image" height="30px">
                    </a>                
                </div>
            </div>   
        </div>
    </header>


    <!-- Main Content --> 
    <main class="bg-light">
        <!-- Hero Section -->
        <section class="min-vh-100 bg-cover bg-center text-white" style="background-image: url('../img/banner.png');">
            <div class="container d-flex align-items-center h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-6 text-start"> 
                        <h4 class="display-6 text-bold">Penginapan murah yang ada di Bali.</h4>
                        <p class="mt-3">Membuat anda berhemat</p>
                    </div>
                    <div class="col-md-6 mt-5 p-5">
                        <div class="card bg-light p-4">
                            <h6 class="text-secondary">Cari hotel yuk..</h6>
                            <div class="mb-3">
                                <label for="location" class="form-label">Mau nginep dimana?</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                    <input type="text" class="form-control" id="location" placeholder="Masukkan lokasi">
                                </div>
                            </div>
                            <button class="btn btn-primary w-100">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
               

        <!-- subjudul -->
        <div class="subjudul mt-4 p-4">
            <h1 class="h2 font-weight-bold text-dark mb-3">Inspirasi hotel untuk kamu</h1>
            <p>Cek inspirasi menginapmu di Bali sekarang</p>
        </div>
        
        <!-- slider -->
        <div id="carouselExampleInterval" class="carousel slide p-3" data-bs-ride="carousel">
			<div class="carousel-inner">

				<div class="carousel-item active" data-bs-interval="5000">
                    <div class="d-flex justify-content-between grid gap-1">
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek1.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Akomodasi nyaman dekat pantai</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek2.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 2</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek3.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 3</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek4.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 4</p>
						</div>
				    </div>
                </div>
				<div class="carousel-item" data-bs-interval="5000">
                    <div class="d-flex justify-content-between">
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek5.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 1</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek6.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 2</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek7.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 3</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek8.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 4</p>
						</div>
				    </div>
				</div>
                
			</div>
			<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
		</div>
        <!-- end slider -->

        <!-- main content -->
        <div class="container mt-4 p-4">
        <div class="subjudul mt-4 p-4">
            <h1 class="h2 font-weight-bold text-dark mb-3">Inspirasi menginap untuk liburanmu selanjutnya</h1>
        </div>
        </div>


        <!-- konten 2 -->
         <div class="container">
            <div class="bungkus-konten">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- end main content -->


        <!-- Footer -->
        <footer class="bg-white py-4">
            <div class="container d-flex justify-content-between align-items-center">
                <img src="../img/logo.jpg" alt="" class="img-fluid" style="height: 40px;">
                <span class="text-dark">©2024 - Harum</span>
                <div class="d-flex">
                    <a href="#" class="text-dark mx-2">Tim Developer</a>
                    <a href="#" class="text-dark mx-2">Kontak Kami</a>
                    <a href="#" class="text-dark mx-2">About</a>
                </div>
            </div>
        </footer>
        <script src="./js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
