@extends("../fixe_dossier.iface")

@section("contenu")
<link href="{{asset('css/soutien.css')}}" rel="stylesheet">
<div id="haut">

</div>
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
        margin-bottom: 0.5em;
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
      <h1 class="h5 mb-0 lh-1"><b><b>Paiement d'IRSA</b></b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des Impôts</span></b> Madagascar</i></small>

    </div>
    <div style="margin-left: 60%;color: rgb(17, 126, 17)" class="s">
        <p class=""> <i class="fa fa-industry"></i> &nbsp;Socièté : <small><b><b>{{ session()->get('societe'); }}</b></b></small></p>

    </div>

</div>

        
<div class="mt-1 mb-1 rounded col-11 retenue mt-1 d-flex p-2" style="margin-left:4em; 
                                                                      background-color: rgb(248, 248, 248)">
    
    <div class="col-2 d-block me-1" >
        <div class=" rounded " style=" background:rgb(235, 232, 232)">
            <h6 style="color:rgb(17, 126, 17);"> <i class="fa fa-globe-africa m-2 "></i> Espace Privée de</h6>
                <div class="p-2 bg-body text-start" style="font-size:12px;font-family:sans-serif">
                    <p><i class="fa fa-clock"></i> &nbsp;<b>Date</b> : <small>26/10/2023</small></p>
                    <p><i class="fa fa-passport"></i>&nbsp;<b>Code</b> : <small>{{ session()->get('nif'); }}</small></p>
                    <p><i class="fa fa-industry"></i> &nbsp;<b>Socièté</b> : <small>{{ session()->get('societe'); }}</small></p>
                    <p><i class="fa fa-home"></i> &nbsp; <b>centre fiscale </b>: <small>{{ session()->get('cf'); }}</small></p>
                    <a href="#" onclick=" confirmLogout();
                    "  class="btn btn-sm " style="background:  rgb(17, 126, 17);color:white"><i class="fa fa-sign-out "></i>&nbsp; Deconnecter</a>
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

    <div class="col-8 p-2 rounded me-1" style="background:white">
          <div class="page1">
            <p class="h3" style="color: rgb(17, 126, 17)"> Paiement avec pénalité de retard </p>

           
          <div class="page2" >
           
            <div class=" p-2">
                <div class=" text-danger">
                     <strong>{{ $message_penalite }}</strong>
                </div>


              <!--Information payeur -->
                <div class=" p-2 bg-body-secondary"  style="color:rgb(85, 85, 85);">
                  <p class=" h5"> Information sur le payeur(Titulaire du compte)</p>
                </div>
              
                <form action="{{ route('ajout_paiement_penalite') }}" method="post" class=" form p-2" style="font-size: 13px">
                  
                        @csrf
                        <input type="hidden"  required name="id_decl" style="border: none" value="{{ $declaration->id }}" />
                        <input type="hidden"  required name="id_entreprise" style="border: none" value="{{$declaration->id_entreprise}}" />

                            <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                              <label for="">NIF :</label>&nbsp; &nbsp; 
                              <input type="text"  required name="nif" style="border: none" value="{{session('nif')}}" />
                            </div>

                            <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                              <label for="">date declarartion:</label>&nbsp; &nbsp; 
                              <input type="text"  required name="date_decl" style="border: none" value="{{$declaration->date_declaration}}" />
                            </div>
                            
                            
                            <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                              <label for="">Titulaire du compte :</label>&nbsp; &nbsp; 
                              <input type="text" width="100" required name="societe" style="border: none" value="{{session('societe')}}" />
                            </div>
                            
                            <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                              <label for="">date paiment:</label>&nbsp; &nbsp; 
                              <input type="text"  style="border: none" required name="date_paiment" value="{{session('d_p')}}"   />
                            </div>

                            <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                              <label for="">Numero du Compte (RIB) :</label>
                              <div class=" d-block">
                                <input type="text"  required name="cb" class=" form-control w-75" />
                                <p>&nbsp; &nbsp;&nbsp;<b>Code Banque</b></p>
                              </div>
                              <div class=" d-block">
                                <input type="text"  required name="ca" class=" form-control w-75" />
                              
                                <p>&nbsp; &nbsp;&nbsp;<b>Code Agence</b></p>
                              </div>
                              <div class=" d-block me-3">
                                <input type="text"  required name="nc" class=" form-control w-100" />
                              
                                <p>&nbsp; &nbsp;&nbsp;<b>numero de compte</b></p>

                              </div>

                              <div class=" d-block">
                                <input type="text"  required name="rib" class=" form-control w-50" />
                              
                                <p>&nbsp; &nbsp;&nbsp;<b>cle RIB</b></p>

                              </div>
                            </div>
                            
              <!--recapitulation -->
                          
                            <div class=" p-2 bg-body-secondary"  style="color:rgb(85, 85, 85);">
                              <p class=" h5"> Recapitulation</p>
                            </div>
                              
                      <div class=" mt-3" style="border: 3px solid rgb(243, 243, 243)">
                        <div class=" p-2 bg-body-tertiary">
                          <b>TAXE a payer</b>
                        </div>
                        <div class=" pt-3 ">
                          <table class="table ">
                            <thead class="d table-active">
                              <tr>
                                <th scope="col">NIF</th>
                                <th scope="col">date declaration</th>
                                <th scope="col">Periodicité</th>
                                <th scope="col">Mois</th>
                                <th scope="col">Année</th>
                                <th scope="col">Nature</th>
                                <th scope="col">montant à payer</th>
                                
                              </tr>
                            </thead>
                            <tbody >
                                    
                                        
                                        <tr>
                                          <td>{{session('nif')}}</td>
                                          <td>{{ $declaration->date_declaration }}</td>
                                          <td>{{ $declaration->periodicite }}</td>
                                          <td>{{ $declaration->mois }}</td>
                                          <td>{{ $declaration->anne }}</td>
                                          <td>IRSA</td>
                                          <td id="mat">{{$declaration->montant}}</td>
                                        </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

              <!--Information  Beneficiaire -->
                    
                      <div class=" mt-5 p-2 bg-body-secondary"  style="color:rgb(85, 85, 85);">
                        <p class=" h5"> Information sur le Beneficiaire</p>
                      </div>

                      <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                        <label for="">Centre fiscale beneficiaire :</label>&nbsp; &nbsp; 
                        <input type="text"  required name="nom_cf" style="border: none" value="{{session('cf')}}"/>
                      </div>
                      <div class="col-12 mt-3 d-flex align-items-center" id="in1">
                        <label for="">RIB du beneficiaire:</label>&nbsp; &nbsp; 
                        <input type="text"  required name="rib_beneficiire" style="border: none" value="{{session('rib')}}" />
                      </div>
                      <br> <br>

                      <div class="col-12 mt-3 " id="in1">
                        <p class=" text-danger">Montant total à virer : </p>
                        <input type="text"   required name="impot" style="border: none" value="{{$declaration->montant}}" />AR
                      </div>

                    
                      <button type="submit" style="background-color:rgb(11, 143, 55);
                                                            color:white ;
                                                            border:none;
                                                            padding-left:1.2em; 
                                                            padding-right:1.2em;
                                                            margin-left:3em;
                                                            padding-top:0.5em; padding-bottom:0.5em;"
                                    class=" mt-4">
                                    <i class="fa fa-check"></i>
                                    &nbsp; Valider  paiment
                      </button>



                </form>
   
   
            </div>
        </div>
     </div>

 </div>
     
                     
      


      
    <!-- menu -->

    <div class="col-2 p-2 rounded bg-body"  style="font-size: 11px">
        
        <p style=" color:rgb(17, 126, 17)"><b><i class="fa fa-bars" ></i>&nbsp; MENU</b></p>
        <div class="d d-grid">
            <a href="{{route('acceuille', ["soc"=>session('soc')])}}" class="t text-decoration-none text-dark ">
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
            <a href="{{route('declaration',  ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                   <i class="fas fa-envelope-square"></i> Declarer et Envoyer <br>
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">permet d'envoyer et declarer vos IRSA</small>
                   
                </div>
            </a>
            <a href="{{route('recap',  ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                   <i class="fa fa-envelope-open-text"></i> Recapitulation de l'etat IRSA <br>
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">pour bisualiser l'etat et pour rectifier l'IRSA a envoyer </small>
                   
                </div>
            </a>
            <a href="{{route('liste_paiment', ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
              <div class="b mb-2 rounded p-2" style="background-color: rgb(226, 226, 226)">
                 <i class=" fa fa-dollar"></i> Liste des paiment d'IRSA <br>
                 <small style="font-size: 13px;color:rgb(35, 140, 211)">pour visualiser les paiments et recuperer l'accusé </small>
                 
              </div>
           </a>
           <a href="{{route('message_penalite',  ["id_decl"=> $declaration->id ])}}" class="t text-decoration-none text-dark ">
            <div class="b mb-2 rounded p-2" style="background: linear-gradient(90deg, rgb(3, 60, 3), rgb(255, 255, 255));">
               <i style="font-size: 1.5em;color:rgb(255, 255, 255)" class=" fab fa-facebook-messenger">
              
                @if ($nb_mes != 0)
                    <span style="
                    font-size:11px;
                    background-color:red;
                    border-radius:100%;
                    padding:4px 7px;
                    color:white;
                    position: relative;
                    top:-1em;
                    left:-1em ">
                      {{ $nb_mes }}
                    </span>
                  
                @endif
              
              </i> <b class=" text-white" style="margin-left: 0.1em">Message</b> <br>
              
               
            </div>
          </a>


        </div><br>
      <img src="{{asset('image/pay.jpg')}}" width="140" style="margin-left: 3em" alt=""> 


    </div>
    

</div>


<!-- The Modal -->
<div id="id01" class="modal">
   
  
  <!-- Modal Content -->
  <div class="modal-content animate"  style="color: black">
     
    <div class="close" onclick="document.getElementById('id01').style.display='none'" >
        <i class=" fa fa-close"></i>
    </div>
        <div class="d-flex align-items-center p-3 rounded col mt-4 " style="  background-color: rgb(228, 228, 228);">
          <div class="lh-1">
            <h1 class="h5 mb-0 lh-1"><b><b>INSTRUCTION ET CANEVAS</b></b></h1>
            <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>
      
          </div>
      
        </div>

        <div class="col mt-4">
               <p class="h5"><i class=" fa fa-star" style="color: rgb(255, 230, 0)"></i> Les étapes a la declaration jusqu'au paiment d'IRSA</p>
               <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                    <a href="{{asset('photos_guide/tronc_commun.png')}}"><img src="{{asset('photos_guide/tronc_commun.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                 <p> <span class=" btn btn-warning">1</span> -remplir les champs et  <br>
                    cliquer sur la button colorer en vert. <br>
                    Cette action veut dire que la declaration du . <br>
                    tronc commmun pour chaque employer et terminer <br>
                    
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                    <a href="{{asset('photos_guide/en_attente.png')}}"><img src="{{asset('photos_guide/en_attente.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                 <p> <span class=" btn btn-warning">2</span> -vous avez cette  <br>
                    tableau qui indique tous les declaration en attente. <br>
                    Puis cliquer sur l'icon en vert pour continuer  <br>
                   la declaration . Veuillez cliquer sur la declaration <br>
                   que vous souhaite le contuinuer
                    
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                    <a href="{{asset('photos_guide/employer.png')}}"><img src="{{asset('photos_guide/employer.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                 <p> <span class=" btn btn-warning">3-a</span> -Arriver dans la declaaration<br>
                    de chaque employer . <br>
                    Il suffit de remplir les formulaires a partir de chaque   <br>
                    l'information des employer (en dessous le canevas pour la  <br>
                    remplisage du formulaire s'il y a des dificulters) 
                    
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/btn_deeclaration.png')}}">  <img src="{{asset('photos_guide/btn_deeclaration.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                 <p> <span class=" btn btn-warning">3-b</span> -Cliquer sur cette boutton<br>
                    colorer en vert en bas de la formulaire . <br>
                    Pour placer la declaration de l'employer .<br>
                    Remplir a nouveau pour declarer l'employer suivant.  <br>
                    Il suffit de cliquer sur cette button
                    
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/succes.png')}}">  <img src="{{asset('photos_guide/succes.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                   Apres une declaration d'un employer <br>
                    il y a un message de confirmation colorer en vert. <br>
                    Et un button en rouge pour voir les <br>
                    details du calcule selon la logiciel  <br>
                    et l'impot correspondant
                    
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/terminer.png')}}">  <img src="{{asset('photos_guide/terminer.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                <span class=" btn btn-warning">4</span> Pour terminer la <br>
                    declaration , il y a un boutton en blue . <br>
                    Il suffit de cliquer pour terminer la totaliter <br>
                    des declarations des employers .  <br>
               
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/totaliter.png')}}">  <img src="{{asset('photos_guide/totaliter.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                <span class=" btn btn-warning">5</span> Cette fenetre ouvre<br>
                    pour indiquer la totaliter de la declaration  . <br>
                    On peut voir aussi la total de l'impôt a payer<br>
                    Pour continuer cliquer su la boutton en vert .  <br>
               
         
                 </p>
               </div>
              </div>
              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/virement.png')}}">  <img src="{{asset('photos_guide/virement.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                <span class=" btn btn-warning">6</span> Creer un virment <br>
                    banquaire , il suffit de coonfirmer . <br>
                    Confirmer le montant a payer dans la cage <br>
                    montant payer et cliquer sur le boutton en vert . <br>
                    s'il y a une erreur de confirmation , une erreur <br>
                    peut survenue..
               
         
                 </p>
               </div>
              </div>

              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/payer.png')}}">  <img src="{{asset('photos_guide/payer.png')}}" width="200" alt="" srcset=""></a>
                    <a href="{{asset('photos_guide/p2.png')}}">  <img src="{{asset('photos_guide/p2.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="">
                <span class=" btn btn-warning">7</span>Pemplir les champs vides<br>
                    a partir des label qui correspondant  . <br>
                    LE LOGICIEL est conçu a aider les utilisateur.<br>
                    Il gere autimatiqument les donner des utilisateur <br>
                    qui connecte
               
         
                 </p>
               </div>
              </div>

              <br>
              <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
                <div>
                   
                    <a href="{{asset('photos_guide/btn_paiment.png')}}">  <img src="{{asset('photos_guide/btn_paiment.png')}}" width="200" alt="" srcset=""></a>
               </div>
               <div style="margin-left: 3em">
                <span class=" btn btn-warning">6</span> Pour finir <br>
                    la paiment ,il y a deux boutton en rouge et. <br>
                    en vert . Le boutton rouge pour annuler la <br>
                    paiment et le vert en pour valider la paiment. <br>
                    Si la paiment est succée , la liste des payment <br>
                    est ouvert.. 
               
         
                 </p>
               </div>
              </div>



        </div>

        <div class="col mt-4">
          <p>
            <strong>N.B :</strong>Le but est de faire connaître les etapes et les significations plus <br>
             explication au chaque  formulaire a remplir.. 
          </p> 
          <p class="h5">Voici la canevas pour la remplissage du formulaire</p>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-user me-2" style="color: rgba(0, 0, 0, 0.685)"></i> 
              <input type="text" class=" form-control me-4 w-50" placeholder="Nom et Prenom"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em ">
                  C'est le nom et le prenom du travailleur <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:14px;
                                font-style:italic">
                                  (Anarana sy fanampin' anaran'ny mpiasa)
                  </small>
                  
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-digging me-2" style="color: rgba(0, 0, 0, 0.685)"></i> 
              <input type="text" class=" form-control me-4 w-50" placeholder="Fonction"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em ">
                  Fonction du travailleur <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:14px;
                                font-style:italic">
                                  (Asan'ny mpiasa tsirairay)
                  </small>
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-passport me-2" style="color: rgba(0, 0, 0, 0.685)"></i>
               <input type="text" class=" form-control me-4 w-50" placeholder="CIN"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                  numero Carte d'Identité National ou resident <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (laharan'ny karapanondrompirenena na kara-bahiny)
                  </small>
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-calendar-plus me-2" style="color: rgba(0, 0, 0, 0.685)"></i>
               <input type="text" class=" form-control me-4 w-50" placeholder="CNaps"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                 numéro d'Identification CNaps <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (laharam-pamatarana CNaps)
                  </small>
              </span>
             </div>


             <div class=" d-flex align-items-center mb-3">
              <i class=" fab fa-paypal me-2" style="color: rgba(0, 0, 0, 0.685)"></i>
               <input type="text" class=" form-control me-4 w-50" placeholder="Remuneration"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                 Remuneration Brute en numeraire <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (karama tsy afa-karatsaka raisina lelavola)
                  </small>
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-taxi me-2" style="color: rgba(0, 0, 0, 0.685)"></i> 
              <input type="text" class=" form-control me-4 w-50" placeholder="Avantage"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                Valeur des avantages en nature imposable <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (Sandan'ny tombotsia tsy ara-bola iharan'ny hetra)
                  </small>
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-cow me-2" style="color: rgba(0, 0, 0, 0.685)"></i>
               <input type="text" class=" form-control me-4 w-50" placeholder="Pension"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                Retenue et versement en vue de la constitution <br> de pension ou de retraite <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (Latsakemboka esorina ho an'ny fisotroan-dronono)
                  </small>
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-hospital me-2" style="color: rgba(0, 0, 0, 0.685)"></i>
               <input type="text" class=" form-control me-4 w-50" placeholder="Cotisation sanitaire"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                Retenue au titre de cotisation ouvrière <br> due à une organisation sanitaire <br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (Latsakemboka ho an'ny fahasalaman'ny mpiasa)
                  </small>
              </span>
             </div>

             <div class=" d-flex align-items-center mb-3">
              <i class=" fa fa-child me-2" style="color: rgba(0, 0, 0, 0.685)"></i>
               <input type="text" class=" form-control me-4 w-50" placeholder="Enfant"> 
              <span class=" rounded" style=" background-color: rgb(228, 228, 228);padding:1em;  font-size:12px; ">
                Nombre de pesonnes à charge  ou nombre d'enfant<br>
                  <small style="color: rgb(17, 126, 17);
                                font-size:11px;
                                font-style:italic">
                                  (isan'ny olona iadidiana)
                  </small>
              </span>
             </div>
             
      

         </div>






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
               $(document).on('keydown', function(e) {
                  // Vérifiez la combinaison de touches (par exemple, Ctrl + Alt + P)
                  if (e.ctrlKey && e.altKey && e.key === 'm') {
                      // Redirigez vers la page souhaitée
                      window.location.href = "{{route('message_penalite',  ["id_decl"=> $declaration->id ])}}";
                  }
                  if (e.ctrlKey && e.altKey && e.key === 'd') {
                      // Redirigez vers la page souhaitée
                      window.location.href = "{{ route('declaration',  ["soc"=> session('soc')]) }}";
                  }
                  if (e.ctrlKey && e.altKey && e.key === 'r') {
                      // Redirigez vers la page souhaitée
                      window.location.href = "{{ route('recap',  ["soc"=> session('soc')]) }}";
                  }
                  if (e.ctrlKey && e.altKey && e.key === 'l') {
                      // Redirigez vers la page souhaitée
                      window.location.href = "{{ route('liste_paiment', ["soc"=> session('soc')]) }}";
                  }
                  if (e.ctrlKey && e.altKey && e.key === 'a') {
                      // Redirigez vers la page souhaitée
                      window.location.href = "{{ route('acceuille', ["soc"=> session('soc')]) }}";
                  }
              });

              
            $(document).ready(function(){
                    function confirmLogout() {
                        // Utiliser la fonction JavaScript confirm pour afficher la boîte de dialogue
                        var result = confirm("Êtes-vous sûr de vouloir vous déconnecter?");

                        // Si l'utilisateur clique sur "OK" (true), rediriger vers la route de déconnexion
                        if (result) {
                            window.location.href = '{{ route('deconnexion') }}';
                        }
                    }
               $('.btn_dec').fadeIn(3000);
               

               $('.allez_p2').on('click', function(){

                 var montant_a_payer = $('#mat').text();
                 var montant_payer = document.F.mt.value;
                 if(montant_a_payer != montant_payer){
                   alert(" veuillez bien confirmer le montant payer " + montant_a_payer);
                 }else{
                  $('.page1').slideUp();
                  $('.page2').slideDown();

                 }
                  
               })
               $('.allez_p1').on('click', function(){
                  
                  $('.page1').slideDown();
                  $('.page2').slideUp();
                })
  
 
            })

            
        </script>

@endsection

