@extends("../fixe_dossier.iface")

@section("contenu")


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
 
   
   


.propos {
 
 position: fixed; /* Stay in place */
 z-index: 5; /* Sit on top */
 left: 0;
 top: 0;
 width: 100%; /* Full width */
 height: 100%; /* Full height */
 overflow: auto; /* Enable scroll if needed */
 background-color: rgb(0,0,0); /* Fallback color */
 background-color: rgba(0, 0, 0, 0.856); /* Black w/ opacity */
 padding-top: 60px;
}

/* Modal Content/Box */
.propos-content {
 background-color: #fefefe;
 margin-left: 17%; /* 15% from the top and centered */
 margin-top: 10%; /* 15% from the top and centered */
 border: 1px solid #888;
 width: 70%; /* Could be more or less, depending on screen size */
 padding: 1em;
 
}
/* The Close Button */
.close_propos {
 /* Position it in the top right corner outside of the modal */
 margin-left: 95%;
 padding: 3px 7px;
 text-align: center
 
}
.close_propos:hover{
 background-color: rgb(155, 21, 21);
 color: white;
 cursor: pointer
}

/* Add Zoom Animation */
.propos-content {
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
      <h1 class="h5 mb-0 lh-1"><b><b>VISUALISATION DES LISTE </b></b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>

    </div>
    <div style="margin-left: 50%;color: rgb(17, 126, 17)" class="s">
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
       
       
         
            

  



       
       
    </div>

    <div class="col-2 p-2 rounded bg-body" style="font-size: 12px">
        
        <p style=" color:rgb(17, 126, 17)"><b><i class="fa fa-bars" ></i>&nbsp; MENU</b></p>
        <div class="d d-grid">
              <a href="{{route('acceuille', ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
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
            <a href="{{route('recap',  ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
                <div class="b mb-2 rounded p-2" style="background-color: rgb(245, 245, 245)">
                   <i class="fa fa-envelope-open-text"></i> Recapitulation de l'etat IRSA <br>
                   <small style="font-size: 13px;color:rgb(35, 140, 211)">pour visualiser l'etat et pour rectifier l'IRSA a envoyer </small>
                   
                </div>
            </a>
            <a href="{{route('liste_paiment', ["soc"=> session('soc')])}}" class="t text-decoration-none text-dark ">
              <div class="b mb-2 rounded p-2" style="background-color: rgb(226, 226, 226)">
                 <i class=" fa fa-dollar"></i> Liste des paiment d'IRSA <br>
                 <small style="font-size: 13px;color:rgb(35, 140, 211)">pour visualiser les paiments et recuperer l'accusé </small>
                 
              </div>
          </a>
         


        </div><br>
    


    </div>
    

</div>


<!-- The Modal -->

<div  class="propos" id="id02">
    <div class="propos-content " style="color: rgb(128, 128, 128)">
        <div class="close3" >
                <a href="#" onclick="history.back();" style=" text-decoration:none;color:rgb(112, 108, 108)">
                    <i class=" fa fa-close"></i>
                </a>
        </div>
       <p class=" h5"> <u>Liste Provisoir des employers</u> </p> <br>
       <strong>Total : {{$employers_isa}} </strong>


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
      
        <script>

              
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
 
            })

            
        </script>

@endsection

