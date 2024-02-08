@extends("../fixe_dossier.iface")

@section("contenu")
@php
  $id_soc = session('id_entreprise');
    
@endphp
<link href="{{asset('css/soutien.css')}}" rel="stylesheet">


<style>
    :root{
        --color-vert:rgb(13, 150, 20);
        --color-grey:grey;
        --color-noir:black;
        --color-blanc:white;
    }
   
   .tete{
        background-color: rgb(228, 228, 228);
        margin-left: 4em;
        margin-top: 5em;
        color: rgb(54, 51, 51);
        border: 1px rgb(232, 235, 232) solid;

    }
    .foot{
        background-color: rgb(3, 53, 6);
        margin-left: 4em;
        margin-top: 1em;
        margin-bottom: 0.1em;
        color: rgb(255, 255, 255);
        border: 1px rgb(232, 235, 232) solid;

    }
    .taratasy{
      
        animation: bidyy 0.5s linear infinite alternate;
        transform:rotate(-30deg);
    }
    @keyframes bidyy{
        100%{
         
            transform:rotate(30deg);
            
        }
    }
    .succe{
      font-size: 1.3em;
        animation: bidyy 0.5s linear infinite alternate;
        transform:rotate(-30deg);
    }
    @keyframes bidyy{
        100%{
         
            transform:rotate(30deg);
            
        }
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
    
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    position: absolute;
    top:-12%;
    left:0;
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
    padding: 1em;
    
  }
  
  /* The Close Button */
  .close {
    /* Position it in the top right corner outside of the modal */
    position: fixed;
    right: 27%;
    top: 69px;
    color: #000;
  
  }
  .close:hover{
    padding: 3px 7px;
    background-color: rgb(3, 53, 6);
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

<div class="d-flex align-items-center p-3 rounded col-11 tete">
    <div class="lh-1">
      <h1 class="h5 mb-0 lh-1"><b><b>Declaration d' IRSA</b></b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>

    </div>
    <div style="margin-left: 60%;color: rgb(17, 126, 17)" class="s">
        <p class=""> <i class="fa fa-industry"></i> &nbsp;Socièté : <small><b><b>{{ session()->get('societe'); }}</b></b></small></p>

    </div>

</div>

        
<div class="mt-1 mb-1 rounded col-11 retenue mt-1 d-flex p-2" style="margin-left:4em;   background-color: rgb(248, 248, 248)">
    
    <div class="col-2 d-block me-1">
        <div class=" rounded " style=" background:rgb(235, 232, 232)">
            <h6 style="color:rgb(17, 126, 17);"> <i class="fa fa-globe-africa m-2 "></i> Espace Privée de</h6>
                <div class="p-2 bg-body text-start" style="font-size:12px;font-family:sans-serif">
                    <p><i class="fa fa-clock"></i> &nbsp;<b>Date</b> : <small>26/10/2023</small></p>
                    <p><i class="fa fa-passport"></i>&nbsp;<b>Code</b> : <small>{{ session()->get('nif'); }}</small></p>
                    <p><i class="fa fa-industry"></i> &nbsp;<b>Socièté</b> : <small>{{ session()->get('societe'); }}</small></p>
                    <p><i class="fa fa-home"></i> &nbsp; <b>centre fiscale </b>: <small>{{ session()->get('cf'); }}</small></p>
                    <a href="" class="btn btn-sm " style="background:  rgb(17, 126, 17);color:white"><i class="fa fa-sign-out "></i>&nbsp; Deconnecter</a>
                </div>
       
        </div>
        <div class="rounded p-2  mt-2" style=" background:rgb(238, 243, 239);
                                                        font-size:12px;font-family:sans-serif">
    

            <p class="h6" style=" color: red;"> <i class="fa fa-file-text taratasy"></i>&nbsp; Obligation </p>
            <p class="">
                La declaration et le payment de 
                l'IRSA se fait menstruellement
                .Le versement doit s'effectuer
                au plus tard le 15 du mois suivant 
                le mois declaré
            </p>
        </div>
        <br><br><br> <br><br><br> <br> <br><br><br><br>
     
     
     
        
           <div class=" rounded " style=" background:rgb(235, 232, 232)">
               <h6 style="color:rgb(17, 126, 17);"> <i class="fa fa-globe-africa m-2 "></i> Espace Privée de</h6>
                   <div class="p-2 bg-body text-start" style="font-size:12px;font-family:sans-serif">
                       <p><i class="fa fa-clock"></i> &nbsp;<b>Date</b> : <small>26/10/2023</small></p>
                       <p><i class="fa fa-passport"></i>&nbsp;<b>Code</b> : <small>{{ session()->get('nif'); }}</small></p>
                       <p><i class="fa fa-industry"></i> &nbsp;<b>Socièté</b> : <small>{{ session()->get('societe'); }}</small></p>
                       <p><i class="fa fa-home"></i> &nbsp; <b>centre fiscale </b>: <small>{{ session()->get('cf'); }}</small></p>
                       <a href="" class="btn btn-sm " style="background:  rgb(17, 126, 17);color:white"><i class="fa fa-sign-out "></i>&nbsp; Deconnecter</a>
                   </div>
          
           </div>
           <div class="rounded p-2  mt-2" style=" background:rgb(238, 243, 239);
                                                           font-size:12px;font-family:sans-serif">
       
     
               <p class="h6" style=" color: red;"> <i class="fa fa-file-text taratasy"></i>&nbsp; Obligation </p>
               <p class="">
                   La declaration et le payment de 
                   l'IRSA se fait menstruellement
                   .Le versement doit s'effectuer
                   au plus tard le 15 du mois suivant 
                   le mois declaré
               </p>
           </div>
   
    </div>






    <div class="col-7 p-2 rounded me-1" style="background:white">
        <p class="h4" style="color: rgb(17, 126, 17); ">Télédeclaration IRSA</p>
        
        <div class=" p-2 rounded" style="background-color: rgb(252, 252, 252)">
              <span>
                  <p>
                      Veuillez remplir les champs et cliquer sur le boutton <strong>"declarer"</strong> pour declarer. <br>
                      Et sur <strong>"Terminer declaration"</strong> la declaration des tous les Employers est fait. <br>
                      S' il y a des difficulter a la remplissage du formulaire <br>
                      n'hesiter pas d'allez au menu <strong> "Instruction ou Canevas" </strong>
                  </p>
              </span>
        </div>

                        <form method="post" action="">

                            <strong><u><u>Tronc Commun</u></u></strong>

                           <div class=" d-flex align-items-center">
                            
                           </div>
                           
                            @csrf
                            <!-- date input -->
                            <div class="col-7 mt-3 d-flex align-items-center" >
                                <label for="dt">NIF:&nbsp;&nbsp;</label>
                                <input  type="text" id="dt" required name="nif" value="{{session()->get('nif')}}" class="form-control w-100" />
                            </div>
                            <!-- date input -->
                            <div class="col-7 mt-3 d-flex align-items-center" >
                                <label for="dt">date:&nbsp;&nbsp;</label>
                                <input  type="date" id="dt" required name="date_declaration" placeholder="identifiant" class="form-control w-100" />
                           </div>
                            <!-- nif input -->
                            <div class="col-7 mt-3 d-flex align-items-center" >
                                <label for="Periodicite">Periodicité:&nbsp;&nbsp;</label>
                                <select class="form-control w-100" name="Periodicite" id="">
                                    <option value="mensuel">mensuel</option>
                                    <option value="semestriel">semestriel</option>
                                </select>
                           </div>
                                


                           <br>
                           
                           <strong><u><u>Information sur chaque Employer</u></u></strong>

                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Nom et Prenom:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="nom_prenom"   class="form-control w-100" />
                           </div>

                            <!-- fonction input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Fonction:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="fonction"   class="form-control w-100" />
                           </div>

                           <!-- CIN input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Num CIN:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="cin"   class="form-control w-100" />
                           </div>

                             <!-- CNaps input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Num CNaps:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="cnaps"   class="form-control w-100" />
                           </div>

                              <!-- Renumeration input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Renumeration brute:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="renumeration" class="form-control w-100" />
                           </div>

                            <!-- Aventage en Nature input -->
                            <div class="col-7 mt-3 d-block align-items-center p-2 rounded bg-body-secondary" >
                               <label for="dt">Quelle est votre avantage ?:&nbsp;&nbsp;</label>
                               <select name=" avantage_nature" id="dt"  class="form-control w-100">
                                   <option value="1">vehicule</option>
                                   <option value="2">logement</option>
                                   <option value="3">téléphone</option>
                                   <option value="4">Autre</option>
                                   <option value="5">Aucun</option>
                               </select>
                               <br>
                               <input  type="text"  name=" autre"  placeholder="Si Autre veuillez entrer ici..." class="form-control w-100" />

                           </div>
                           
                           <!-- Valeur de Aventage en Nature input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                              <label for="dt">valeur de l'Avantage :&nbsp;&nbsp;</label>
                              <input  type="text" id="dt" required name="valeur_aventage"   class="form-control w-100" />
                          </div>

                           <!-- Pension input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">valeur de Pension :&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="pension"   class="form-control w-100" />
                           </div>

                           <!-- Pension input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Cotisation Sanitaire :&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="sanitaire"   class="form-control w-100" />
                           </div>

                            <!-- Pension input -->
                           <div class="col-7 mt-3 d-flex align-items-center" >
                               <label for="dt">Nombre d'Enfant :&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="enfant"   class="form-control w-100" />
                           </div>
               
                          <div class="d-flex align-items-center">
                            <div class="btn_periode">
                                <button type="submit" style="background-color:rgb(11, 143, 55);
                                                            color:white ;
                                                            border:none;
                                                            padding-left:1.2em; 
                                                            padding-right:1.2em;
                                                            padding-top:0.5em; padding-bottom:0.5em;"
                                    class=" mt-4">
                                    <i class="fa fa-download"></i>
                                    &nbsp; Declarer
                                </button>
                                <button  style="background-color:rgb(31, 123, 209);
                                                            color:white ;
                                                            border:none;
                                                            padding-left:1.2em; 
                                                            padding-right:1.2em;
                                                            padding-top:0.5em;
                                                            margin-left:6em; 
                                                            padding-bottom:0.5em;"
                                                            
                                    class=" mt-4">
                                    <a href="" style="color :white;text-decoration: none;"> 
                                      <i class="fa fa-check"></i>
                                      &nbsp; Terminer la declaration
                                    </a>
                                </button>
                            </div>

                            <span style="margin-left:18em;">
                                <a href="#haut" class="btn btn-sm " style="background-color: rgb(206, 154, 10); color:white">
                                    <i class="fa fa-angle-double-up"></i> 
                                    
                                </a>
                            </span>
                          </div> 
                        </form>
    </div>



<!-- Menu -->
    <div class="col-3 p-2 rounded bg-body">
        
        <p style=" color:rgb(17, 126, 17)"><b><i class="fa fa-bars" ></i>&nbsp; MENU</b></p>
        <div class="d d-grid">
            <a href="" class="t text-decoration-none text-dark ">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                  <i class="fa fa-home"></i> Acceuille <br>
                  <small style="font-size: 13px;color:rgb(35, 140, 211)">list des declations envoyer et payer</small>
                  
                </div>
            </a>
            <span  class="t text-decoration-none text-dark " onclick="document.getElementById('id01').style.display='block'">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245);cursor: pointer;">
                   <i class="fa fa-laptop-code"></i> Instruction ou Canevas
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">instruction sur la remplissage du formulaire d'IRSA </small>
                   
                </div>
            </span>
            <a href="" class="t text-decoration-none text-dark ">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                   <i class="fas fa-envelope-square"></i> Declarer et Envoyer <br>
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">permet d'envoyer et declarer vos IRSA</small>
                   
                </div>
            </a>
            <a href="" class="t text-decoration-none text-dark ">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                   <i class="fa fa-envelope-open-text"></i> Recapitulation de l'etat IRSA <br>
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">pour bisualiser l'etat et pour rectifier l'IRSA a envoyer </small>
                   
                </div>
            </a>
            <a href="" class="t text-decoration-none text-dark ">
              <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                 <i class=" fa fa-dollar"></i> Paiment d'IRSA <br>
                 <small style="font-size: 13px;color:rgb(35, 140, 211)">pour valider un payment d'un declaration </small>
                 
              </div>
          </a>

        </div><br>
      <img src="{{asset('image/pay.jpg')}}" width="140" style="margin-left: 3em" alt=""> 
      







     
     

    </div>
    

</div>

  
 <!-- The Detail  de calcule-->

<div  class="total" id="id02">
  <div class="total-content" style="color: rgb(128, 128, 128)">
      
        <div>
           <img src="{{asset('img/tete_img.png')}}" alt="" width="800" srcset="">
        </div>
        <br>
      <div style="padding: 1em 5em">
        <p>
          <p class=" h5 text-center"><u><b> <i class=" fab fa-keycdn"></i> Total de la declaration</b></u> </p>
            Aujourd'hui le <b> {{ $date }}</b> <br>
            L'entreprise<b> {{ session()->get('societe'); }}</b> a fait une declaration de : <br>
    
           
            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Total Employer : <b> {{ $i }}</b>  <br>
            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Total Impot à payer : <b>{{ $montant_existe }}</b> Ar <br>
           
               
    
            <button  style="background-color:rgba(17, 126, 17, 0.795);
                            color:rgb(128, 128, 128) ;
                            border:none;
                            padding-left:1.2em; 
                            padding-right:1.2em;
                            padding-top:0.5em;
                           
                            padding-bottom:0.5em;"
            
                class=" mt-4">
                <a href="{{route('paiment', ["id_decl"=> $id_decl])}}" style="color :white;text-decoration: none;"> 
                    <i class="fa fa-check"></i>
                    &nbsp; aller à la paiment
                </a>
            </button>

            <button  style="background-color:rgba(214, 21, 0, 0.795);
                            color:rgb(128, 128, 128) ;
                            border:none;
                            padding-left:1.2em; 
                            padding-right:1.2em;
                            padding-top:0.5em;
                           
                            padding-bottom:0.5em;"
            
                class=" mt-4">
                <a href="{{route('acceuille', ["soc"=> session('soc')])}}" style="color :white;text-decoration: none;"> 
                    <i class="fa fa-close"></i>
                    &nbsp; abandonnée
                </a>
            </button>
    
      </div>

    </p>
  </div>


</div>


  <div class="d-flex p-3 rounded text-center col-11  foot" >
    <div class="lh-1" style="font-size: 11px">
      
      
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



          Copyright <i class="fa fa-copyright"></i> Octobre 2023 DGI/SSIF
          <a href="#">www.impots.mg</a> .Tous drots sont résérvés
           <span class="info_dec" style="font-size: 2px">1</span>
    </div>

</div>


      <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
      <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script>

              
            $(document).ready(function(){
               $('.btn_dec').fadeIn(3000);
        
               
          
            })

            
        </script>

@endsection

