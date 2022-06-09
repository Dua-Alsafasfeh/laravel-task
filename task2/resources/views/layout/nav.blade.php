<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71fa6fa637.js" crossorigin="anonymous"></script>
    <title>@yield('title','')</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}" >
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
                        <a class="nav-link" href="./shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contactus">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutus">About</a>
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