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
  .employer {
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

<div class="d-flex align-items-center p-3 rounded col-12 tete">
    <div class="lh-1">
      <h1 class="h5 mb-0 lh-1"><b><b>LISTE RECAPITULATION DES IRSA ENVOYER</b></b></h1>
      <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>

    </div>
    <div style="margin-left: 40%;color: rgb(17, 126, 17)" class="s">
        <p class=""> <i class="fa fa-industry"></i> &nbsp;Socièté : <small><b><b>{{ session()->get('societe'); }}</b></b></small></p>

    </div>

</div>

        
<div class="mt-1 mb-1 rounded col-12 retenue mt-1 d-flex p-2" style="   background-color: rgb(248, 248, 248)">
    
    <div class=" col-2 d-block me-1">
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

    <div class="col-10 p-2 rounded me-1" style="background:white">
        <div class="d-flex mb-3">
            
            <p class="h6" style="color: rgb(17, 126, 17);">Liste des detailles des  Envois IRSA</p>
            
            <div class="allez_p1" style="margin-left: 70%">
                <a href="#" onclick="history.back();"  class=" btn btn-sm mt-3"
                     style=" background:rgb(17, 126, 17);color:white;">
                  <i class=" fa fa-angle-double-left"> </i> &nbsp; retour
                </a>
            </div>
            
            
        </div>

        <div class=" d-flex align-items-center">
            <div style="font-size:11px">
             <p>
                 <b>NIF : {{ session('nif') }}</b><br>
                 <b>ENTREPRISE : {{ session('societe') }}</b>
             </p>
            </div>
            <form action=" {{ route('recherche_recap') }} " class="d-flex  col-5 mb-2"  style="margin-left:33% "  method="POST"  name="F">
                <div class=" mt-4">
                  <p class="h6"><b>Recherche</b></p>
                </div>
                     
                @csrf
                        <input type="hidden" value="{{ session('soc') }}" name="soc">
                        <div class="col-12 mt-3 d-flex align-items-center" style="margin-left: 0.5em">
                        
                                <select class="form-control w-50" name="Periodicite" id="sel" required>
                                    <option value="" selected disabled>Periodicité</option>
                                    <option value="mensuel">mensuel</option>
                                    <option value="bimestre">bimestre</option> 
                                    <option value="semestre">semestre</option>
                                </select>
                        </div>
  
                      
                     
  
  
                          <!-- mois input -->
                      <div class="col-2 mt-3 d-flex align-items-center" style="margin-left: -14.5em" >
                        <!-- mensuel input -->
                      <div class="mens " style="display:">
                            <div class="d-flex">
                              
                              <select class="form-control w-100"  name="mois" id="" >
  
                                <option value="" selected disabled>mois</option>
                                <option value="janvier">janvier</option>
                                <option value="fevrier">fevrier</option>
                                <option value="mars">mars</option>
                                <option value="avril">avril</option>
                                <option value="mai">mai</option>
                                <option value="juin">juin</option>
                                <option value="juillet">juillet</option>
                                <option value="août">août</option>
                                <option value="septembre">septembre</option>
                                <option value="octobre">octobre</option>
                                <option value="novembre">novembre</option>
                                <option value="decembre">decembre</option>
                            </select>
                            </div>
                      </div>
                          <!-- bimestre input -->
                        <div class="bim "   style="display: none">
                            <div class="d-flex ">
                             
                              <select class="form-control w-100" name="mois" id="" >
                                <option value="" selected disabled>mois</option>
                                <option value="janv-fev">janv-fev</option>
                                <option value="mars-avril">mars-avril</option>
                                <option value="mai-juin">mai-juin</option>
                                <option value="juillet-août">juillet-août</option>
                                <option value="sept-oct">sept-oct</option>
                                <option value="nov-dec">nov-dec</option>
                            </select>
                            </div>
                        </div>
                          
  
                        <!-- semestre input -->
                        <div class="sem" style="display:none ">
                          <div class="d-flex">
                           
                              <select class="form-control w-100" name="mois" id="">
                                <option value="" selected disabled>mois</option>
                                <option value="janv-juin">janv-juin</option>
                                <option value="juillet-dec">juillet-dec</option>
                                
                              </select>
                          </div>
                        </div>
                      </div>
  
                      <div class=" col-2 mt-3"  style="margin-left: 0.2em">
                         <input type="text" name="anne" placeholder="année" class=" form-control w-100" required>
                      </div>
  
                      <div  class=" mt-3" style="margin-left: 0.2em">
                            <button type="submit" class="btn btn-outline-success">
                                  <i class=" fa fa-search"></i>
                            </button>
                      </div>
             
                  
                     
            </form>
        </div>

           @if(isset($i))
                @if($i==0)
                <div class=" alert alert-danger">
                    <p class=" h5"> <i class=" fa fa-search"></i> &nbsp; Auccune resultat trouver !! </p>
                </div>
                @endif
   
           @endif
        <div class="" style="font-size: 11px">
          <table class="table ">
                <thead class="d table-active">
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Date declaration</th>
                    <th scope="col">Periodicite</th>
                    <th scope="col">Mois</th>
                    <th scope="col">Anné</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Action</th>
                 
                
                
                    
                </tr>
                </thead>
                <tbody >
                 @foreach ($declaration as $d)
                  @if ($d->etat == "payer")
              
                     
                    
                    <tr>
                                <td>N° 00{{ $loop->index +1 }}</td>
                                <td>{{ $d->date_declaration }}</td>
                                <td>{{ $d->periodicite }}</td>
                                <td>{{ $d->mois }}</td>
                                <td>{{ $d->anne }}</td>
                                <td>{{ $d->montant." Ar" }} </td>
                                <td> 
                                    
                                    <div class="btn_seho " id="btn_seho{{$d->id}}">
                                        <span class=" btn btn-sm bg-body-secondary" title="afficher tous les employer lier a cette declaration"
                                        onclick="

                                           document.getElementById('{{$d->id}}').style.display='block';
                                           document.getElementById('btn_seho{{$d->id}}').style.display='none';
                                           

                                           
                                           " style=" color:rgb(37, 37, 37); font-size:11px"><b>
                                               <small id="txt">voir les detail des employer
                                                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                                <i id="rotate" class=" fa fa-angle-right"></i> 
                                                   
                                            </small> </b>
                                            
                                         </span>
                                    </div>

                                <div id="{{$d->id}}" style="display: none" class="employer bg-body-secondary p-1 rounded" >
                                    <i style="margin-left: 96%" title="fermer"
                                        onclick="
                                          document.getElementById('{{$d->id}}').style.display='none';
                                          document.getElementById('btn_seho{{$d->id}}').style.display='block';



                                          " class="mb-1 fa fa-close btn btn-sm text-bg-danger"></i>
                                         
                                        
                                    <table class="table " style="font-size: 12px">
                                        <thead class=" table-bordered">
                                        <tr>
                                           
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
                                                @if($d->id == $l->id_decl)
                                                    

                                                
                                                            <tr>
                                                                
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
                                                                <span class=" btn btn-sm" style=" background:rgb(199, 38, 38);color:white">
                                        
                                                                {{ $l->impot }} Ar
                                                                </span>
                                                                </td>
                                                            
                                                            </tr> 
                                                
                                                            
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                            

                                    </div>

                    
                                </td>

                                
                                <td>
                                    <a href="{{ route('generer_pdf', ["declaration"=>$d->id]) }}" style="font-size: 13px" class="btn btn-group-sm bg-body-secondary text-black" >
                                            <i class=" fa fa-file-pdf"></i> récepissé
                                    </a>
                                </td>

                    </tr>
                    
                   @endif  
                @endforeach
                        
                            
                </tbody>
          </table>
          {{ $declaration->links() }}
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
           function confirmLogout() {
                        // Utiliser la fonction JavaScript confirm pour afficher la boîte de dialogue
                        var result = confirm("Êtes-vous sûr de vouloir vous déconnecter?");

                        // Si l'utilisateur clique sur "OK" (true), rediriger vers la route de déconnexion
                        if (result) {
                            window.location.href = '{{ route('deconnexion') }}';
                        }
                    }

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
                if (e.ctrlKey && e.altKey && e.key === 'd') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('declaration',  ["soc"=> session('soc')]) }}";
                }
                if (e.ctrlKey && e.altKey && e.key === 'l') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('liste_paiment', ["soc"=> session('soc')]) }}";
                }
            });

              
        $(document).ready(function(){
            $('.btn_dec').fadeIn(3000);
            $('#sel').on('change', function(){
             
             var opt = document.F.Periodicite.value;
             if(opt == "mensuel"){
               $('.bim').hide();
               $('.sem').hide();
                $('.mens').slideDown();
             }
             if(opt == "bimestre"){
               $('.bim').slideDown();
               $('.mens').hide();
               $('.sem').hide();

               }
               if(opt == "semestre"){
                   $('.sem').slideDown();
                   $('.bim').hide();
                   $('.mens').hide();

               }



         })
  
         
    
      })



            
        </script>

@endsection

