@extends("fixe_dossier.iface")

@section("contenu")
<link href="{{asset('css/autre.css')}}" rel="stylesheet">

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
    .avaka2{
        padding: 1em;
        color: rgb(65, 65, 65);
        font-size: 11px
    }
    .avaka1{
        padding: 1em;
        color: rgb(148, 101, 14);
        font-size: 11px ;
        font-weight: bold
    }
    .avaka1 small{
        font-style: italic;
        font-size: 9px;
    }
  
</style>

<div class="bt">
 sfhfhf
</div>

<div class="d-flex align-items-center p-3 rounded col-11 tete">
    <div class="lh-1">
      <h1 class="h2 mb-0 lh-1"><b><b>Documentation</b> </b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>
    </div>

</div>

<div class="d-flex align-items-center text-center mt-1 mb-1 p-3 rounded col-11 retenue" style=" margin-left:4em;  background-color: rgb(248, 248, 248)">
    





     <div class="rounded p-2 bg-body ml-3 text-center me-2" style="">
             <p class="h6">Code des procedures fiscale</p>
             <img src="{{asset('image/r1.png')}}" width="260">

             <div  class="p-2 rounded" style="background-color: rgb(255, 255, 255); 
                                              box-shadow: 2px 2px 2px rgb(240, 239, 239),
                                              -2px -2px 2px rgb(240, 239, 239);">
                 <p>  <h4 class="btn btn col-10" style="color: rgb(17, 126, 17);background-color: rgb(245, 245, 245); " ><b>Article 1-20</b></h4>
                   <br> Les traitement ,salaire,indemniter et  <br>
                        une façon generale, les renumerations  <br>
                        resultant de l'exercice d'une activiter  <br>
                        dependante donne lieu à l'application <br>
                        retenue a la source representative et libe- <br>
                        ratoire de <a href="">l'impôt </a> sur les revenue salariaux
                 </p>
             </div>
        </div>



        <div class="rounded p-2 bg-body ml-3 text-center me-2" style="">
            <p class="h6">Hommes d'Etats</p>
            <video src="{{asset('image/prevention 2.mp4')}}" width="300" autoplay muted loop></video>

            <div  class="p-2 rounded" style="background-color: rgb(255, 255, 255); 
                                             box-shadow: 2px 2px 5px rgb(240, 239, 239),
                                             -2px -2px 5px rgb(240, 239, 239);">
                <p>  <h4 class="btn btn col-10" style="color: rgb(17, 126, 17);
                                                       background-color: rgb(245, 245, 245); " >
                                                       <b><i class="fa fa-hand-back-fist"></i> Suite ...</b></h4>
                  <br> L'Impôt est retenie à la source par  <br>
                       les employeur ou l'organisme payeur <br>
                       lors de chaque payment. <br>
                       La penalité suivant <a href="">l'article 20-01-53</a> <br>
                       du Code des Impôts est à sa charge en cas <br>
                       des échéant
                </p>
            </div>
       </div>

       <div class="rounded p-2 bg-body ml-3 text-center me-2" style="">
        <p class="h6">Enumeration</p>
        <img src="{{asset('image/r.png')}}" width="260">

        <div  class="p-2 rounded" style="background-color: rgb(255, 255, 255); 
                                         box-shadow: 2px 2px 5px rgb(240, 239, 239),
                                         -2px -2px 5px rgb(240, 239, 239);">
            <p>  <h4 class="btn btn col-10" style="color: rgb(17, 126, 17);
                                                   background-color: rgb(245, 245, 245); " >
                                                   <b>encore suite</b></h4>
              <br>  Lorsque au cours d'un mois donné , un <br>
                    salarié perçoit des renumerations se  <br>
                    rapportant normalement à une periode <br>
                    superièure à un mois qulles que soient <br>
                    leur appellations, lesdites sont peuvent<br>
                    être imoosée... <a href="{{asset('code_impots.pdf')}}" style="background-color:rgb(17, 126, 17);
                                                       margin-left:2em"
                                                       class=" btn btn-sm text-white">plus d'Article </a>
            </p>
        </div>
   </div>



   <div class="p-2 bg-body ml-3 col-3 " style="position: absolute;
                                                              top:16%;
                                                              left:72%;
                                                              z-index:2;
                                                              
                                                              ">

            <div class="d-flex align-items-center avaka1">
                <div class=" me-4">
                <img src="{{asset('image/saina-2-1600x900.png')}}" width="70" alt="">
                </div>
                <div>
                REPOBLIKAN'I MADAGASIKARA<br>
                <small>Fitiavana - Tanindrazana - Fandrosoana</small> 
                
                </div>
            </div>
         
            <hr class=" w-75" style="margin-left: 3em" >
        
            <div class="d-flex align-items-center avaka2">
                <div class=" me-4">
                <img src="{{asset('image/OIP.jfif')}}" width="40" alt="">
                </div>
                <div>
                MINISTER DES FINANCES ET DU BUDGET<br>
                SECTRETARIAT GENERAL<br>  
                DIRECTION GENERALE DES IMPOTS
                </div>
            </div>
             <div class=" pt-2" style="font-size: 12px;padding-left:2em">
                <p class="h4" style=" color: rgb(65, 65, 65);">Droit Utilisateur</p>
                
            
                 <p class=" text-start">
                     <i class=" fa fa-user" style="color: rgb(255, 196, 0)"></i> <b> Info Utilisateur</b><br>
                    L’utilisateur peut effectuer toutes
                     les actions sur l’espace du 
                    contribuable. Les déclarations, 
                     les paiements, la gestion du 
                    compte et des utilisateurs du 
                    compte entreprise.

                 </p>

                 <p class=" text-start">
                    <i class=" fa fa-paper-plane" style="color: rgb(255, 196, 0)"></i> <b> Info Declaration</b><br>
                    L’utilisateur ne peut que travailler 
                     sur les déclarations. Il n’a aucune 
                      possibilité d’accéder aux paiements 
                       ou à la gestion du compte

                </p>
                <p class=" text-start">
                    <i class=" fa fa-money-bill" style="color: rgb(255, 196, 0)"></i> <b> Info Payment</b><br>
                    L’utilisateur ne peut que travailler sur
                     les paiements. Il n’a aucune possibilité
                      d’accéder au module de déclaration, ni à la 
                       gestion du compte.

                </p>
                
  
                <p class=" text-start">
                    <i class=" fa fa-laptop" style="color: rgb(255, 196, 0)"></i> <b> Service Informatique</b><br>
                    L’’utilisateur a accès à la gestion du 
                     compte du contribuable. Il n’a pas accès 
                      aux fonctions de déclaration et paiement.
                </p>  

                <a href="{{route('page_1')}}" class=" btn btn-sm" style=" background-color:rgb(255, 196, 0);color:white">
                     connecter &nbsp;<i class=" fa fa-angle-double-right"></i>
                </a>

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
        
    </div>

</div>


   


<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas-navbar.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>

   <script>
       ScrollReveal({
                    reset:true,
                    distance:'100px',
                    duration:2000,
                    deley:400
            });

            ScrollReveal().reveal('.retenue div', {deley: 100,origin: 'top', interval : 100});
            ScrollReveal().reveal('.tete', {deley: 100,origin: 'left', interval : 100});
            ScrollReveal().reveal('.foot', {deley: 100,origin: 'right', interval : 100});

            $(document).on('keydown', function(e) {
            // Vérifiez la combinaison de touches (par exemple, Ctrl + Alt + P)
            if (e.ctrlKey && e.key === 'g') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('guide') }}";
            }
            if (e.ctrlKey && e.key === 'p') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('a_propos') }}";
            }
            if (e.ctrlKey && e.key === 'a') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('page_1') }}";
            }
       });

   </script>

@endsection

