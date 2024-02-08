@extends("../fixe_dossier.iface")

@section("contenu")
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
        <p class="h4" style="color: rgb(17, 126, 17); ">Télédeclaration Etat Nominatif IRSA</p>

        <div class=" p-2 rounded" style="background-color: rgb(252, 252, 252)">
              <span>
                  <p>
                      Veuillez remplir les champs et cliquer sur le boutton <strong>"declarer"</strong> pour declarer. <br>
                      Et sur <strong>"Terminer declaration"</strong> si la declaration des tous les Employers est fait. <br>
                      S' il y a des difficulter a la remplissage du formulaire <br>
                      n'hesiter pas d'allez au menu <strong> "Instruction ou Canevas" </strong>
                  </p>
              </span>
        </div>

                        <form method="post" action="{{route('ajout_declaration_employer')}}" id="FRM">



                           <div class=" d-flex align-items-center">
                             @if(session('error'))
                                 <div class="rs_ms">

                                        <div class=" text-success mt-1" id="message">
                                            <p>
                                              <i class=" fa fa-check me-2 "></i><b>{{session('error')}}</b>

                                            </p>
                                        </div>
                                  </div>
                                  <div>

                                  </div>
                                   <div  onclick="document.getElementById('id02').style.display='block'">
                                          <span class=" btn btn-sm" style="background-color:rgb(218, 12, 12); color:white; margin-left:10em">
                                          <i class=" fa fa-calculator me-2"> </i> <b>voir le detail du calcule</b></span>
                                   </div>
                                   <div>
                                     <a href="{{ route('page_detail_employer_provisoir', ["id_dec"=>$id_declaration]) }}"
                                      style="background-color:rgb(13, 150, 20); color:white; margin-left:2em" class="btn btn-sm"><i class=" fa fa-eye"></i>
                                        visualiser employer declarer
                                     </a>
                                   </div>
                              @endif
                           </div>

                            @csrf
                            <!-- id hidden input -->
                             <input  type="hidden" id="dt" required name="id_entreprise" value="{{session('soc')}}" class="form-control w-100" />
                             <input  type="hidden" id="dt" required name="id_decl" value="{{$id_declaration}}" class="form-control w-100" />


                           <strong><u><u>Information sur chaque Employer</u></u></strong>

                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">Nom et Prenom:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="nom_prenom"   class="form-control w-100" />
                           </div>

                            <!-- fonction input -->
                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">Fonction:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="fonction"   class="form-control w-100" />
                           </div>

                           <!-- CIN input -->
                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">Num CIN:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="cin"   class="form-control w-100" />
                           </div>

                             <!-- CNaps input -->
                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">Num CNaps:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="cnaps"   class="form-control w-100" />
                           </div>

                              <!-- Renumeration input -->
                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">Renumeration brute:&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="renumeration" class="form-control w-100" />
                           </div>

                            <!-- Aventage en Nature input -->
                            <div class="col- mt-3 d-block align-items-center p-2 rounded bg-body-secondary" >
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
                           <div class="col- mt-3 d-flex align-items-center" >
                              <label for="dt">valeur de l'Avantage :&nbsp;&nbsp;</label>
                              <input  type="text" id="dt" required name="valeur_aventage"   class="form-control w-100" />
                          </div>

                           <!-- Pension input -->
                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">valeur de Pension :&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="pension"   class="form-control w-100" />
                           </div>

                           <!-- Pension input -->
                           <div class="col- mt-3 d-flex align-items-center" >
                               <label for="dt">Cotisation Sanitaire :&nbsp;&nbsp;</label>
                               <input  type="text" id="dt" required name="sanitaire"   class="form-control w-100" />
                           </div>

                            <!-- Pension input -->
                           <div class="col- mt-3 d-flex align-items-center" >
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


                            </div>


                          </div>
                        </form>

                        <div style="margin-left: 35em;margin-top:-3em">
                        <form action="{{ route('terminer_declaration') }}" method="post">
                          @csrf

                          <input  type="hidden" id="dt" required name="id_entreprise" value="{{session('soc')}}" class="form-control w-100" />
                          <input  type="hidden" id="dt" required name="id_decl" value="{{$id_declaration}}" class="form-control w-100" />

                          <button type="submit"  style="background-color:rgb(31, 123, 209);
                            color:white ;
                            "   class=" mt-4 btn btn-sm" style="color :white;text-decoration: none;">
                            <i class="fa fa-check"></i>
                            &nbsp; Terminer la declaration
                          </button>

                        </form>
                        </div>

    </div>






<!-- Menu -->
    <div class="col-3 p-2 rounded bg-body" >

        <p style=" color:rgb(17, 126, 17)" ><b><i class="fa fa-bars" ></i>&nbsp; MENU</b></p>
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
              <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                 <i class=" fa fa-dollar"></i> Liste des paiment d'IRSA <br>
                 <small style="font-size: 13px;color:rgb(35, 140, 211)">pour visualiser les paiments et recuperer l'accusé </small>

              </div>
            </a>
            <a href="{{route('message',  ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
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
                        {{ $nb_mes}}
                      </span>

                  @endif

                </i> <b class=" text-white" style="margin-left: 0.1em">Message</b> <br>


              </div>
            </a>



        </div><br>
      <img src="{{asset('image/pay.jpg')}}" width="140" style="margin-left: 3em" alt="">









     <br><br><br><br><br>
<!-- Menu -->
    <p style=" color:rgb(17, 126, 17)"><b><i class="fa fa-bars" ></i>&nbsp; MENU</b></p>
      <div class="d d-grid" >
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
                <div class="b mb-2 rounded p-2" style="background-color: rgb(226, 226, 226)">
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
              <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                 <i class=" fa fa-dollar"></i> Liste des paiment d'IRSA <br>
                 <small style="font-size: 13px;color:rgb(35, 140, 211)">pour visualiser les paiments et recuperer l'accusé </small>

              </div>
             </a>
             <a href="{{route('message',  ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
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
                        {{ $nb_mes}}
                      </span>

                  @endif

                </i> <b class=" text-white" style="margin-left: 0.1em">Message</b> <br>


              </div>
            </a>


        </div><br>
      <img src="{{asset('image/pay.jpg')}}" width="140" style="margin-left: 3em" alt="">



    </div>


</div>



<!-- TCanevas et Instruction  -->
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


 <!-- The Detail  de calcule-->

<div  class="detail" id="id02">
  <div class="detail-content" style="color: rgb(128, 128, 128)">
      <div class="close2" onclick="document.getElementById('id02').style.display='none'" >
        <i class=" fa fa-close"></i>
      </div>
        <div>
           <img src="{{asset('img/tete_img.png')}}" alt="" width="800" srcset="">
        </div>
        <br>
      <div style="padding: 1em 5em">
        <p>
          <p class=" h5 text-center"><u><b> <i class=" fab fa-keycdn"></i> Detail du calcul</b></u> </p>

            Nom et Prénom du l'employer : <b>{{session('nom_prenom')}}</b>  <br>


            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Salaire Brute : <b>{{session('salaire')}}</b> Ar <br>
            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Avantage en nature : <b>{{session('avantage')}}</b> Ar <br>
            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Pension : <b>{{session('pension')}}</b> Ar <br>
            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Cotisation Sanitaire : <b>{{session('sanitaire')}}</b> Ar <br>
            &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Charge Personnel : <b>{{session('enfant')}}</b> <br><br>


            <p class=" rounded p-2">
                  Alors le salaire Imposable est de <b>{{session('base')}}</b> Ar .<br>
                  Concerner dans la <b>{{session('tranche')}}</b> avec le taux <b>{{session('taux')}}</b> <br>

                  <b> D'apres calcule : L'Impot correspand est <b>{{session('impot')}}</b> Ar  </b>

            </p>

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
              $(document).on('keydown', function(e) {
                // Vérifiez la combinaison de touches (par exemple, Ctrl + Alt + P)
                if (e.ctrlKey && e.altKey && e.key === 'm') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('message', ["soc" => session('soc')]) }}";
                }
                if (e.ctrlKey && e.altKey && e.key === 'a') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('acceuille', ["soc"=>session('soc')]) }}";
                }
                if (e.ctrlKey && e.altKey && e.key === 'r') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('recap',  ["soc"=> session('soc')]) }}";
                }
                if (e.ctrlKey && e.altKey && e.key === 'l') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('liste_paiment', ["soc"=> session('soc')]) }}";
                }
            });


              function confirmLogout() {
                  // Utiliser la fonction JavaScript confirm pour afficher la boîte de dialogue
                  var result = confirm("Êtes-vous sûr de vouloir vous déconnecter?");

                  // Si l'utilisateur clique sur "OK" (true), rediriger vers la route de déconnexion
                  if (result) {
                      window.location.href = '{{ route('deconnexion') }}'; 
                  }
              }
            $(document).ready(function(){
               $('.btn_dec').fadeIn(3000);



            })


        </script>

@endsection

