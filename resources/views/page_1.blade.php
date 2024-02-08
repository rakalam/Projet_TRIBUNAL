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


    <style>
     
       .vid{
         margin-left: 5em;
         margin-bottom: 6em;
         
       }

       .tet{
         background-color: rgb(5, 110, 23);
         color:white;
         padding: 1em;
         border-radius: 2px;
         box-shadow: 0px 5px 10px rgb(3, 63, 3)
      }
      .image_imp{
         width: 10%;
         height: 3%;
      }
      .lien{
        color: rgb(255, 255, 255);
        border-radius: 3em;
        background: rgb(5, 110, 23);
        transition: 0.5s;
      }
      .lien:hover{
        background: rgb(11, 131, 31);
        transform: scale(1.005);
        transition: 0.5s;
        color: white;
      }
      .navbar{
        background-color: rgb(255, 255, 255);
        box-shadow: -3px -3px 10px rgb(34, 33, 32)
      }
      .luminositer{
        margin-left:90%;
        font-size: 1.2em;
        background-color: rgb(243, 232, 232);
        border-radius: 15px;
        padding-right:2px 
       
        


      }
      .light{
        background-color: rgb(13, 150, 20);
        padding: 8px;
        border-radius: 100%;
        color: white
      }

     
    
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/offcanvas-navbar.css')}}" rel="stylesheet"> 
  </head>
  <body class="bb">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>




 <nav class="navbar navbar-expand-lg fixed-top " aria-label="Main navigation">
  <div class="container-fluid">
    <img src="{{asset('image/télécharger.jfif')}}" width="50" alt="" srcset="">
    
      <div class="luminositer d-flex ">
        <div><i class="fa fa-sun light " id=""></i></div>
                           &nbsp;&nbsp;&nbsp;
        <div> <i class="fa fa-moon  dark" id="luminositer"></i></div>
      </div>
    

  </div>
</nav>



<main class="container " style="display: flex;
                                margin-top: 2em;
                                margin-left:8em">

       <div class=" text-center col-5 " style="margin-top: 6em;
                                                ">
    <div class="navbar-collapse  text-center "  id="navbarsExampleDefault">

        <p style="font-size: 18px; color:rgb(139, 82, 8);"> <B>REPOBLIKAN' I MADAGASIKARA</B> <br>
        <I style="font-size: 12px ;color:rgb(139, 82, 8)">Fitiavana - Tanindrazana - Fandrosoana</I> </p>

      </div>
        <div class="tet d-flex justify-content-between">
           <img class="image_imp" src="{{asset('image/OIP.jfif')}}" alt="" srcset="">
             <p class="h6">
               
             <u><b>  MINISTER DES FINANCES ET DU BUDGET</b></u> <br>
               <u><b>SECTRETARIAT GENERAL</b> </u><br>  
              <u> <b>DIRECTION GENERALE DES IMPOTS</b> </u></p>
            <img class="image_imp" src="{{asset('image/OIP.jfif')}}" alt="" srcset="">

        </div> <br>

          <h2>TELEPAYMENT EN MATIERE</h2>
          <h1> <b>IRSA</b></h1>
          <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
               modi aspernatur officiis corporis hic possimus sed cupiditate,
          </p>

          <a href="{{route('authentifier')}} " class="btn btn w-50  lien" > <b>Voir Details</b></a>
       </div>
       <div class="vid ">
        <video class="v mt-5 ml-5" src="{{asset('image/risque 2.mp4')}}" autoplay muted loop width="700" ></video>

       </div>

</main>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="{{asset('js/offcanvas-navbar.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script>

         ScrollReveal({
                 reset:true,
                 distance:'60px',
                 duration:2000,
                 deley:400
           });

           ScrollReveal().reveal('.container div', {deley: 100,origin: 'top', interval : 100});
           $(document).ready(function(){



             
           })
           
           
        
    </script>
</body>
</html>
