<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>IMPOT MADAGASCAR</title>

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
    .lg{
        background-color: rgb(228, 228, 228);
        color:rgb(54, 51, 51);
        padding-left: 1em; 
        padding-right: 1em; 
        padding-top: 5px;
        padding-bottom: 5px;
        margin-bottom: 1em
    }
    .tete{
        background-color: rgb(228, 228, 228);
        margin-left: 15%;
        margin-top: 2em;
        color: rgb(54, 51, 51);
        border: 1px rgb(232, 235, 232) solid;

    }
    .foot{
        background-color: rgb(3, 53, 6);
        margin-left: 20%;
        margin-bottom: 0.3em;
        color: rgb(255, 255, 255);
        border: 1px rgb(232, 235, 232) solid;

    }
    .admi{
      display: none;
    
    }
    
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 5; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0, 0, 0, 0.719); /* Black w/ opacity */
    padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin-left: 25%; /* 15% from the top and centered */
    margin-top: 10%; /* 15% from the top and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
    padding: 1em;
    
  }
  /* The Close Button */
  .close {
    /* Position it in the top right corner outside of the modal */
    margin-left: 95%;
    padding: 3px 7px;
    text-align: center
    
  }
  .close:hover{
    background-color: rgb(155, 21, 21);
    color: white;
    cursor: pointer
  }

  /* Add Zoom Animation */
  .modal-content {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
  }
  
  @keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
  }
  
    
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/offcanvas-navbar.css')}}" rel="stylesheet"> 
  </head>
  <body class="bb">

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



<main class="container ">
<div class="d-flex align-items-center p-3 rounded col-9 tete">
    <div class="lh-1">
      <h1 class="h2 mb-0 lh-1"><b><b>Authentification </b></b></h1>
      <small class=" smal_txt_ut"><i><b><span style="color: rgb(17, 126, 17)">Organisme Payeur</span></b> </i></small>

      <small class=" smal_txt_ad" style=" display:none"><i><b><span style="color: rgb(17, 126, 17)">Administrateur</span></b> </i></small>
    </div>

    <aside  style="background-color:rgb(3, 53, 6);color:white;margin-left:54% " 
        class="btn btn btn-block mt-4 btn_ad" id="btn_ad">
        <strong>Administrateur</strong>  &nbsp;
        <i class="fa fa-angle-double-right"></i>
   </aside>
   
   <aside  style="background-color:rgb(3, 53, 6);color:white;margin-left:54%;display:none " 
        class="btn btn btn-block mt-4 btn_ut" id="btn_ut">
        <strong>Employeur</strong>  &nbsp;
        <i class="fa fa-angle-double-right"></i>
   </aside>

</div>





 <div class="ut">
       
    <div class=" d-flex align-items-center ut" id="ut" style="margin-left: 25%;margin-top:3% " >
      <div class="col-4 rounded me-5">
        
        <div class="rounded lg">
            <p class="h4">Payeur</p>
        </div>

        <form method="post" action="{{route('aut')}}">
              <p class="h6" style="color:rgb(3, 53, 6) ">veuillez authentifier au tant que <span class="hide_default">Payeur</span></p>
          
                        <div class="rs_ms">
                            @if(session('error'))

                                    <div class="alert alert-danger" id="message">
                                    <p>
                                        {{session('error')}}
                                    </p>
                                    </div>
                            @endif
                        </div>
         

                        @csrf
                        <!-- nif input -->
                        <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                            <i class="fa fa-user me-2" style="color: rgb(68, 66, 66)"></i>    <input type="text"  required name="nif" placeholder="NIF" class="form-control" />
                        </div>
                            

                        <!-- centre fiscal input -->
                        <div class="col-12 mt-3 d-flex align-items-center">
                        <i class="fa fa-home me-2" style="color: rgb(68, 66, 66)"></i> 
                            <select name="cf" id="" class="form-control">
                                <option value="" selected disabled> centre fiscale</option>
                                @foreach ($centre as $c)

                                    <option value="{{$c->id}}"> {{ $c->nom_centre }} </option>

                                @endforeach

                            </select>
                        </div>

                        <!-- mot de passe input -->
                
                        <div class="col-12 mt-3 d-flex align-items-center ">
                            <i class="fa fa-key me-2" style="color: rgb(68, 66, 66)"></i>      <input type="password"  required name="pass" placeholder="mot de passe" class="form-control" />
                        
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="submit" style="background-color:rgb(3, 53, 6);color:white " 
                                    class="btn btn btn-block mt-4">
                                    <i class="fab fa-connectdevelop"></i>
                                    &nbsp; connecter
                            </button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class=" pt-3 " style="  cursor: pointer;"  onclick="document.getElementById('id01').style.display='block'">
                            <u>mot de passe oublier</u> <i class="fa fa-question"></i>
                            </div>
                        </div> 
        </form>
    </div>


    <div class=" rounded col-5 ">
      
      <p class=" rounded" style="background-color:rgb(249, 249, 248);"> Si vous êtes un simple utilisaeur ou bien <br>
          <strong>Organisme payeur</strong> ou <strong>Emlpoyeur</strong> alors
          <h4 ><b> Vous êtes la BIENVENUE </b></h4>
      
      </p>
          <img style="margin-left: 2em" src="{{asset('image/green-pencil-with-positive-questionnaire.jpg')}}" width="170" alt="">

    </div>
   </div>
  </div>


<div class="admi" id="admi">
      <div class="d-flex align-items-center"  style=" margin-left: 25%;margin-top:3%;" >
        <div class="col-4 rounded me-5">
          
          <div class="rounded lg">
              <p class="h4">Admin</p>
          </div>
  
          <form method="post" action=" " >
          <p class="h6" style="color:rgb(3, 53, 6) ">veuillez authentifier au tant qu'<span class="hide_default">Admin</span></p>
  
          @csrf
         
  
          <!-- nif input -->
          <div class="col-12 mt-3 d-flex align-items-center" id="in1">
              <i class="fa fa-user me-2" style="color: rgb(68, 66, 66)"></i>    <input type="text"  required name="nif" placeholder="Identifiaction" class="form-control" />
              
  
          </div>
          <!-- mot de passe input -->
    
          <div class="col-12 mt-3 d-flex align-items-center ">
              <i class="fa fa-key me-2" style="color: rgb(68, 66, 66)"></i>      <input type="password"  required name="pass" placeholder="mot de passe" class="form-control" />
            
          </div>
  
          <button type="submit" style="background-color:rgb(3, 53, 6);color:white " 
                  class="btn btn btn-block mt-4 ">
                  <i class="fab fa-connectdevelop"></i>
                  &nbsp; connecter
          </button>
          
          
            
          </form>
      </div>
    


    <div class=" rounded col-5 ">
      
      <p class=" rounded" style="background-color:rgb(249, 249, 248);"> Si vous êtes un <strong>Adminstrateur</strong> ou bien <br>
          <strong>Admin du DGI</strong> ou <strong>CentreFiscal</strong> alors
          <h4 ><b> Vous êtes la BIENVENUE </b></h4>
      
      </p>
          <img style="margin-left: 2em" src="{{asset('img/a (2).png')}}" width="170" alt="">

    </div>
  </div>
</div>
    
<div  class="modal" id="id01">
   <div class="modal-content">
      <div class="close" onclick="document.getElementById('id01').style.display='none'" >
        <i class=" fa fa-close"></i>
      </div>
    <p>
      <h5><b>Information sur la Mot de passe Oublier</b> </h5>
      Le NIF constitue l’identifiant pour se connecter et le mot de passe est celui
      délivré avec, lors de l’immatriculation. En cas de perte ou d’oubli du mot de
      passe, il faut contacter le centre fiscal gestionnaire (l’adresse e-mail de
      chaque unité opérationnelle se trouvent dans <a href="#">www.impots.mg/contact/</a>.
      Envoyer la demande à l’adresse du centre fiscal gestionnaire en joignant la
      copie de la Carte Nationale d’Identité du demandeur
    </p>
   </div>

</div>

<div>





</main>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="{{asset('js/offcanvas-navbar.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
   
    <script>
        

     
           $(document).ready(function(){
            var m = $('#message').text();
            if(m =! ""){

              $('.rs_ms').fadeOut(4000);
            }
            
              
               $('.btn_ad').on('click', function(){
                      $('.btn_ad').hide();
                      $('.btn_ut').show();

                      $('.smal_txt_ut').hide();
                      $('.smal_txt_ad').show();

                      $('.admi').slideDown();
                      $('.ut').hide();

               })
               $('.btn_ut').on('click', function(){
                      $(this).hide();
                      $('.btn_ad').show();

                      $('.smal_txt_ut').show();
                      $('.smal_txt_ad').hide();

                      $('.admi').hide();
                      $('.ut').slideDown();

               })

           })
           
           
        
    </script>
</body>
</html>
