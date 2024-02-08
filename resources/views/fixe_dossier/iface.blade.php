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
    <link href="{{asset('css/soutien.css')}}" rel="stylesheet">





  </head>
  <style>


  </style>
  <body  id="bd">
    <div id="haut"></div>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <!-- Brand -->
         <div class="logo">
               <img src="{{asset('image/saina-2-1600x900.png')}}"  srcset="">
         </div>

        <!-- Links -->
        <div class="list_nav" style="">
        <ul class="navbar-nav">
                <li class="nav-item me-3">
                <a class="nav-link active" href="{{route('page_1')}}">Accueil</a>
                </li>
                <li class="nav-item me-3">
                <a class="nav-link" href="{{route('doc')}}">Documentation</a>
                </li>
                <li class="nav-item me-3">
                <a class="nav-link" href="{{route('guide')}}">Guide </a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href=" {{route('a_propos')}}">A propos</a>
                </li>
                &nbsp;&nbsp;
                <li class="nav-item " onclick="document.getElementById('id09').style.display='block'" style="cursor: pointer">
                    <span class="nav-link"><i style="font-size: 1.2em" class=" fa fa-circle-question"></i></span>
                </li>

            </ul>
        </div>
        <div style="margin-left:45%;display:none"  class="btn_dec" id="btn_dec">
           <a href="#" onclick=" confirmLogout();" class=" btn btn-outline-secondary text-decoration-none" style=" "><i class="fa fa-sign-out" ></i> Deconnexion</a>
        </div>
    </nav>
    

    @yield("contenu")




<div  class="info" id="id09">
    <div class="info-content">
        <div class="close_r" onclick="document.getElementById('id09').style.display='none'" >
            <i class=" fa fa-close"></i>
        </div>

        <p class="h5"> Raccourcis clavier</p>
        <hr>
        <div class=" d-flex align-items-start" style=" margin-left:12em; font-size:12px">

            <div>
                <p><i style="color:rgb(194, 194, 194)" class=" fa fa-star"></i> Sur la page peripherique </p>
                <div><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">A</span> &nbsp;&nbsp; : Acceuille</div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">D</span> &nbsp;&nbsp; : Documentation </div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">G</span> &nbsp;&nbsp; : Guide </div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">P</span> &nbsp;&nbsp; : A propos </div>


            </div>
            <div style=" margin-left:7em">

                <p><i style="color:rgb(194, 194, 194)" class=" fa fa-star"></i> Sur la page interieur </p>
                <div><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">alt</span> + <span class=" btn btn-outline-light">A</span> &nbsp;&nbsp; : Acceuille</div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">alt</span> + <span class=" btn btn-outline-light">D</span> &nbsp;&nbsp; : Declaration </div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">alt</span> + <span class=" btn btn-outline-light">R</span> &nbsp;&nbsp; : Recapitulation IRSA </div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">alt</span> + <span class=" btn btn-outline-light">L</span> &nbsp;&nbsp; : Liste Paiement </div>
                <div class=" mt-2"><span class=" btn btn-outline-light">crtl</span> + <span class=" btn btn-outline-light">alt</span> + <span class=" btn btn-outline-light">M</span> &nbsp;&nbsp; : Message</div>



            </div>


        </div>


    </div>

    </div>


<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
<script src="{{asset('js/logout.js')}}"></script>
<script>
    function confirmLogout() {
        // Utiliser la fonction JavaScript confirm pour afficher la boîte de dialogue
        var result = confirm("Êtes-vous sûr de vouloir vous déconnecter?");

        // Si l'utilisateur clique sur "OK" (true), rediriger vers la route de déconnexion
        if (result) {
            window.location.href = '{{ route('deconnexion') }}';
        }






</script>
</body>
</html>
