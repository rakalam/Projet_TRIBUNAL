@extends('page_logiciel.fixe_log')

@section('table_paiment')


     <div class=" mb-2" >
        <p class="h3" style="color: rgb(17, 126, 17)">
            Liste des paiement Effectuer
            </p>
            <div class=" p-2 rounded bg-body-secondary">
            <strong> "Detail" </strong> pour avoir la detail su paiment . <br>
            <strong> "Accuser" </strong> pour avoir un accuser via l'Administration .
    </div>
    </div>
       

    <div  class="total" id="id02">
        <div class="total-content" style="color: rgb(128, 128, 128)">
            <div class="close3" >
              <a href="{{route('liste_paiment', ["soc"=> session('soc')])}}" style=" text-decoration:none;color:rgb(0, 0, 0)">
                  <i class=" fa fa-close"></i>
              </a>
            </div>
              <div>
                 <img src="{{asset('img/tete_img.png')}}" alt="" width="800" srcset="">
              </div>
              <br>
            <div style="padding: 1em 5em">
              <p>
                <p class=" h5 text-center"><u><b> <i class=" fab fa-keycdn"></i> Total de la declaration</b></u> </p>
                  Aujourd'hui le <b> </b> <br>
                  L'entreprise<b> {{ session()->get('societe'); }}</b> a fait une declaration de : <br>
          
                 
                  &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Total Employer : <b> </b>  <br>
                  &nbsp;&nbsp;&nbsp; <i style="font-size: 10px" class=" fa fa-star"></i>&nbsp; Total Impot à payer : <b></b> Ar <br>
                 
                     
          
       
          
            </div>
      
          </p>
        </div>
      
      
      </div>


@endsection

