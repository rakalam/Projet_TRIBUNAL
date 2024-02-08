<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title> IMPOT MADAGASCAR</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/offcanvas-navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/soutien.css')}}" rel="stylesheet">
  </head>
  <body >

<nav class="navbar navbar-expand-lg fixed-top navbar-dark " style="background-color: rgb(255, 255, 255);
                                                                   box-shadow:-1px -1px 8px black">
                                                
  <div class="container-fluid">
  
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="d-flex text-center" style="color:rgb(139, 82, 8)">
      <img src="{{asset('image/télécharger.jfif')}}" width="70" alt="" srcset="">
      <p class="text-center"> &nbsp;&nbsp; <B> REPOBLIKAN' I MADAGASIKARA</B> <br> </p>
    </div>
   

      

      <form class="d-flex col-5"  method="get" action=" ">
        <input class="form-control me-2 w-100" type="search" placeholder="Recherche" name="val" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"> <i class="fa-solid fa-search"></i></button>
      </form>
    </div>
 
</nav>
        <div class="top mt-0 text-start">
          <h6> <i class=" fa fa-bars" > </i>&nbsp;&nbsp; INFORMATION IRSA</h6>

        </div>

      <div id="sidebar" class="sidebar">

        <a href="" id="a1">
            <span class="fa fa-home"></span>
           
            <b> Accueil</b>
        </a>
        <a href="" id="a2">
            <span class="fa fa-atom"></span>
            <b>Info sur la Retenu Source</b>
        </a>
        <a href="" id="a3">
            <span class="fa fa-money-bill"></span>
            <b>Info sur la  Versement d'Impôt</b>
        </a>
        <a href="" id="a4">
            <span class="fa fa-bank"></span>
            <b>Info sur la  Declaration</b>
        </a>
        <a href="" id="a5">
            <span class="fa fa-warning"></span>
            <b> Info sur la Penalité de retard</b>
        </a>
       
        <a href="#">
            <span class="fa fa-sign-out-alt "></span>
           <b> Quitter</b>
        </a>
      </div>
      </aside>


<section>

            


        @yield("contenu")


</section>

<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas-navbar.js')}}"></script>
<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>



</body>
</html>
