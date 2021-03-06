<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- <!-- CSS only --> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <!-- JavaScript Bundle with Popper --> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper">

        {{-- <!-- HEADER --> --}}
        <header>
          <div class="netflixLogo">
            <a id="logo" href="/home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
          </div>      
          <nav class="main-nav">                
            <a href="/home">Home</a>
            {{-- <a href="/">TV Shows</a> --}}
            <a href="/view">Movies</a>
            {{-- <a href="/">Originals</a> --}}
            {{-- <a href="/">Recently Added</a> --}}
            {{-- <a target="/" href="https://codepen.io/cb2307/full/NzaOrm">Portfolio</a>         --}}
          </nav>
          {{-- <nav class="sub-nav">
            <a href="/"><i class="fas fa-search sub-nav-logo"></i></a>
            <a href="/"><i class="fas fa-bell sub-nav-logo"></i></a>
            <a href="/">Account</a>        
          </nav> --}}      
        </header>
        <br><br>
        <div class="container"><img src="https://cdn.mos.cms.futurecdn.net/ct2MNTBjyDbNbNXdY8pHzH.jpg" alt="" srcset="" style="width: 80vw; height:65vh" ></div>
        {{-- <!-- END OF HEADER --> --}}
        <br><br><br>
        <div>@yield('content')</div>
    
    {{-- <!-- LINKS --> --}}
    <section class="link">
        <div class="logos">
          <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
        </div>
        <div class="sub-links">
          <ul>
            <li><a href="#">Audio and Subtitles</a></li>
            <li><a href="#">Audio Description</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Legal Notices</a></li>
            <li><a href="#">Corporate Information</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </section>
      {{-- <!-- END OF LINKS --> --}}
  
      {{-- <!-- FOOTER --> --}}
      <footer>
        <p>&copy 1997-2018 Netflix, Inc.</p>
        <p>DMTA^2 &copy 2018</p>
      </footer>
    </div>
</body>
</html>