<?php

use App\Http\Controllers\fonctionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


*/


//Route pour la page de Ouverture

//page voalohany
Route::get('/', [fonctionController::class, "premier_page" ])->name('page_1') ;
Route::get('/deconnecter', [fonctionController::class, "deconnexion" ])->name('deconnexion') ;
//allez a la documentation
Route::get('/documentation', function () { return view('documentation'); })->name('doc');
//allez a la guide
Route::get('/guide', function () { return view('guide'); })->name('guide');
Route::get('/a_propos', function () { return view('A_propos'); })->name('a_propos');
//pour Authentifier
Route::post('/log_acceuile', [fonctionController::class, "traiter_donner" ])->name('aut');



//Route pour les pages de lociel

//lien l'acceuille
Route::get('/log_acceuile/acceuille/{soc}', [fonctionController::class, "allez_acceuille"])->name('acceuille');
//lien liste des paiment
Route::get('/log_acceuile/liste_paiment/{soc}', [fonctionController::class, "liste_paiment"])->name('liste_paiment');
Route::get('/log_acceuile/recap/{soc}', [fonctionController::class, "recap"])->name('recap');
Route::get('/log_acceuile/detail_du_paiment', function () { return view('page_logiciel.detail_paiment'); })->name('detail_paiment');

//liens messsage
Route::get('/log_acceuile/message/{soc}',  [fonctionController::class, "boite_reception" ])->name('message');
Route::get('/log_acceuile/message_peanliter/{id_decl}',  [fonctionController::class, "boite_reception_2" ])->name('message_penalite');

//liens a la declaration
Route::get('/log_acceuile/log_declaration/{soc}',  [fonctionController::class, "declaration" ])->name('declaration'); 
//allez a la paiment
Route::get('/log_acceuile/log_paiment/{id_decl}', [fonctionController::class, "allez_payer" ])->name('paiment');
Route::post('/log_acceuile/verification_penalite', [fonctionController::class, "verifier_penalite" ])->name('verifier_penalite');


//Route pour l'ajout

//ajout de le declaration
Route::post('/log_acceuile/log_declaration/decl', [fonctionController::class, "ajout_decl_cummun" ])->name('ajout_declaration_commun');
Route::get('/log_acceuile/log_declaration/page_decl_employer/{id_dec}', [fonctionController::class, "page_decl_employer" ])->name('page_declaration_employer');

Route::get('/log_acceuile/log_acceuille/detail_employer/{id_dec}', [fonctionController::class, "detail_employer" ])->name('page_detail_employer');
Route::get('/log_acceuile/log_acceuille/detail_employer_provisoir/{id_dec}', [fonctionController::class, "detail_employer_provisoir" ])->name('page_detail_employer_provisoir');

Route::post('/log_acceuile/log_declaration/ajout_decl_commun', [fonctionController::class, "ajout_decl_employer" ])->name('ajout_declaration_employer');
Route::get('/log_acceuile/log_declaration/total_declaration/{id_decl}', [fonctionController::class, "total_declaration" ])->name('total_decl');
Route::get('/log_acceuile/log_declaration/affichage_declaration_commun/{id_entreprise}', [fonctionController::class, "affiche_decl_commun" ])->name('affiche_decl_commun');
Route::get('/log_acceuile/log_declaration/affichage_declaration_commun/suprimer/{id_dec}', [fonctionController::class, "sup_decl_commun" ])->name('sup_decl_commun');

//pour l'ajout paiment
Route::post('/log_acceuile/log_paiment/traiter_paiment', [fonctionController::class, "ajout_paiement" ])->name('ajout_paiment');
Route::post('/log_acceuile/log_paiment/traiter_paiment_penalite', [fonctionController::class, "ajout_paiement_penalite" ])->name('ajout_paiement_penalite');


//generer un pdf
Route::get('/generer_pdf/{declaration}', [fonctionController::class, "generer_pdf" ])->name('generer_pdf');


Route::get('/retour_back/{id_decl}', [fonctionController::class, "retour_back" ])->name('retour_back');
Route::post('/terminer_declaration', [fonctionController::class, "terminer" ])->name('terminer_declaration');



//Recherche

Route::post('/traitement/rech_acceuille', [fonctionController::class, "rech_acceuille"])->name('recherche');
Route::post('/traitemen/rech_recap', [fonctionController::class, "rech_recapt"])->name('recherche_recap');
Route::post('/traitemen/rech_pay', [fonctionController::class, "rech_pay"])->name('recherche_pay');

Route::get('/log_acceuile/rech_acceuille', function () { return view('page_logiciel.rech_acceuille'); })->name('page_rech');

Route::get('/recue/{id_pai}', [fonctionController::class, "recue"])->name('recue');

















 

