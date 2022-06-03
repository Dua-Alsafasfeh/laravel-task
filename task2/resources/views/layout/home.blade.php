@extends('layout.master')
@section('title','Home')
@section('content')
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
@endsection