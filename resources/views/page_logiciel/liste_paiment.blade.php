@extends('page_logiciel.fixe_log')

@section('table_paiment')



     <div class=" mb-2" >
        <p class="h5" style="color: rgb(17, 126, 17)">
            Liste des paiements Effectuer
            </p>
            <div class=" p-2 rounded bg-body-tertiary" style="font-size: 12px">
            Cette liste est liée a la declaration mentioné sur la colone Declaration . <br>
            Avec le montant total preciser dans leur colone correspondand.
             </div>
    
         


    <form action=" {{ route('recherche_pay') }} " class="d-flex  col-5 mb-2"  style="margin-left:49% "  method="POST"  name="F">
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
              <div class="col-2 mt-3 d-flex align-items-center" style="margin-left: -11.4em" >
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
                    @if(isset($i))
                            @if($i==0)
                                <div class=" alert alert-danger">
                                    <p class=" h5"> <i class=" fa fa-search"></i> &nbsp; Auccune resultat trouver !! </p>
                                </div>
                            @endif
                    @endif
                   <div class=" p-1 bg-body-tertiary" id="message">
                       @if(session('mes_p'))
                        <div class=" text-success" id="rs_ms">
                                <p><b><i class=" fa fa-check"></i> {{ session('mes_p') }}</b></p>
                        </div>
                     @endif   
                  </div>   
    </div>
        <div class="" style="font-size: 11px">

            <table class="table ">
                <thead class="d table-active">
                    <tr>
                    <th scope="col">REf</th>
                    <th scope="col">NIF</th>
                    <th scope="col">Entreprise</th>
                    <th scope="col">Date declaration</th>
                    <th scope="col">Date paiment</th>
                    <th scope="col">Nature</th>
                    <th scope="col">Periodicite</th>
                    <th scope="col">Mois</th>
                    <th scope="col">Année</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Action</th>
                   
                    
                    
                    </tr>
                </thead>
                <tbody >
                    

                   @if(isset($i))
                      @if ($i != 0)
                                @foreach ($liste as $l)
                                <tr>
                                    <td>N°  00{{ $l->id  }}</td>
                                    <td>{{ $l->entreprise->nif  }}</td>
                                    <td>{{ $l->entreprise->nom_societe  }}</td>
                                
                                    <td>{{ date('d M Y', strtotime($l->declaration->date_declaration   )) }}</td>
                                    <td>{{ date('d M Y', strtotime($l->date_paiment )) }}</td>
                                    <td>IRSA</td>
                                    <td>{{ $l->declaration->periodicite  }}</td>
                                    <td>{{ $l->declaration->mois  }}</td>
                                    <td>{{ $l->declaration->anne  }}</td>
                                    <td class=" text-danger"><b>{{ $l->montant }}</b> Ar</td>
                                    <td>
                                      <a href="{{route('recue', ["id_pai"=>$l->id])}}" id="recue" title="recupéré un réçue" style="font-size: 13px" class="btn btn-group-sm bg-body-secondary text-black" >
                                              <i class=" fa fa-file-pdf"></i> réçue
                                      </a>
                                    </td>

                                </tr>
                                
                            @endforeach
                      @endif
                   @endif
                        
                </tbody>
                
            </table>
            @if(isset($i))
               @if ($i != 0)
                {{ $liste->links() }}
               @endif 
            @endif 
        </div>
         


         
      <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
      
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
                if (e.ctrlKey && e.altKey && e.key === 'd') {
                    // Redirigez vers la page souhaitée
                    window.location.href = "{{ route('declaration', ["soc"=> session('soc')]) }}";
                }
            });


          $(document).ready(function(){
            var m = $('#message').text();
              if(m =! ""){

                $('#rs_ms').fadeOut(8000);
              }
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

