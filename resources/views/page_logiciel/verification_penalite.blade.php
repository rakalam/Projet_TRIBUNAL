@extends('page_logiciel.fixe_log')

@section('table_paiment')
   <link rel="stylesheet" href="{{ asset('css/soutien.css') }}">

            
        <div  class="total" id="id02">
            <div class="total-content " style="color: rgb(128, 128, 128)">
                <div class="close3" >
                <a href="#" onclick="history.back();" style=" text-decoration:none;color:rgb(0, 0, 0)">
                    <i class=" fa fa-close"></i>
                </a>
                </div>
                <div style="margin-left: 2em">
                    <img src="{{asset('img/tete_img.png')}}" alt="" width="800" srcset="">
                </div>
                <br>
                <div style="padding: 3em 5em">
                
                    <p class=" h5 text-center"><u><b> <i class=" fab fa-keycdn"></i> Réglement de compte</b></u> </p>
                    <form action="{{route('verifier_penalite')}}" method="post">
                        
                        
                        
                        @csrf
                        
                        <div class=" col-6" style="margin-left: 6em">
                            <p class="h5"> Veuillez remplir la date de paiement</p>

                             @if(session('mes'))
                                <div class=" alert alert-danger">
                                        <p>{{session('mes') }}</p>
                                </div>
                             @endif   

                                <!-- date declaration input -->
                        <input  type="hidden" id="dt" required name="id_decl" required value="{{$declaration->id}}"  class="form-control w-100" />
                        <div class="col-12 mt-3 d-flex align-items-center" >
                            <label for="dt">Date de declaration:&nbsp;&nbsp;</label>
                            <input  type="text" id="dt" required name="date_decl" required value="{{$declaration->date_declaration}}"  class="form-control w-100" />
                        </div>
                            <!-- periodicite input -->
                        <div class="col-12 mt-3 d-flex align-items-center" >
                            <label for="dt">Périodicité:&nbsp;&nbsp;</label>
                            <input  type="text" id="dt" required name="periodicite" required value="{{$declaration->periodicite}}"  class="form-control w-100" />
                        </div>
                            <!-- mois input -->
                        <div class="col-12 mt-3 d-flex align-items-center" >
                            <label for="dt">Mois:&nbsp;&nbsp;</label>
                            <input  type="text" id="dt" required name="mois" required value="{{$declaration->mois}}"  class="form-control w-100" />
                        </div>
                        <!-- anné input -->
                        <div class="col-12 mt-3 d-flex align-items-center" >
                            <label for="dt">Année:&nbsp;&nbsp;</label>
                            <input  type="text" id="dt" required name="anne" required value="{{$declaration->anne}}"  class="form-control w-100" />
                        </div>
                            <!-- date paiement input -->
                        <div class="col-12 mt-3 d-flex align-items-center" >
                            <label for="dt">Date de paiement:&nbsp;&nbsp;</label>
                            <input  type="date" id="dt" required name="date_paiement"  required class="form-control w-100" />
                        </div>
                    
                        
        
                            <button  type="submit" style="background-color:rgba(17, 126, 17, 0.795);
                                            color:rgb(255, 255, 255) ;
                                            border:none;
                                            padding-left:1.2em; 
                                            padding-right:1.2em;
                                            padding-top:0.5em;
                                        
                                            padding-bottom:0.5em;"
                            
                                class=" mt-4">
                                
                                    <i class="fa fa-check"></i>
                                    &nbsp; continue la paiment
                                
                            </button>
        
                        </div>
        
                    </form>
            
            
            
                 </div>
        
        
             </div>
        </div> 
  


@endsection