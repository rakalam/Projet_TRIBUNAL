@extends("fixe_dossier.iface")

@section("contenu")
<link href="{{asset('css/soutien.css')}}" rel="stylesheet">
<style>

    #txt span{
        font-size: 2em;
        font-weight: bold
    }
    #txt small{
        font-style: italic;
        font-weight: bold
    }
    .tete{
       
        margin-left: 4em;
        margin-top: 2em;
        color: rgb(255, 255, 255);
        

    }

    /* rsk bouton*/
    .btn1_v{
    width: 3px;
    height: 26%;
    background-color: transparent;
    position: absolute;
    top: 22%;
    left: 17%;
  
    font-size: 4em;
    line-height: 15px;
    text-align: center;
    transform: rotate(10deg);
    color: rgba(100, 100, 100, 0.836);
    z-index: -1;
}
.btn1_h{
    width: 60%;
    height: 3px;
    background-color:transparent;
    position: absolute;
    top: 15%;
    left: 18%;
    z-index: -1;
    
    font-size: 4em;
    letter-spacing: -13px;
    color: rgba(100, 100, 100, 0.836);
}


.btn2_v{
    width: 3px;
    height: 26%;
    background-color: transparent;
    position: absolute;
    top: 37%;
    left: 26%;
  
    font-size: 4em;
    line-height: 15px;
    text-align: center;
    transform: rotate(10deg);
    color: rgba(100, 100, 100, 0.836);
    z-index: -1;
}


.btn2_h{
    width: 60%;
    height: 3px;
    background-color:transparent;
    position: absolute;
    top: 30%;
    left: 27%;
    z-index: -1;
    
    font-size: 4em;
    letter-spacing: -13px;
    color: rgba(100, 100, 100, 0.836);
}




.btn5_v{
    width: 3px;
    height: 26%;
    background-color: transparent;
    position: absolute;
    top: 70%;
    left: 15%;
  
    font-size: 4em;
    line-height: 15px;
    text-align: center;
    transform: rotate(170deg);
    color: rgba(100, 100, 100, 0.836);
    z-index: -1;
}



.btn5_h{
    width: 60%;
    height: 3px;
    background-color:transparent;
    position: absolute;
    top: 82%;
    left: 15%;
    z-index: -1;
    
    font-size: 4em;
    letter-spacing: -13px;
    color: rgba(100, 100, 100, 0.836);
}

.btn4_v{
    width: 3px;
    height: 26%;
    background-color: transparent;
    position: absolute;
    top: 57%;
    left: 25%;
  
    font-size: 4em;
    line-height: 15px;
    text-align: center;
    transform: rotate(170deg);
    color: rgba(100, 100, 100, 0.836);
    z-index: -1;
}



.btn4_h{
    width: 60%;
    height: 3px;
    background-color:transparent;
    position: absolute;
    top: 69%;
    left: 25%;
    z-index: -1;
    
    font-size: 4em;
    letter-spacing: -13px;
    color: rgba(100, 100, 100, 0.836);
}
    
.btn3_v{
    width: 3px;
    height: 26%;
    background-color: transparent;
    position: absolute;
    top: 55%;
    left: 34%;
  
    font-size: 4em;
    line-height: 15px;
    text-align: center;
    transform: rotate(10deg);
    color: rgba(100, 100, 100, 0.836);
    z-index: -1;
}



.btn3_h{
    width: 60%;
    height: 3px;
    background-color:transparent;
    position: absolute;
    top: 49%;
    left: 35%;
    z-index: -1;
    
    font-size: 4em;
    letter-spacing: -13px;
    color: rgba(100, 100, 100, 0.836);
}
   
</style>

<div class="boit">
 
    
</div>


<div  class="propos" id="id01">
   <div class="point">
       
    <div class="btn1_v">
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> 
     
      </div>
      <div class="btn1_h">
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
      </div>




     <div class="btn2_v">
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        . <br> . <br>. <br>
        
     
      </div>
      <div class="btn2_h">
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       
      
     </div>



     
     <div class="btn5_v">
        . <br> . <br>. <br>
        . <br> . <br>. <br>
       
       
        
     
      </div>
      <div class="btn5_h">
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
     
       
      
     </div>

     <div class="btn4_v">
        . <br> . <br>. <br>
      
       
       
        
     
      </div>
      <div class="btn4_h">
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; 
      
     </div>


     <div class="btn3_v">
        . <br> . <br>. <br>
        . <br> . <br>. <br>
      
    
      </div>
      <div class="btn3_h">
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; . &nbsp; . &nbsp;
       . &nbsp; 
      
      
      
     </div>
   </div>




    <div class=" d-flex align-items-center p-3 rounded col-6 tete">
        <div class="lh-1  col-4 p-2 rounded me-3" style="background: rgba(185, 185, 185, 0.397)">
          <h1 class="h5 mb-0 lh-1"><b><b>Petit Astuce sur l'IMPOTS</b></b></h1>
          <small><i><b><span style="color: rgb(17, 126, 17)">Code des  Impôts</span></b> Madagascar</i></small>
    
        </div>

        <div class=" mt-3 rounded p-2" style="font-size: 13px;color:rgb(0, 0, 0);background: rgba(255, 255, 255, 0.911)">
            <p>
                <b><u>OBLIGATIONS DES CONTRIBUABLE</u> Art 01.103.16</b> <br>
                    L'employeur ou l'Organisme payeur doit effectuer la <br>
                    declaration et le versement prévu par l'article <br>
                    01.03.12 ,auprès du centre fiscale territorialement <br>
                    compétant, au moyen de formulaire prescrit par l'Admi- <br>
                    nistration et <b> y annexxer l'etat nominatif</b> des <br>
                    sommes payées à ses employées <b>quel que soit le<br>
                    montant de salaires versés par l'employé</b> 

            </p>
        </div>
    
    </div>

       <div class="scro">
        <div class="text-white" style="margin-left: 4.5em">
            <p class=" h6"> Pourquoi? Où  aller notre </p>
            <p class="h2 "><b>Impôt qu'on avez payer ?</b></p> 
        </div>
    
    
    
        <div class=" d-block" style="margin-top:5%; margin-left:5%">
            <div class=" text-white d-flex align-items-center">
               <div class=" me-3">
                     <a href="{{asset('sary_retenue/notre_impot.png')}}">  <img src="{{asset('sary_retenue/notre_impot.png')}}" style="margin-top: 2em" width="150"  srcset="" ></a>
    
               </div>
               <div>
                        <p class=" h6">La reponse : </p>
                        <p class="h4 text-white"><b>Pour mieux comprendre</b></p> 
               </div>
            </div> 
        </div>
    
        <div class=" d-block  col-3" style="position: absolute; top:17%;left:68%">
    
            <div class=" d-flex align-items-center " style="width: 20em;">
                <div class=" p-2 text-center" style="font-size: 12px;color:rgb(223, 223, 223);background:rgba(0, 0, 0, 0.966)">
    
                    <p>Pour fabriquer les batiment <br>
                       Scolaire ..Avoir continuer les <br>
                       Etudes numerique 
                    </p>
                    <span class=" p-1 col-12  bg-body btn btn-sm  " style="color: rgb(17, 126, 17); ">
                        <b>Ar 14.13 Million</b>
                    </span>
                </div>
                <div style="margin-left: ">
                    <img src="{{asset('sary_retenue/ecole.jpg')}}" alt="" width="150" srcset="" >
                </div>
                   
                    
    
    
            </div>
    
    
    
            <div class=" d-flex align-items-center mt-3" style="width: 20em;">
                <div class=" p-2 text-center" style="font-size: 12px;color:rgb(223, 223, 223);background:rgba(0, 0, 0, 0.651)">
    
                    <p>Pour fabriquer les batiment <br>
                     comme  Hopitalier .Garantir  <br>
                     une santé gratuitement 
                    </p>
                    <span class=" p-1 col-12  bg-body btn btn-sm  " style="color: rgb(17, 126, 17); ">
                        <b>Ar 48,84 Million</b>
                    </span>
                </div>
                <div style="margin-left: ">
                    <img src="{{asset('sary_retenue/hopital.jpg')}}" alt="" width="150" srcset="" >
                </div>
                   
                    
    
    
            </div>
    
    
            <div class=" d-flex align-items-center mt-3" style="width: 20em;">
                <div class=" p-2 text-center" style="font-size: 12px;color:rgb(223, 223, 223);background:rgba(0, 0, 0, 0.651)">
    
                    <p>Renouvellement des routes  <br>
                        RN en groudron. Evite contre<br>
                       polution  <br>
                      
                    </p>
                    <span class=" p1 w-100 bg-black text-white " style="color: ">
                        <b>Ar 98,8 Million</b>
                    </span>
                </div>
                <div style="margin-left: ">
                    <img src="{{asset('sary_retenue/contruire_route.jpg')}}" alt="" width="150" srcset="" >
                </div>
                   
                    
    
    
            </div>
    
    
    
            <div class=" d-flex align-items-center mt-2" style="width: 20em;">
                <div class=" p-2 text-center" style="font-size: 12px;color:rgb(223, 223, 223);background:rgba(0, 0, 0, 0.651)">
    
                    <p>Assurance pour les enfant et <br>
                       les femme ..Contre  les <br>
                       Harcellement 
                    </p>
                    <span class=" p1 w-100 bg-black text-white">
                        <b>Ar 3,22 Million</b>
                    </span>
                </div>
                <div style="margin-left: ">
                    <img src="{{asset('sary_retenue/famille.jpg')}}" alt="" width="150" srcset="" >
                </div>
                   
                    
    
    
            </div>
    
            <div class=" d-flex align-items-center mt-3 " style="width: 20em;">
                <div class=" p-2 text-center" style="font-size: 12px;color:rgb(223, 223, 223);background:rgba(0, 0, 0, 0.651)">
    
                    <p>Donner des engrains gratuit <br>
                       pour les habitants de la  <br>
                       Compagne  
                    </p>
                    <span class=" p1 w-100 bg-black text-white">
                        <b>Ar 36,6 Million</b>
                    </span>
                </div>
                <div style="margin-left: ">
                    <img src="{{asset('sary_retenue/riz.jpg')}}" alt="" width="150" srcset="" >
                </div>
                   
                    
    
    
            </div>
    
       </div>
    </div>
    
    
    
</div>



<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
<script src="{{asset('js/anim.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>

<script>
    ScrollReveal({
                 reset:true,
                 distance:'100px',
                 duration:2000,
                 deley:400
         });

        ScrollReveal().reveal('.scro div', {deley: 100,origin: 'left', interval : 100});
         ScrollReveal().reveal('.tete', {deley: 100,origin: 'left', interval : 100});
        ScrollReveal().reveal('.point div', {deley: 100,origin: 'left', interval : 100});

        $(document).on('keydown', function(e) {
            // Vérifiez la combinaison de touches (par exemple, Ctrl + Alt + P)
            if (e.ctrlKey && e.key === 'g') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('guide') }}";
            }
            if (e.ctrlKey && e.key === 'a') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('page_1') }}";
            }
            if (e.ctrlKey && e.key === 'd') {
                // Redirigez vers la page souhaitée
                window.location.href = "{{ route('doc') }}";
            }
       });
       

</script>


@endsection




