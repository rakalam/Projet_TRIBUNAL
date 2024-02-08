@extends('page_logiciel.fixe_log')

@section('table_paiment')


     <div class=" mb-2" >
        <div class=" d-flex align-items-center"> 
            <div>
                <p class="h5" style="color: rgb(17, 126, 17)">
                    <i class=" fab fa-facebook-messenger"></i>  Boite des reception des message
                </p>
            </div>
            <div  style="margin-left: 50%"> 
               <a href=" {{ route('retour_back', ["id_decl"=> $id_decl->id]) }} " 
                 
                 class=" btn btn-sm text-white" style="background-color: rgb(17, 126, 17)"><i class=" fa fa-angle-double-left" ></i> Retour </a>
            </div>
        </div>
        @foreach ($mes as $m)
                    <div class="  p-2 col-6 rounded bg-body-secondary" onclick="document.getElementById('{{$m->id}}').style.display='block'" style="margin-left: 2.5em; margin-bottom:1em ;font-size:11px; cursor:pointer">
                
                    <p style="font-style: italic">
                        {{$m->mes }}
                    </p>
                </div>
                
                <div  class="ms" id="{{$m->id}}">
                    <div class="ms-content">
                        <div class="close_r" onclick="document.getElementById('{{$m->id}}').style.display='none'" >
                            <i class=" fa fa-close"></i>
                        </div>
                        <p>Message</p>
                        <hr>
                        <p style="font-style: italic">
                            {{$m->mes }}
                        </p>
                    </div>
                    
                    </div>
        @endforeach
    </div>
    {{ $mes->links() }}

    
         


    


         
    
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
      <script>

        $(document).on('keydown', function(e) {
            // Vérifiez la combinaison de touches (par exemple, Ctrl + Alt + P)
            if (e.ctrlKey && e.altKey && e.key === 'm') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('message', ["soc" => session('soc')]) }}";
            }
            if (e.ctrlKey && e.altKey && e.key === 'd') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('declaration',  ["soc"=> session('soc')]) }}";
            }
            if (e.ctrlKey && e.altKey && e.key === 'r') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('recap',  ["soc"=> session('soc')]) }}";
            }
            if (e.ctrlKey && e.altKey && e.key === 'l') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('liste_paiment', ["soc"=> session('soc')]) }}";
            }
            if (e.ctrlKey && e.altKey && e.key === 'a') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('acceuille', ["soc"=> session('soc')]) }}";
            }
        });
      </script>

@endsection


