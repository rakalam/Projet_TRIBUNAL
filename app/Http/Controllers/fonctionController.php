<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Centre;
use App\Models\Entreprise;
use App\Models\Declaration;
use App\Models\Payement;
use App\Models\Impot;
use App\Models\Employer;
use App\Models\Message;
use App\Models\Comptemessage;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class fonctionController extends Controller
{





   //pour aller a la premiere page
    public function premier_page(){
       // $centre_fiscale = Centre::all();
       // return view('vrai_acceuille', compact("centre_fiscale", $centre_fiscale));
        return view('vrai_acceuille');

     }
//deconnecter
    public function deconnexion(){

        Session::forget('mesi');
        return redirect(route('page_1'));
    }



     //pour authentifier (login)
    public function traiter_donner(Request $request){
        $request->validate([
            "nif"=>"required",
            "pass"=>"required",

         ]);
            $nif = $request->nif;
            $pas = $request->pass;
            Session::put('NIF', $nif);
            Session::put('MDP', $pas);

            $societe = Entreprise::where("nif", $nif)->first();

          if($societe){

                  if($societe->mdp === $pas){
                      $cf_nom =  $societe->centre->nom_centre;
                      $cf_rib =  $societe->centre->RIB;
                      $nom_societe = $societe->nom_societe;
                      $id_societe = $societe->id;
                      $stat = $societe->num_stat;
                      $adresse = $societe->adresse;
                      $activite = $societe->activite;
                      Session::forget('NIF');
                      Session::forget('MDP');
                      Session::put('nif', $nif);
                      Session::put('societe', $nom_societe);
                      Session::put('cf', $cf_nom);
                      Session::put('rib', $cf_rib);
                      Session::put('soc', $id_societe);
                      Session::put('stat', $stat);
                      Session::put('adresse', $adresse);
                      Session::put('activite', $activite);


                     return redirect(route('acceuille', ["soc"=>$id_societe]));

                }else{
                  $mes = "mot de passe incorrect ";
              }

        }else{
          $mes = "NIF incorrect ";
      }
      return back()->with("error", $mes);
    }



    //liens a l'acceuille
    public function allez_acceuille(Entreprise $soc){


        $nb_mes = $soc->nb_message;
        $liste = Declaration::where("id_entreprise", $soc->id)->paginate(7);
        return view('page_logiciel.acceuille', compact("liste", "nb_mes"));


    }
    //recherche acceuille
    public function rech_acceuille(Request $request){




        $liste = Declaration::where('id_entreprise', $request->soc)
        ->where('periodicite', $request->Periodicite)
        ->where('mois', $request->mois)
        ->where('anne', $request->anne)->get();

        $i = 0;
        foreach($liste as $l){
            $i++;
        }

        return  view('page_logiciel.rech_acceuille', compact("liste","i"));


    }


    public function rech_pay(Request $request){

        $declaration = Declaration::where('id_entreprise', $request->soc)
        ->where('periodicite', $request->Periodicite)
        ->where('mois', $request->mois)
        ->where('anne', $request->anne)->first();
        Session::put('Periodicite', $request->Periodicite);
        Session::put('mois', $request->mois);
        Session::put('anne', $request->anne);

        $nb = Entreprise::where('id', $request->soc)->first();
        $nb_mes = $nb->nb_message;
        $i=0;
        if($declaration)
        {
            $i=2;
            $liste = Payement::where('id_decl', $declaration->id)->paginate(6);
            return view('page_logiciel.liste_paiment', compact("liste","i","nb_mes"));
        }else{
            $i=0;
            return view('page_logiciel.liste_paiment', compact("i","nb_mes"));
        }






    }


    //liens liste paiment
       public function liste_paiment(Entreprise $soc){
           $nb_mes = $soc->nb_message;
           $i = 1;
           $liste = Payement::where("id_entreprise", $soc->id)->paginate(6);
           return view('page_logiciel.liste_paiment', compact("liste","i","nb_mes"));


    }

    public function rech_recapt(Request $request ){


        $declaration = Declaration::where('id_entreprise', $request->soc)
        ->where('periodicite', $request->Periodicite)
        ->where('mois', $request->mois)
        ->where('anne', $request->anne)->paginate(5);
        $employers = Employer::where("id_entreprise", $request->soc)->get();

        $i = 0;
        foreach($declaration as $decl){
            $i++;
        }

        return view('page_logiciel.recape_IRSA', compact("employers", "declaration", "i"));

    }
    //liens recapitulation IRSA
    public function recap(Entreprise $soc){

        $employers = Employer::where("id_entreprise", $soc->id)->get();
        $declaration = Declaration::where("id_entreprise", $soc->id)->paginate(5);
        $nb_mes = $soc->nb_message;

        return view('page_logiciel.recape_IRSA', compact("employers", "declaration", "nb_mes"));


    }
    //liens declaration
    public function declaration(Entreprise $soc){

        $nb_mes = $soc->nb_message;

        return view('page_logiciel.declaration', compact("nb_mes"));

    }

    // detail du paiment
    public function detail_paiment(){

        return view('page_logiciel.detail_paiment');

    }


    //aller a la detail de la declaration employer
    public function detail_employer(Declaration $id_dec){

        $employers = Employer::where("id_decl", $id_dec->id)->get();
        $date_declaration = $id_dec->date_declaration;
        $periodicite = $id_dec->periodicite;
        $montant = $id_dec->montant;
        $soc = $id_dec->id_entreprise;

        $i = 0;
        foreach($employers as $employer){
            $i++;
        }
        return view('page_logiciel.affiche_detail_declaration', compact("employers", "i", "date_declaration", "periodicite", "montant", "soc"));

    }
    public function detail_employer_provisoir(Declaration $id_dec){

        $employers = Employer::where("id_decl", $id_dec->id)->get();
        $employers_isa = Employer::where("id_decl", $id_dec->id)->count('*');

        return view('page_logiciel.visualiser_provisoir', compact("employers","employers_isa"));

    }



    //ajout tronc commun

    public function ajout_decl_cummun(Request $request){
        $request->validate([
            "nif"=>"required",
            "date_declaration"=>"required",
            "anne"=>"required",
            "Periodicite"=>"required",
            "mois"=>"required",
        ]);

        //Pour recuperer l'id du societe
        $nif = $request->nif;
        $entreprise = Entreprise::where('nif',$nif)->first();
        $id_entreprise = $entreprise->id;//io lay id_entreprise
        $tot =0;


        Declaration::create([

            "id_entreprise"=>$id_entreprise,
            "date_declaration"=>$request->date_declaration,
            "periodicite"=>$request->Periodicite,
            "mois"=>$request->mois,
            "anne"=>$request->anne,
            "etat"=>"en attente",
            "montant"=>$tot,

          ]);
          //initialiser la cage pour stocker la totaliter de l'impot declarer
          Impot::create([

            "id_entreprise"=>$id_entreprise,
            "total_impot"=>$tot,

          ]);


          Session::put('date_decl', $request->date_declaration);
          Session::put('id_entreprise', $id_entreprise);
          Session::put('periodicite', $request->Periodicite);

          return redirect(route('affiche_decl_commun', compact("id_entreprise")));


    }


    //affiche declaration cummun
    public function affiche_decl_commun( Entreprise $id_entreprise ){

        $liste = Declaration::where("id_entreprise", $id_entreprise->id)->get();
        return view('page_logiciel.affiche_decl_cummun', compact("liste"));

    }
 //fonction min et max
    public  function max($a, $b){
        $maxx = $a;
        if($maxx < $b )
        {
            $maxx = $b;
        }
        return $maxx;
    }
    public function min($a, $b){
        $minn = $a;
        if($minn > $b )
        {
            $minn = $b;
        }
        return $minn;
    }

// pour aller a la declaration des employers
    public function page_decl_employer(Declaration $id_dec){

        $id_declaration = $id_dec->id;
        $nb_mes = $id_dec->entreprise->nb_message;

        Session::put('id_decl', $id_declaration);
        return view('page_logiciel.declaration_employer', compact("id_declaration","nb_mes"));

    }

    //pour suprimer un declaration  troc commun
    public function sup_decl_commun(Declaration $id_dec){



     Employer::where('id_decl',$id_dec->id)->delete();


        $id_dec->delete();
        $mes = "Suppression terminer";
        return back()->with("mes", $mes);


    }


      /*


    TATARA BE ATO RAKIZY FA MILA MANDINIKA TSARA ****************
    *************************************************************
    *************************************************************
    **************AJOUT AMPLOYER ET CALCULE IMPOT****************
    *************************************************************
    *************************************************************
    *************************************************************

     */

    //pour ajouter declaration de chaque employer
    public function ajout_decl_employer(Request $request){

            $request->validate([
                "id_entreprise"=>"required",
                "id_decl"=>"required",

                "nom_prenom"=>"required",
                "fonction"=>"required",
                "cin"=>"required",
                "cnaps"=>"required",
                "renumeration"=>"required",
                "avantage_nature"=>"required",
                "valeur_aventage"=>"required",
                "pension"=>"required",
                "sanitaire"=>"required",
                "enfant"=>"required",

            ]);




          //Calcule de l'impot Correspondant


            //initialisation des variable
            $BASE = 0;
            $v_avantage = 0;
            $v_enfant = 0;
            $somme_tranche = 0;
            $impot_correspand = 0;

            //pour avoir la valeur de l'avantage en nature
            if($request->avantage_nature == 1 || $request->avantage_nature == 3){// vehicule ou telephone

                $v_avantage = ($request->valeur_aventage) * 0.15;

            }elseif($request->avantage_nature == 2){//logement

                 $a1 = ($request->renumeration) * 0.25;
                 $a2 = ($request->valeur_aventage) * 0.5;
                 $v_avantage = min($a1, $a2);

            }elseif($request->avantage_nature == 4 || $request->avantage_nature == 5){//Autre ou rien
                 $v_avantage = ($request->valeur_aventage);
            }

            //la base
            $BASE = (($request->renumeration) + $v_avantage) - (($request->pension) + ($request->sanitaire));

            $tr1Max = max(0 , ($BASE - 350000));
            $tr2Max = max(0 , ($BASE - 400000));
            $tr3Max = max(0 , ($BASE - 500000));
            $tr4Max = max(0 , ($BASE - 600000));

            $tr1Min = min($tr1Max, 50000);
            $tr2Min = min($tr2Max, 100000);
            $tr3Min = min($tr3Max, 100000);

            $tr1 = $tr1Min * 0.05;
            $tr2 = $tr2Min * 0.1;
            $tr3 = $tr3Min * 0.15;
            $tr4 = $tr4Max * 0.2;

            $v_enfant = ($request->enfant) * 2000;
            $somme_tranche = ($tr1 + $tr2 + $tr3 + $tr4) - $v_enfant;
            $impot_correspand = max(3000, $somme_tranche); // io ilay impot definitive

            //Calcule s'il ya un penaliter



            //pour l'ajout dans la base de donner
            Employer::create([

              "id_decl"=> $request->id_decl,
              "id_entreprise"=>$request->id_entreprise,

              "nom_prenom"=>$request->nom_prenom,
              "fonction"=>$request->fonction,
              "cin"=>$request->cin,
              "cnaps"=>$request->cnaps,
              "renumeration"=>$request->renumeration,
              "avantage"=>$request->valeur_aventage,
              "pension"=>$request->pension,
              "sanitaire"=>$request->sanitaire,
              "enfant"=>$request->enfant,
              "impot"=>$impot_correspand,
            ]);

            $search_declaration = Declaration::where('id', $request->id_decl)->first();
            $nv_impot = ($search_declaration->montant) + $impot_correspand;
            $search_declaration->update([
                "montant" => $nv_impot
            ]);
            $date = $search_declaration->date_declaration;

            $tranche = "";
            $taux = "";
            if( $request->renumeration >= 0 &&  $request->renumeration < 350000) { $tranche = "tranche non imposable"; $taux = "0%";}
            if($request->renumeration >= 350000 && $request->renumeration <= 400000 ) { $tranche = " 1ere tranche "; $taux = "5%";}
            elseif($request->renumeration > 400000 && $request->renumeration <= 500000 ) { $tranche = " 2ere tranche "; $taux = "10%";}
            elseif($request->renumeration > 500000 && $request->renumeration <= 600000 ) { $tranche = " 3ere tranche "; $taux = "15%";}
            elseif($request->renumeration > 600000 ) { $tranche = " 4ere tranche "; $taux = "20%";}



            Session::put('nom_prenom', $request->nom_prenom);
            Session::put('tranche', $tranche);
            Session::put('taux', $taux);
            Session::put('salaire', $request->renumeration);
            Session::put('avantage', $request->valeur_aventage);
            Session::put('pension', $request->pension);
            Session::put('sanitaire', $request->sanitaire);
            Session::put('enfant', $request->enfant);
            Session::put('base', $BASE);
            Session::put('impot', $impot_correspand);
            Session::put('date', $date);


            $message = "declaration avec succes";
            return back()->with("error", $message);



    }
    // terminer declaration

    public function terminer(Request $request){


       $mes = "declaration terminer avec succés";
       $declaration = Declaration::where('id', $request->id_decl)->first();
       $nb_employer = Employer::where('id_decl', $request->id_decl)->count();

       $message_admin =   date('d/M/Y')." Votre declaration du ".$declaration->mois." ".$declaration->anne ."
                                           a été deposée  auprès du ".$declaration->entreprise->centre->nom_centre .".

                                           Raison scocial : ".$declaration->entreprise->nom_societe .".
                                           NIF :". $declaration->entreprise->nif .".
                                           Total Employer : ". $nb_employer .".
                                           Taxe Total : ". $declaration->montant ." Ar ";

        Message::create([
                "id_entreprise"=>$request->id_entreprise,
                "mes"=>$message_admin,
        ]);
        $nb_ms=$declaration->entreprise->nb_message;
        $nbre_message = $nb_ms +1;
        Entreprise::where('id', $declaration->id_entreprise)->update([
            "nb_message"=>$nbre_message,
        ]);

       return redirect(route('acceuille', ["soc"=>$request->id_entreprise]))->with('mesi', $mes);
    }

//total declaration
    public function total_declaration(Declaration $id_decl){

        $id_declar = $id_decl->id;
        $date = $id_decl->date_declaration;
        $declaration = Employer::where('id_decl', $id_declar)->get();
        $i = 0;
        foreach( $declaration as $d){
            $i = $i+1;
        }
        $montant_existe = $id_decl->montant;

        return view('page_logiciel.total_declaration', compact("i", "date", "montant_existe", "id_decl"));
    }







    //allez payer
     public function allez_payer( Declaration $id_decl)
     {
         $declaration = Declaration::where('id', $id_decl->id)->first();
         $nb_mes = $declaration->entreprise->nb_message;

          return view('page_logiciel.payment', compact("declaration", "nb_mes"));
          //return view('page_logiciel.verification_penalite', compact("declaration", "nb_mes"));


     }

    /*


    TATARA BE ATO RAKIZY FA MILA MANDINIKA TSARA ****************
    *************************************************************
    *************************************************************
    **********  CALCULE PENALITE  ****************
    *************************************************************
    *************************************************************
    *************************************************************

     */


     //ajout paiment
     public function ajout_paiement(Request $request){

        /* TATARA BE ATO RAKIZY FA MILA MANDINIKA TSARA *************
        *************************************************************
        *************************************************************
        **********  CALCULE PENALITE  ****************
        *************************************************************
        *************************************************************
        *************************************************************

         */
        //mila veriviena ny penaliter
                //fonction mamadika mois hou date
                    function trans_mensuel($mois){
                        $num_mois = array(
                            'janvier'=> 01,
                            'fevrier'=> 02,
                            'mars'=> 03,
                            'avril'=> 04,
                            'mai'=> 05,
                            'juin'=> 06,
                            'juillet'=> 07,
                            'août'=>  8,
                            'septembre'=> 9,
                            'octobre'=> 10,
                            'novembre'=> 11,
                            'decembre'=> 12
                        ) ;
                        return $num_mois[$mois];
                    }
                    function trans_bimestre($mois){
                        $num_mois = array(
                            'janv-fev'=> 02,
                            'mars-avril'=> 04,
                            'mai-juin'=> 06,
                            'juillet-août'=> 8,
                            'sept-oct'=> 10,
                            'nov-dec'=> 12,

                        ) ;
                        return $num_mois[$mois];
                    }

                    //calcule date d'échéant
                        function calculerDateEcheance($dateDeclaration, $periodicite, $mois, $anne){


                            switch ($periodicite) {
                                case 'mensuel':
                                    $date_suposer_depart = $anne.'-'.trans_mensuel($mois).'-15';
                                    $date_declaration = Carbon::parse($date_suposer_depart);
                                    $dateEcheance = $date_declaration->addMonth()->startOfMonth()->addDays(15);
                                    break;

                                case 'bimestre':
                                    $date_suposer_depart = $anne.'-'.trans_bimestre($mois).'-15';
                                    $date_declaration = Carbon::parse($date_suposer_depart);
                                    $dateEcheance = $date_declaration->addMonth()->startOfMonth()->addDays(15);
                                    break;


                                case 'semestre':
                                    if( $mois == "janv-juin" ){ $dateEcheance = $anne.'-07-15'; }
                                    else{
                                        $anne_succede = $anne + 1;
                                        $dateEcheance = $anne_succede.'-01-15';
                                    }

                                    break;


                            }

                            return $dateEcheance;
                        }

                        // Calcul du nombre de mois de retard
                        function calculeNombreMoisRetard($dateEcheance, $datePaiementEffectif){
                            $VdateEcheance = Carbon::parse($dateEcheance);
                            $VdatePaiementEffectif = Carbon::parse($datePaiementEffectif);


                            $moisRetard = $VdatePaiementEffectif->diffInMonths($VdateEcheance);
                            return $moisRetard;

                        }

                        //calcule penalite
                        function calculerPenaliteRetard($montantAPayer, $moisRetard){
                            $penalite = 0;

                            if ($moisRetard > 0) {

                                    if ($montantAPayer > 200000000) {
                                        //dd("bloc1");
                                    // Pour les contribuables avec un Chiffre d'Affaires supérieur à 200,000,000
                                        $penalite = 3 * $montantAPayer / 100;

                                    } elseif ($montantAPayer >= 50000000 && $montantAPayer <= 200000000) {
                                        //dd("bloc2");
                                    // Pour les contribuables avec un Chiffre d'Affaires entre 50,000,000 et 200,000,000
                                    $penalite = 2 * $montantAPayer / 100;

                                    } else {
                                    // dd("bloc3");
                                    // Pour les contribuables avec un Chiffre d'Affaires inférieur à 50,000,000
                                    $penalite = 1 * $montantAPayer / 100;

                                }

                                    // Calcul de la pénalité pour chaque mois suivant
                                    for ($i = 1; $i < $moisRetard; $i++) {
                                    $penalite += 1 * $montantAPayer / 100;
                                }

                            }
                            return $penalite;


                    }

        $request->validate([
            "id_decl"=>"required",
            "id_entreprise"=>"required",
            "nif"=>"required",
            "date_decl"=>"required",
            "societe"=>"required",
            "date_paiment"=>"required",

            "cb"=>"required",
            "ca"=>"required",
            "nc"=>"required",
            "rib"=>"required",
            "nom_cf"=>"required",
            "rib_beneficiire"=>"required",
            "impot"=>"required",

        ]);

        $impot_correspand = $request->impot; //impot correspondand
        $impot_avec_penalite = 0;
        $valeur_penalite = 0;

        $declaration = Declaration::where('id', $request->id_decl)->first();

        //date Echeant
        $date_echeant = calculerDateEcheance( $request->date_decl, $declaration->periodicite, $declaration->mois, $declaration->anne );
        $d_e = Carbon::parse($date_echeant);
        $d_p = $request->date_paiment;

        $retard = $d_e->greaterThan($d_p); // paiement  normal ve ?

        if($retard){
                        //tsisy retrd



                        $compte = ($request->cb).($request->cb).($request->ca).($request->nc).($request->rib);
                        Payement::create([
                            "id_decl"=>$request->id_decl,
                            "id_entreprise"=>$request->id_entreprise,
                            "date_paiment"=>$request->date_paiment,
                            "code_banque_payeur"=>$compte,
                            "montant"=>$request->impot,

                        ]);

                        $centre = $declaration->entreprise->centre->nom_centre;


                        $mes = "paiment terminer avec succé , vous devez reçevois un message via l'Administration ";

                        $message_admin =   date('d/M/Y')." Votre virement banquaire de ".$request->impot." Ar
                                           a été reussi  auprès du ".$centre." liée a la declaration
                                           du ".$declaration->mois." ".$declaration->anne .".
                                           Raison scocial : ".$declaration->entreprise->nom_societe .".
                                           NIF :". $declaration->entreprise->nif ;

                        Message::create([
                              "id_entreprise"=>$request->id_entreprise,
                              "mes"=>$message_admin,
                        ]);
                        $nb_ms=$declaration->entreprise->nb_message;
                        $nbre_message = $nb_ms +1;
                        Entreprise::where('id', $declaration->id_entreprise)->update([
                            "nb_message"=>$nbre_message,
                        ]);

                        $declaration->update([

                                "etat"=>"payer",
                                "montant"=>$request->impot,


                        ]);

                        return redirect(route('liste_paiment', ["soc"=>$request->id_entreprise]))->with("mes_p", $mes);

        }else{

                        //misy retard
                        $nb_mois_retard = calculeNombreMoisRetard( $date_echeant, $d_p );

                      if($nb_mois_retard == 0){


                            $compte = ($request->cb).($request->cb).($request->ca).($request->nc).($request->rib);
                            Payement::create([
                                "id_decl"=>$request->id_decl,
                                "id_entreprise"=>$request->id_entreprise,
                                "date_paiment"=>$request->date_paiment,
                                "code_banque_payeur"=>$compte,
                                "montant"=>$request->impot,

                            ]);

                            $centre = $declaration->entreprise->centre->nom_centre;


                            $mes = "paiment terminer avec succé , vous devez reçevois un message via l'Administration  et
                            un réçue";

                            $message_admin =   date('d/M/Y')." Votre virement banquaire de ".$request->impot." Ar
                                            a été reussi  auprès du ".$centre." liée a la declaration
                                            du ".$declaration->mois." ".$declaration->anne .".
                                            Raison scocial : ".$declaration->entreprise->nom_societe .".
                                            NIF :". $declaration->entreprise->nif ;

                            Message::create([
                                "id_entreprise"=>$request->id_entreprise,
                                "mes"=>$message_admin,
                            ]);
                            $nb_ms=$declaration->entreprise->nb_message;
                            $nbre_message = $nb_ms +1;
                            Entreprise::where('id', $declaration->id_entreprise)->update([
                                "nb_message"=>$nbre_message,
                            ]);

                            $declaration->update([

                                    "etat"=>"payer",
                                    "montant"=>$request->impot,


                            ]);

                            return redirect(route('liste_paiment', ["soc"=>$request->id_entreprise]))->with("mes_p", $mes);

                      }else{
                        $valeur_penalite = calculerPenaliteRetard($impot_correspand, $nb_mois_retard);

                        $impot_avec_penalite = $impot_correspand + $valeur_penalite;
                        $declaration->update([
                            "montant"=>$impot_avec_penalite,
                        ]);

                        $message_admin =   date('d/M/Y')." Vous avez une pénalité  de
                                            ".$valeur_penalite." Ar à cause d'une
                                            retard de paiement (".$nb_mois_retard." mois) liée
                                            a la declaration du ".$declaration->mois." ".$declaration->anne.".
                                            Raison scocial : ".$declaration->entreprise->nom_societe .".
                                            NIF :". $declaration->entreprise->nif.". ";


                        Message::create([
                            "id_entreprise"=>$declaration->id_entreprise,
                            "mes"=>$message_admin,
                            ]);

                        $nb_ms=$declaration->entreprise->nb_message;
                        $nbre_message = $nb_ms +1;
                        Entreprise::where('id', $declaration->id_entreprise)->update([
                            "nb_message"=>$nbre_message,
                        ]);


                        $declaration = Declaration::where('id', $request->id_decl)->first();
                        $nb_mes=$declaration->entreprise->nb_message;
                        Session::put('d_p', $d_p);
                        $message_penalite = " Votre montant à payer a augmente car vous avez une pénalité de retard , consulter la boite de reception pour voir la detail ";
                        return view('page_logiciel.paiment_apres_penaliter', compact("declaration", "nb_mes","message_penalite"));

                      }
        }



     }

     // ajout paiment si il y aun retard
    public function ajout_paiement_penalite(Request $request){

        $request->validate([
            "id_decl"=>"required",
            "id_entreprise"=>"required",
            "nif"=>"required",
            "date_decl"=>"required",
            "societe"=>"required",
            "date_paiment"=>"required",

            "cb"=>"required",
            "ca"=>"required",
            "nc"=>"required",
            "rib"=>"required",
            "nom_cf"=>"required",
            "rib_beneficiire"=>"required",
            "impot"=>"required",

        ]);


            $declaration = Declaration::where('id', $request->id_decl)->first();
            $compte = ($request->cb).($request->cb).($request->ca).($request->nc).($request->rib);
            Payement::create([
                "id_decl"=>$request->id_decl,
                "id_entreprise"=>$request->id_entreprise,
                "date_paiment"=>$request->date_paiment,
                "code_banque_payeur"=>$compte,
                "montant"=>$request->impot,

            ]);
            $declaration->update([
                "etat"=>"payer",
                "montant"=>$request->impot,
            ]);
            $centre = $declaration->entreprise->centre->nom_centre;


            $mes = "paiment terminer avec succé , vous devez reçevois un message via l'Administration et
             un reçue ";

            $message_admin = date('d/M/Y')." Votre virement banquaire de ".$request->impot." Ar
                            a été reussi  auprès du ".$centre." liée a la declaration
                            du ".$declaration->mois." ".$declaration->anne .".
                            Raison scocial : ".$declaration->entreprise->nom_societe .".
                            NIF :". $declaration->entreprise->nif ;

            Message::create([
                "id_entreprise"=>$request->id_entreprise,
                "mes"=>$message_admin,
            ]);
            $nb_ms=$declaration->entreprise->nb_message;
            $nbre_message = $nb_ms +1;
            Entreprise::where('id', $declaration->id_entreprise)->update([
                "nb_message"=>$nbre_message,
            ]);

            return redirect(route('liste_paiment', ["soc"=>$request->id_entreprise]))->with("mes_p", $mes);

     }


     //gerer pdf
     public function generer_pdf( Declaration $declaration){

          try{
                    $nb = Employer::where('id_decl', $declaration->id)->get();
                    $i = 0;
                    foreach($nb as $n){
                        $i++;
                    }



                    $pdf = PDF::loadView('page_logiciel.pdf_view',compact("declaration","i"));
                    return $pdf->download('accusé'.date('d/m/Y').'.pdf');

           }catch(Exeption $e){
               dd($e);
           }

     }

       //gerer pdf
       public function recue( Payement $id_pai){

       try{


                  $pdf = PDF::loadView('page_logiciel.recu_paiment',compact("id_pai"))->setPaper('a4', 'landscape')->setOptions(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true]);
                  return $pdf->download('recue'.date('d/m/Y').'.pdf');

         }catch(Exeption $e){
             dd($e);
         }
        //return view('page_logiciel.recu_paiment', compact("id_pai"));

   }


     //boite de reception

    public function boite_reception(Entreprise $soc){

         $nb_mes = $soc->nb_message;
         $zero = 0;
         $soc->update([
             "nb_message"=>$zero,
         ]);

         $mes = Message::where('id_entreprise', $soc->id)->paginate(5);
         return view('page_logiciel.message', compact("mes", "nb_mes"));

     }

    public function boite_reception_2(Declaration $id_decl){

        $entre =  Entreprise::where('id', $id_decl->id_entreprise)->first();
        $nb_mes = $entre->nb_message;

        $zero = 0;
        $entre->update([
            "nb_message"=>$zero,
        ]);

        $mes = Message::where('id_entreprise', $id_decl->id_entreprise)->paginate(5);
        return view('page_logiciel.message_penalite', compact("mes", "nb_mes", "id_decl"));

    }

    public function retour_back(Declaration $id_decl){

        $declaration = Declaration::where('id', $id_decl->id)->first();
        $entre =  Entreprise::where('id', $id_decl->id_entreprise)->first();
        $nb_mes = $entre->nb_message;

        $message_penalite = "";


        return view('page_logiciel.paiment_apres_penaliter', compact("declaration", "nb_mes","message_penalite"));

    }

}
