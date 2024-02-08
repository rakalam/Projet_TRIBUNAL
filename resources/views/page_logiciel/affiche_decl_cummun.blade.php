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
      <h1 class="h5 mb-0 lh-1"><b><b>BIENVENUE DANS L'ACCEUILLE </b></b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>

    </div>
    <div style="margin-left: 67%;color: rgb(17, 126, 17)" class="s">
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
    </div>

    <div class="col-7 p-2 rounded me-1" style="background:white">
        <div class="d-flex mb-3">

            <p class="h6" style="color: rgb(17, 126, 17)">Situation des Envois IRSA</p>

            <form class="d-flex col-5"  style="margin-left: 34%;"  method="post" action=" ">
                <input class="form-control me-2" type="search" placeholder="Recherche" name="val" aria-label="Search">
            </form>
        </div>

      
       
    </div>

    <div class="col-3 p-2 rounded bg-body">
        
        <p style=" color:rgb(17, 126, 17)"><b><i class="fa fa-bars" ></i>&nbsp; MENU</b></p>
        <div class="d d-grid">
              <a href=" " class="t text-decoration-none text-dark ">
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
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">pour visualiser l'etat et pour rectifier l'IRSA a envoyer </small>
                   
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

  

  <div  class="situation" id="id02">
    <div class="situation-content" style="color: rgb(128, 128, 128)">
        <a href="#" onclick="history.back();" >
          <div class="close2"  >
            <i class=" fa fa-close " ></i> 
          </div>
        </a>
        
          
        <div style="padding: 1em 5em">
          
            <p class="h5"><b> <i class=" fab fa-keycdn"></i> Completé la dossier de declaration </b> </p> <br>

             <div class=" bg-body-tertiary p-2 m-2 " style="font-size: 15px" >
              1- <i style="color:green" class=" fa fa-file"></i>  <b>    pour continuer la declaration des employers. </b>
             <br>
              2- <i style=" color:red" class=" fa fa-trash-alt"></i>  <b>   pour suprimer et annuler la declaration .</b>

             </div>
             @if(session('mes'))
               <div id="mes">
                    <div class="alert alert-success">
                      <p>{{ session('mes') }}</p>
                  </div>
               </div>
             @endif
      
            <table class="table " style="font-size: 14px">
              <thead class="d table-active">
                <tr>
                  <th scope="col">Ref</th>
                  <th scope="col">entreprise</th>
                  <th scope="col">date</th>
                  <th scope="col">Periodicite</th>
                  <th scope="col">Mois</th>
                  <th scope="col">Année</th>
                  <th scope="col">Etat</th>
                  <th scope="col">Action</th>
                  
                </tr>
              </thead>
              <tbody >
                      
                          
                        @foreach ($liste as $l)
                         <tr>
                           @if ($l->etat == "en attente")
                            <td>{{ $l->id }}</td>
                            <td>{{ $l->entreprise->nom_societe}}</td>
                            <td>{{ $l->date_declaration }}</td>
                            <td>{{ $l->periodicite }}</td>
                            <td>{{ $l->mois }}</td>
                            <td>{{ $l->anne }}</td>
                            <td>{{ $l->etat }}</td>
                            <td>
                               
                                      <a title="declarer les employers" href="{{route('page_declaration_employer', ["id_dec"=>$l->id] )}}" style="color:green; font-size:1.5em" >
                                           <i class=" fa fa-file"></i>
                                      </a>
                                      <a title="annuler declaration" href="{{route('sup_decl_commun', ["id_dec"=>$l->id] )}}" style="color :red; margin-left:1em;font-size:1.5em">
                                        <i class=" fa fa-trash-alt"></i>
                                      </a>
                        
                               @endif
                            </td>
                             
                         </tr>
                            
                        @endforeach
              </tbody>
            </table>

      
        </div>
  
    
</div>





      <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
      <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script>

              
            $(document).ready(function(){
               $('.btn_dec').fadeIn(3000);

               var t = $('#mes').text();
               if(t != ""){
                 $('#mes').fadeOut(4000);
               }
 
            })

            
        </script>

@endsection

