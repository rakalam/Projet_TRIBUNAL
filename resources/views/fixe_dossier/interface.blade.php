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
  <body >
<div class="boite">
    <nav class="navbar navbar-expand-sm navbar-dark ">
        <!-- Brand -->
         <div class="logo">
               <img src="{{asset('image/télécharger.jfif')}}"  srcset="">
         </div>
      
        <!-- Links -->
        <div class="list_nav" style="">
        <ul class="navbar-nav">
                <li class="nav-item me-3">
                <a class="nav-link " href="#">Acceuille</a>
                </li>
                <li class="nav-item me-3">
                <a class="nav-link" href="#">Documentation</a>
                </li>
                <li class="nav-item me-3">
                <a class="nav-link" href="#">Guide </a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="#">Service</a>
                </li>
            </ul>
        </div>
    </nav>
      
    <div class=" d-flex">

        <div class="col-7 d-block ">
            <div class="col-9 p-5" style="color: rgb(221, 221, 221)">
                    <p class="h2">
                        <span> IRSA</span> Telepayment
                    </p>
                    <p class="h5">
                        Nouveaux plateforme pour declarer <br>
                        et Payer votre IRSA
                    </p>
                
            </div>
            <div class="col-9 d-flex align-items-center p-5 petit_logo">
                    <div class=" me-4">
                    <img src="{{asset('image/OIP.jfif')}}" width="40" alt="">
                    </div>
                    <div>
                    MINISTER DES FINANCES ET DU BUDGET<br>
                    SECTRETARIAT GENERAL<br>  
                    DIRECTION GENERALE DES IMPOTS
                    </div>
            </div>
            <div class="col-7  art" style="margin-top: 2em; padding:2em ">
                <br>
                <p class="h5">Simple notion via Article</p>

                <p>
                    Sous réserve de conventions internationales, bilatérales
                    ou multilatérales, sont imposables à
                    l‟impôt sur les revenus, sauf s‟ils en sont expressément exonérés par les dispositions du présent Code, tous les
                    revenus de quelque nature qu‟ils soient
                </p>

                <a href="" class="btn btn text-white" style="background-color: rgb(11, 143, 55)">
                    <i class=" fa fa-paper-plane"> </i> &nbsp;
                    <b>code des Impôts</b>
                </a>
            </div>
        
        </div>


        
        <div class=" col-5 p-3" style="margin-left: 2em">

            <!-- PAYEUR -->
            <div  class="div_payeur ">
                <div class=" d-block rounded col-10  bg-white" style="margin-top:4em;box-shadow:1px 1px -1558px rgb(255, 255, 255)">
                                        <!-- en tete formulaire -->
                                            <div class=" p-3 d-flex align-items-center text-white" style="background-color: rgb(11, 143, 55) ">
                                                <p class="h5">Connexion PAYEUR
                                                </p>
                                                
                                                <div class="bAdmin">
                                                    <span  style="background-color:white;
                                                    color:rgb(11, 143, 55);
                                                    margin-left:14em"
                                                    class=" btn btn-sm ">
                                                    &nbsp; Admin &nbsp;
                                                    <i class="fa fa-angle-double-right"></i>
                                                    </span>
                                                </div>
                                                    
                                            </div>
                        
                                    <!-- Formulaire -->
                                    <div class=" p-4">
                                        <form method="post" action="">
                                                    <p style="color: rgb(97, 97, 97)">Veuillez connecter au tant que <strong>Payeur</strong></p>
                            
                                                    @csrf
                                                    <!-- nif input -->
                                                    <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                                                        <i class="fa fa-user me-2" style="color:rgb(175, 175, 175)"></i>    <input type="text"  required name="nif" placeholder="NIF" class="form-control" />
                                                    </div>
                                                        
                            
                                                    <!-- centre fiscal input -->
                                                    <div class="col-12 mt-3 d-flex align-items-center">
                                                    <i class="fa fa-home me-2" style="color: rgb(175, 175, 175)"></i> 
                                                        <select name="cf" id="" class="form-control">
                                                            <option value="" selected disabled> centre fiscale</option>
                        
                                                        </select>
                                                    </div>
                            
                                                    <!-- mot de passe input -->
                                            
                                                    <div class="col-12 mt-3 d-flex align-items-center ">
                                                        <i class="fa fa-key me-2" style="color: rgb(175, 175, 175)"></i>      <input type="password"  required name="pass" placeholder="mot de passe" class="form-control" />
                                                    
                                                    </div>
                            
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" style="background-color:rgb(11, 143, 55);
                                                                                        color:white ;
                                                                                        border:none;
                                                                                        padding-left:1.2em; 
                                                                                        padding-right:1.2em;
                                                                                        padding-top:0.5em; padding-bottom:0.5em;"
                                                                class=" mt-4">
                                                                <i class="fab fa-connectdevelop"></i>
                                                                &nbsp; connecter
                                                        </button>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <div class=" pt-3 " style="  cursor: pointer;"  onclick="document.getElementById('id01').style.display='block'">
                                                        mot de passe oublier&nbsp;<i class="fa fa-question"></i>
                                                        </div>
                                                    </div> 
                                        </form>
                
                                                    <div class=" mt-4 bg-body-secondary ">
                                                            <p class="h6 p-2"> <i class=" fa fa-eye"></i>&nbsp;&nbsp; Visualisé Bien</p>
                                                            <div class=" p-2" style="background-color: rgb(245, 245, 241);color: rgb(97, 97, 97)">
                                                                <p > Si vous êtes un <span style="font-weight:bold">Payeur</span> ou bien <br>
                                                                    <span style="font-weight:bold">Utilisateur</span> alors ...
                                                                    <h6> Vous pouvez CONNECTER</h6>
                                                                
                                                                </p>
                                                            </div>
                                            
                                                    </div>
                    
                                    </div>
                </div>
            
            </div >
            

             <!-- admin -->
            <div  class="div_admin " style="display: none">
                <div class=" d-block rounded col-10  bg-white" style="margin-top:4em;box-shadow:1px 1px -1558px rgb(255, 255, 255)">
                                        <!-- en tete formulaire -->
                                            <div class=" p-3 d-flex align-items-center text-white" style="background-color: rgb(11, 143, 55) ">
                                                <p class="h5">Connexion  ADMIN
                                                </p>
                                                
                                                <div class="bpayeur">
                                                    <span  style="background-color:white;
                                                    color:rgb(11, 143, 55);
                                                    margin-left:14em"
                                                    class=" btn btn-sm ">
                                                    &nbsp; Payeur &nbsp;
                                                    <i class="fa fa-angle-double-right"></i>
                                                    </span>
                                                </div>
                                                    
                                            </div>
                        
                                    <!-- Formulaire -->
                                    <div class=" p-4">
                                        <form method="post" action="">
                                                    <p style="color: rgb(97, 97, 97)">Veuillez connecter au tant qu' <strong>Admin</strong></p>
                            
                                                    @csrf
                                                    <!-- nif input -->
                                                    <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                                                        <i class="fa fa-user me-2" style="color:rgb(175, 175, 175)"></i>    <input type="text"  required name="identifiant" placeholder="identifiant" class="form-control" />
                                                    </div>
                                                        
                            
                                                    <!-- mot de passe input -->
                                            
                                                    <div class="col-12 mt-3 d-flex align-items-center ">
                                                        <i class="fa fa-key me-2" style="color: rgb(175, 175, 175)"></i>      <input type="password"  required name="pass" placeholder="mot de passe" class="form-control" />
                                                    
                                                    </div>
                            
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" style="background-color:rgb(11, 143, 55);
                                                                                        color:white ;
                                                                                        border:none;
                                                                                        padding-left:1.2em; 
                                                                                        padding-right:1.2em;
                                                                                        padding-top:0.5em; padding-bottom:0.5em;"
                                                                class=" mt-4">
                                                                <i class="fab fa-connectdevelop"></i>
                                                                &nbsp; connecter
                                                        </button>
                                
                                                    </div> 
                                        </form>
                
                                                    <div class=" mt-4 bg-body-secondary ">
                                                            <p class="h6 p-2"> <i class=" fa fa-eye"></i>&nbsp;&nbsp; Visualisé Bien</p>
                                                            <div class=" p-2" style="background-color: rgb(245, 245, 241);color: rgb(97, 97, 97)">
                                                                <p > Si vous êtes  <span style="font-weight:bold">Admin</span> ou bien <br>
                                                                    <span style="font-weight:bold">Administrayeur</span> alors ...
                                                                    <h6> Vous pouvez CONNECTER</h6>
                                                                
                                                                </p>
                                                            </div>
                                            
                                                    </div>
                    
                                    </div>
                </div>
            
            </div >
           

        </div >
            

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











    

</div>

<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas-navbar.js')}}"></script>
<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>

   <script>

        $(document).ready(function(){
              $('.bAdmin').on('click', function(){
                 
                  $('.div_payeur').slideUp();
                 $('.div_admin').slideDown(1000);

                  
              })
              $('.bpayeur').on('click', function(){
                 
                 $('.div_admin').slideUp();
                 $('.div_payeur').slideDown(1000);

                 
             })

        })

   </script>

</body>
</html>
