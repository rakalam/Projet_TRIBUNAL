<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recue de Paiement</title>
  
    <link rel="stylesheet" href="icon/css/fontawesome.css">
</head>
<style>
    body{
    background-color: rgb(255, 255, 255);
    font-family: sans-serif;
    color: rgb(79, 79, 77);
}
.dig{
   
    
    background: linear-gradient(rgb(255, 255, 255), white);
    box-shadow: 1px 1px 3px rgb(209, 209, 209),
    -1px -1px 3px rgb(209, 209, 209);
   
    width: 80%;
    height: 50%;
    margin-left: 10%;
  /*  position: absolute;
    top: 23%;
    left: 25%;*/
    

    
}
.h_g_ho{
    width: 30%;
    height: 18px;
    background-color: rgb(63, 62, 62);
    
}
.h_g_v{
    
    margin-left: 0.65em;
    width: 68%;
    height: 18px;
    background-color: rgb(8, 90, 8);
}
.h_g_ho, .h_g_v{
    display: inline-block;
}
.b_g_ho, .b_g_v{
    display: inline-block;
}
.b_g_ho{
 
    width: 68%;
    height: 18px;
    background-color: rgb(8, 90, 8);
}
.b_g_v{
    margin-left: 0.65em;
    width: 30%;
    height: 18px;
    background-color: rgb(63, 62, 62);
}
.tete{
   padding: 1em;
}
.sr, .nm_tete, .rf{
    display: inline-block;
    
}
.sr{
   margin-top: -1em;
   margin-left: 1em;
   margin-left: 3em
}

.nm_tete{
    
    margin-top: 0.9em;
    margin-left: 20em;
    font-size: 9px;
    text-align: center;
    line-height: 20px;
   
    
}
.nm_tete span{
    
    font-weight: bold;
    font-size: 19px;
    
   
}
.rf{
    font-size: 10px;
    margin-left: 6em;
    margin-top: 0.5em;
    text-align: center;
}
.s_tete{
    
    font-weight: bold;
    margin-top: 7px;
}
.dt, .num {
    display: inline-block;
}
.dt{
    margin-left: 30.2em;
}
.num{
    margin-left: 1.5em;
}
.tsi{
    width: 100%;
    height: 5px;
    background-color: rgb(8, 90, 8);
    margin-top: 2px;
}
.info{
    font-size: 15px;
    padding-left: 1.5em;
    
    
}
.if{
   
    margin-top: 1em;
    margin-left: 1em;
    padding: 2em;
}
.info, .total{
    display: inline-block;
}
.tap, .tp{
    padding: 2em;
    font-weight: bold
}
.total{
    
    padding-top: 0.5em;
    margin-left: 1em
}
table, thead, tr, th, td{
    border: 1px solid rgb(8, 90, 8);
    border-collapse: collapse;
}
thead{
    background-color: rgb(8, 90, 8);
    color: white;
}
.paye{
    color: red;
    position: absolute;
    top: 45%;
    left: 50%;
    font-size: 1.5em;
    z-index: 1;
    font-weight: bold;
    padding-left: 2em;
    padding-right: 2em;
    border: 5px solid red;
    transform: rotate(-30deg);
}

</style>
<body>
    
    <div class="dig">
        <div>
            <div class="h_g_ho">

            </div>
            <div class="h_g_v"> 
    
            </div>
        </div>


    


        <div class="tete">

            <div class="sr">
                
            
                <img src="data:image/jfif;base64,{{ base64_encode(file_get_contents(public_path('image/OIP (1).jfif'))) }}" alt="Logo de la banque" width="50" >




            </div>
            <div class="nm_tete">
               <span>RECUE D'UN PAIEMENT </span> <br>
               <i class=" fa fa-home"></i>{{$id_pai->entreprise->nom_societe}}
               &nbsp;&nbsp; <i class=" fa fa-phone"></i> {{$id_pai->entreprise->num_stat}}

            </div>
            <div class="rf">
              <b>  REPOBLIKAN'I MADAGASCAR</b> <br>
                <i style="font-size: 8px;">Fitiavana-Tanindrazana-Fandrosoana</i> <br>
               <small>
                   <hr style="width: 50%;">
                MINISTER DES FINANCES ET DU BUDGET <br>
                SECTRETARIAT GENERAL <br>
                DIRECTION GENERALE DES IMPOTS <br>
                
               </small>
            </div>
            
        </div>
        <div class="s_tete">
            <div class="num">
                NO° : <small style="font-size: 14px;">...{{ $id_pai->id }}</small>
            </div>
            <div class="dt">
                Date : <small style="font-size: 14px; ">....{{date('d M Y')}}</small>
            </div>
        </div>
        <div class="tsi">
  
        </div>

       <div class="if">
        <div class="info">
            <p style="font-size: 10px;"><u>IDENTIFICATION DE L'ENTREPRISE</u></p>
              <label><b>NIF</b> : ....................................... {{ $id_pai->entreprise->nif }}</label> <br>
              <label><b>Num Statistique</b> : ................. {{$id_pai->entreprise->num_stat}}</label> <br>
              <label><b>Raison Social</b> :...................... {{ $id_pai->entreprise->nom_societe }}</label> <br>
              <label><b>Activité</b> :................................. {{$id_pai->entreprise->activite}}</label> <br>
              <label><b>Adresse</b> :................................ {{$id_pai->entreprise->adresse}}</label> 
              <p style="font-size: 10px;"><u>BENEFICIAIRE</u></p>
              <label><b>Centre Fiscale beneficiaire</b> : {{ $id_pai->entreprise->centre->nom_centre }}</label> <br>
              <label><b>Declaration du</b> :.....................  {{ $id_pai->declaration->date_declaration }}</label> <br>
              <label><b>Payé le </b>: ..................................{{$id_pai->date_paiment}}</label> <br>
           
  
  
  
          </div>
          <div class=" total">
                
               <table>
                   <thead>
                       <th>TOTAL IMPOT</th>
                   </thead>

                   <tr>
                       <td class="tap">
                           Total à payé : {{$id_pai->montant}} Ar
                       </td>
                   </tr>
                   <tr>
                    <td class="tp"> 
                        Total  payé : {{$id_pai->montant}} Ar
                    </td>
                </tr>
               </table>

          </div>
       </div>
       <div class="paye">
           <p>PAYEE</p>

       </div>
       <div>
        <div class="b_g_ho">

        </div>
        <div class="b_g_v"> 

        </div>
      </div>
    </div>
    


</body>
</html>