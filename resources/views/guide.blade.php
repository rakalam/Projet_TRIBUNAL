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


<div class="d-flex align-items-center p-3 rounded col-11 tete">
    <div class="lh-1">
      <h1 class="h2 mb-0 lh-1"><b><b>Guide de logiciel</b> </b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>
    </div>

</div>

<div class=" mt-1 mb-1 p-3 rounded col-11 retenue" style=" margin-left:4em;  background-color: rgb(248, 248, 248)">
    <p class="h5"><u>Description de la premiere Interface</u>  </p>

    <div class=" d-flex align-middle col-9">

      <div>
           <img src="{{asset('photos_guide/Capture d’écran (175).png')}}" width="350" alt="" srcset="">
      </div>
      <div style="margin-left: 3em">
        <p>Voici notre premiere interface qui compris plusieurs element <br>
            comme example : liens , espace connexion ,... <br>
            A partir de cette guide nous decidons d'expliquer et <br>
            montrer les signification de tout les element compris <br>
            dans le logiciel

        </p>
      </div>
        

    </div><br>


    <p class="h5"> <i class=" fa fa-star" style="color: rgb(255, 208, 0)"></i> Informations sur les differentes liens</p>

    <div class=" d-flex align-items-center">

        <div class=" d-flex align-middle me-5 bg-body-secondary rounded p-2">
            <div>
                <img src="{{asset('photos_guide/acc.jpg')}}" width="200" alt="" srcset="">
           </div>
           <div style="margin-left: 3em">
             <p>Le liens " <b>Acceuille</b> " permet de visualiser la <br>
                la premiere interface de l'application . <br>
                Comme connecter si vous êtes un payeur <br>
                 Adminisatrateur ou  un organisme payeur  
     
             </p>
           </div>
             
        </div>

        <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
            <div>
                <img src="{{asset('photos_guide/doc.jpg')}}" width="200" alt="" srcset="">
           </div>
           <div style="margin-left: 3em">
             <p>Le liens " <b>Documentation</b> " permet de visualiser les <br>
                documentations concernant l'impôt comme les   . <br>
                Obligation des contribuable , les Article dans  <br>
                la code des impôts etc...
     
             </p>
           </div>
             
        </div>
    </div>

    <br>
    <div class=" d-flex align-items-center">

        <div class=" d-flex align-middle me-5 bg-body-secondary rounded p-2">
            <div>
                <img src="{{asset('photos_guide/guide.jpg')}}" width="200" alt="" srcset="">
           </div>
           <div style="margin-left: 3em">
             <p>Le liens " <b>Guide</b> " permet de visualiser les <br>
                l'instruction et les guide a suivre dans. <br>
                dans cette logiciel .Pour donner au utilisateur <br>
                des canevas et signification des element .. 
     
             </p>
           </div>
             
        </div>

        <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
            <div>
                <img src="{{asset('photos_guide/apropos.jpg')}}" width="200" alt="" srcset="">
           </div>
           <div style="margin-left: 3em">
             <p>Le liens " <b>A propos</b> " permet de resumer  <br>
                le but de la logiciel et de l'a propos de  . <br>
                la createur de la logiciel ( contact , <br>
                nom et prenom , service , domaine ,...)
     
             </p>
           </div>
             
        </div>

    </div>
    <br>
    <p class="h5"> <i class=" fa fa-star" style="color: rgb(255, 208, 0)"></i> Autre Information</p>



     <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
         <div style="margin-left: 3em" class=" me-5">
           <p>Il y a un lien qui dirige vers le pdf <br>
              du code des impot ..<br>
              Colorer en vers , il suffit de cliquer <br>
              et vous avez un pdf de code des impot 
   
           </p>
         </div>
            <div>
                <img src="{{asset('photos_guide/code_impot.jpg')}}" width="200" alt="" srcset="">
           </div>
             
     </div>
   <br>

   <div class=" d-flex align-items-center">

    <div class=" d-flex align-items-center bg-body-secondary rounded p-2">
        <div>
            <img src="{{asset('photos_guide/espace_connection.jpg')}}" width="200" alt="" srcset="">
       </div>
       <div style="margin-left: 3em">
         <p>l'espace pour la connection si vous êtes   <br>
            Payeur ou organisme payeur ou utilisateur . <br>
            Cette connexion est ouvert . <br>
            La differente entre l'e payeur et l'admin <br>
            Payeur en bleu tandisque l'ADMIN en vert
 
         </p>
       </div>
    </div>

       <div class=" d-flex align-items-center bg-body-secondary rounded p-2" style="margin-left: 5em">
        <div>
            <img src="{{asset('photos_guide/adm.png')}}" width="200" alt="" srcset="">
       </div>
       <div style="margin-left: 3em">
         <p>l'espace pour la connexion si vous êtes   <br>
            Admin serveur de la DGI ou centre fiscale . <br>
            Cette connexion est ouvert . <br>
            La differente entre l'e payeur et l'admin <br>
            Payeur en bleu tandisque l'ADMIN en vert
 
         </p>
       </div>
         
    </div>


   </div>
   <br>

   <p class="h5"><u>Description apres l'authentification</u>  </p>


   <div class=" d-flex align-items-center">

    <div class=" d-flex align-items-center rounded p-2">
        <div>
            <img src="{{asset('photos_guide/aspace_priver.jpg')}}" width="200" alt="" srcset="">
       </div>
       <div style="margin-left: 3em">
         <p>l'espace priver qui contient l'identifiant   <br>
            de la sicièté qui connecte  . <br>
            Il y a la date , NIF et nom de la . <br>
            Socièté , même la centre fiscale qu'il <br>
            devait placer son declaration
    
         </p>
       </div>
      </div>


      
      <div class=" d-flex align-items-center rounded p-2 " style="margin-left: 5em">
        <div>
            <img src="{{asset('photos_guide/liste_irsa.jpg')}}" width="200" alt="" srcset="">
       </div>
       <div style="margin-left: 3em">
         <p>tableau qui montre les situations des   <br>
            envois IRSA de la socièté   . <br>
            Le table est affiche en generale les envoie . <br>
            IRSA , entrer dans le liens recapitulation  <br>
            pour avoir les details et recuperer l'accuser <br>
            de dêpot
    
         </p>
       </div>
      </div>

   </div>

   <div class=" d-flex align-items-center rounded p-2 " style="margin-left: 40em">
    <div>
        <img src="{{asset('photos_guide/menu.jpg')}}" width="200" alt="" srcset="">
   </div>
   <div style="margin-left: 3em">
     <p>menu contenir tout les dinamisme de la  <br>
        logiciel , liens pour finir les tâches  . <br>
        ils possedent 5 lien : . <br>
        <b>Acceuille:</b> pour l'acceuille de la logiciel <br>
        <b>instruction:</b> pour l'instruction a la declaration <br>
        <b>declaration:</b> pour commencer la declaration d'IRSA <br>
        <b>Recapitulation:</b> pour visualiser les envois IRSA <br>
        <b>liste paiment:</b> pour visualiser les liste des paiment IRSA <br>


     </p>
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
            if (e.ctrlKey && e.key === 'a') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('page_1') }}";
            }
            if (e.ctrlKey && e.key === 'p') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('a_propos') }}";
            }
            if (e.ctrlKey && e.key === 'd') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('doc') }}";
            }
       });

   </script>

@endsection

