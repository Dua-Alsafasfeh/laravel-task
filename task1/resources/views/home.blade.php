<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71fa6fa637.js" crossorigin="anonymous"></script>
    <title>chocolate</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}" >
</head>

<body class="antialiased">
    <header>
        <!-- Navigation -->
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color justify-content-between"  style="background-color:#25274d;">
            <a class="navbar-brand" href="./home">candy chocolate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./home">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                </ul>
                
            </div>
            <div>
                <ul class="ul-nav navbar-nav nav-flex-icons ">
                    <li class="nav-item">
                        <a href="./register" class="nav-link waves-effect waves-light">
                            Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./login" class="nav-link waves-effect waves-light">
                            login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
    </header>
    <br>
    <main>
        <!-- Page Content -->
        <div class="container">
            <!-- slider gallery -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.lindtusa.com/wcsstore/LindtCatalogAssetStore/images/content/homepage/05232022-100-LINDOR-Truffles-for-30-V2-1500x680.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.lindtusa.com/wcsstore/LindtCatalogAssetStore/images/content/homepage/05032022-double-delight-2-for-45-hero-1500x680.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.lindtusa.com/wcsstore/LindtCatalogAssetStore/images/content/homepage/05162022-Intro-Raspberry-and-Cream-1500x680.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.lindtusa.com/wcsstore/LindtCatalogAssetStore/images/content/homepage/05232022-Raise-the-Bars-Chocolate-Bar-Offers-1500x680.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.lindtusa.com/wcsstore/LindtCatalogAssetStore/images/content/homepage/05102022-lindt-ootally-amazing-1500x680.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- end slider  -->
        <br>
        <div class="container">
            <div class="row">
                <h2 class="offset-md-5">Top Categories</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.lindtusa.com/wcsstore/Lindtusa/Attachment/hp/hp02-category/lindor-truffles-category-250x150.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">LINDOR Truffles
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.lindtusa.com/wcsstore/Lindtusa/Attachment/hp/hp02-category/lindor-custom-mix-category-20200220-250x150.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Custom Mix
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.lindtusa.com/wcsstore/LindtCatalogAssetStore/images/content/homepage/Mothers-Day-Seasonal-250x150.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Seasonal
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br>
    <!-- footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">chocolate.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end footer -->
</body>
<!-- sidebar -->

</html>