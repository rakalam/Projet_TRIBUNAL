<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<style>
  .contenue{
      font-family: sans-serif;
      font-size: 90%
  }
  .rep{
    line-height: 10px;
    text-align: center
  }
  .rep p{
    font-size: 13px;
    font-weight: bold;
  }
  .rep i{
    font-style: italic;
    font-size: 11px;
  }
  .rep hr{
    width: 60px;
  }
  .dgi{
    text-align: center;
  }
  .dgi p{
    font-size: 14px;
  
  }
  .dgi hr{
    width: 90px;
    margin-top: -10px
  }
  .tatara{
    margin-left: 20%
  }
  .info_soc{
    margin-left: 5%
  }

</style>
<body>
  
  <div class="contenue">
       
    <div class="rep">
        <p>REPOBLIKAN'I MADAGASCAR</p>
        <i>Fitiavana-Tanindrazana-Fandrosoana</i>
        <hr>
    </div> 

    <div class="dgi">
      <p>
        MINISTER DES FINANCES ET DU BUDGET<br>
        SECTRETARIAT GENERAL<br>  
        DIRECTION GENERALE DES IMPOTS
        <hr>
        <br><br>

        <h3><U>ACCUSE DE DEPOT : DELARATION IRSA</U></h3>
        ( <i>DUPLICATA du {{ date('d/m/Y') }}</i> )
      </p>

    </div>

    <div class="tatara">

      <p>
        Nous <b>{{$declaration->entreprise->centre->nom_centre}}</b> , accusons récéption de votre declaration IRSA <br>
        avec les information suivantes:
      </p>
      <div class="info_soc">
        <p><b>NIF : {{$declaration->entreprise->nif }}  </b></p>
        <p><b>N° Statistique : {{$declaration->entreprise->num_stat }}</b></p>
        <p><b>Nom ou Raison sociale :  {{$declaration->entreprise->nom_societe}}</b></p>
        <p><b>Activité :  {{$declaration->entreprise->activite }}</b></p>
        <p><b>Adresse :  {{$declaration->entreprise->adresse }}</b></p>
        <p><b>à la date du : {{ $declaration->date_declaration }}</b></p>
        

      </div> 
      <div class="info_soc">
           liée a la declaration :
           <p><b>périodicité : {{$declaration->periodicite }}  </b></p>
           <p><b>mois : {{$declaration->mois }}  {{ $declaration->anne }}</b></p>

      </div>
      <br>

      <p>Dont les détails suivant :</p>
      <div class="info_soc">
        <p><b>Nombre employés : {{$i}}</b></p>
        <p><b>Total IRSA payés: {{$declaration->montant }} Ar</b></p>
        
      
      </div>


    </div>

      

  </div>
</body>
</html>