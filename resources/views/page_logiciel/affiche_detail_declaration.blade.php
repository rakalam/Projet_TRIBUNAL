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
    color: rgb(255, 189, 45)
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
      <h1 class="h5 mb-0 lh-1"><b><b>DETAILLES DE LA DECLARATION DES EMPLOYERS </b></b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>

    </div>
    <div style="margin-left: 40%;color: rgb(17, 126, 17)" class="s">
        <p class=""> <i class="fa fa-industry"></i> &nbsp;Socièté : <small><b><b>{{ session()->get('societe'); }}</b></b></small></p>

    </div>

</div>

<div class="mt-1 mb-1 rounded col-11 retenue mt-1 d-flex p-2" style="margin-left:4em;   background-color: rgb(248, 248, 248)">

  <div class="col-2 d-block me-1">
    <div class=" rounded " style=" background:rgb(235, 232, 232)">
        <h6 style="color:rgb(17, 126, 17);"> <i class="fa fa-globe-africa m-2 "></i> Espace Privée de</h6>
            <div class="p-2 bg-body text-start" style="font-size:12px;font-family:sans-serif">
                <p><i class="fa fa-clock"></i> &nbsp;<b>Date</b> : <small>{{date('d/m/Y')}}</small></p>
                <p><i class="fa fa-passport"></i>&nbsp;<b>Code</b> : <small>{{ session()->get('nif'); }}</small></p>
                <p><i class="fa fa-industry"></i> &nbsp;<b>Socièté</b> : <small>{{ session()->get('societe'); }}</small></p>
                <p><i class="fa fa-home"></i> &nbsp; <b>centre fiscale </b>: <small>{{ session()->get('cf'); }}</small></p>
                <a href="{{route('deconnexion')}}" onclick=" alert('Voullez vous vraiment deconnecter?');
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

   <div class=" col-10 p-2" >

        <div class=" d-flex align-items-center">
              <div>
                <p class=" h4"  style="color:  rgb(17, 126, 17);font-size:20px">Listes des declaration des Employer</p>
              </div>
              <div class="allez_p1" style="margin-left:45em ">
                <a href="{{ route('acceuille', ["soc"=>$soc]) }}" class=" btn btn-sm mt-3" style=" background:rgb(17, 126, 17);color:white;">
                  <i class=" fa fa-angle-double-left"> </i> &nbsp; retour
                </a>
              </div>
          
        </div>
    


    <div class=" d-flex bg-body-secondary p-2 mb-2"> 
      <p class=" me-3"> date du declaration : <strong>{{ $date_declaration}}</strong></p>
      <p class=" me-3"> Periodicité : <strong>{{ $periodicite}}</strong></p>
      <p class=" me-3"> Total Employers : <strong>{{ $i}}</strong></p>
      <p class=" me-3"> Total Taxe : <strong>{{ $montant}} Ar</strong></p>
   </div>
 
     <table class="table " style="font-size: 12px">
         <thead class="d table-active">
           <tr>
             <th scope="col">Num</th>
             <th scope="col">Nom et Prenom</th>
             <th scope="col">Fonction</th>
             <th scope="col">CIN</th>
             <th scope="col">CNaps</th>
             <th scope="col">Renumeration</th>
             <th scope="col">Anvantage</th>
             <th scope="col">Pension</th>
             <th scope="col">Cotisation Sanitaire</th>
             <th scope="col">personne Charge</th>
             <th scope="col">Impot </th>
             
           </tr>
         </thead>
         <tbody >
                 
                     
                   @foreach ($employers as $l)
                    <tr>
                       <td>N° :00{{ $l->id }}</td>
                       <td>{{ $l->nom_prenom }}</td>
                       <td>{{ $l->fonction }}</td>
                       <td>{{ $l->cin}}</td>
                  
                       <td>{{ $l->cnaps }}</td>
                       <td>{{ $l->renumeration }} Ar</td>
                       <td>{{ $l->avantage }} Ar</td>
                       <td>{{ $l->pension }} Ar</td>
                       <td>{{ $l->sanitaire }} Ar</td>
                       <td>{{ $l->enfant }}</td>
                       <td>
                        <span class=" btn btn-sm" style=" background:rgb(255, 17, 17);color:white">

                          {{ $l->impot }} Ar
                         </span>
                       </td>
                      
                    </tr>
                       
                   @endforeach
         </tbody>
       </table>
   </div>

</div>

        




   
  
    <!-- Modal Content -->
    
      <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
      <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script>

              
            $(document).ready(function(){
               $('.btn_dec').fadeIn(3000);
 
            })

            
        </script>

@endsection

