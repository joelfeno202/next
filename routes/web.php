<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsControlle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;
use App\Models\next_one;
use Illuminate\Support\Facades\Hash;
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


Route::get('/user', [PostsController::class, 'user'])->name('user');
Route::get('/', [PostsController::class, 'welcome'])->name('accueil');
Route::get('/contact', [PostsController::class, 'contact'])->name('contact');
$val = md5('car');
Route::get($val, [PostsController::class, 'car'])->name('car');

Route::get('/nos', [PostsController::class, 'nos'])->name('nos');
Route::get('/contac', [PostsController::class, 'contac'])->name('contac');
Route::get('/nextone', [PostsController::class, 'nextone'])->name('nextone');
Route::get('/somme', [PostsController::class, 'somme'])->name('somme');
Route::get('/service', [PostsController::class, 'service'])->name('service');
Route::get('/routeur', [PostsController::class, 'routeur'])->name('routeur');
Route::get('/recher', [PostsController::class, 'recher'])->name('recher');
Route::post('/recher', [PostsController::class, 'recherr'])->name('recher');
Route::get('/actual', [PostsController::class, 'actual'])->name('actual');
Route::get('/switch', [PostsController::class, 'switch'])->name('switch');
Route::get("/Point_d_accès_wifi", [PostsController::class, 'point'])->name("Point_d_accès_wifi");
Route::get('/Câblage', [PostsController::class, 'cablagec'])->name('Câblage_Cuivre');
Route::get('/autre', [PostsController::class, 'autre'])->name('autre');
Route::get('/Armoires_et_accessoires', [PostsController::class, 'armoires'])->name('armoires');
Route::get('/achat', [PostsController::class, 'achat'])->name('achat');
Route::get('/ajoutActual', [PostsController::class, 'ajoutActual'])->name('ajoutActual');
Route::get('/card', [PostsController::class, 'card'])->name('card');
$vald = md5('dashboard');
Route::get($vald, function () {
    $adresses = next_one::orderBy('id')->paginate(20);
    return view('dashboard',compact('adresses'));
})->middleware(['auth'])->name($vald);
Route::post('/mail', [mailController::class, 'envoimail'])->name('mail');
require __DIR__ . '/auth.php';

Route::get('/redirect', [PostsControlle::class, 'redirect']);
Route::get('/post', [PostsController::class, 'index']);
Route::get('/logo', [PostsController::class, 'logoAdmin']);
Route::get('/adresse', [PostsController::class, 'adresse'])->name('adresse');
Route::get('/produit', [PostsController::class, 'produit'])->name('produit');
Route::get('/prod', [PostsController::class, 'prod'])->name('prod');
Route::get('/categori', [PostsController::class, 'categori'])->name('categori');

Route::get('/commandes', [PostsController::class, 'commandes'])->name('commandes');
Route::get('/ajout-post', [PostsController::class, 'ajout'])->name('ajout-post');
Route::get('/ajout-produit', [PostsController::class, 'ajout_produit'])->name('ajout-produit');
Route::get('/ajout-logo', [PostsController::class, 'ajout_logog'])->name('ajout-logo');
Route::get('/ajout-adresse', [PostsController::class, 'ajout_adresse'])->name('ajout-adresse');



Route::post('/commande', [PostsController::class, 'commande'])->name('commande');
Route::post('/ajout-post', [PostsController::class, 'ajout_post'])->name('ajout-post');
Route::post('/ajout-produit', [PostsController::class, 'ajout_produits'])->name('ajout-produit');
Route::post('/ajout-actual', [PostsController::class, 'ajout_actual'])->name('ajout-actual');
Route::post('/ajout-logo', [PostsController::class, 'ajout_logop'])->name('ajout-logo');
Route::post('/ajout-adresse', [PostsController::class, 'ajout_adresses'])->name('ajout-adresse');

Route::get('/voir-commande/{id}/{user_id}', [PostsController::class, 'voir_commande'])->name('voir-commande');
Route::get('/voir-post/{id}', [PostsController::class, 'voir_post'])->name('voir-post');
Route::get('/voir-produit/{id}', [PostsController::class, 'voir_produit'])->name('voir-produit');
Route::get('/voir-produit-routeur/{id}', [PostsController::class, 'voir_produit_routeur'])->name('voir-produit-routeur');
Route::get('/voir-logo/{id}', [PostsController::class, 'voir_logo'])->name('voir-logo');
Route::get('/voir-adresse/{id}', [PostsController::class, 'voir_adresse'])->name('voir-adresse');
Route::get('/voir-categori/{id}', [PostsController::class, 'voir_categori'])->name('voir-categori');
Route::get('/voir-actual/{id}', [PostsController::class, 'voir_actual'])->name('voir-actual');

Route::get('/supp-tous', [PostsController::class, 'supp_tous'])->name('supp-tous');
Route::get('/supp-all', [PostsController::class, 'supp_all'])->name('supp-all');
Route::get('/supp-commande/{id}/{user_id}/{created_at}', [PostsController::class, 'supp_commande'])->name('supp-commande');
Route::get('/supp-posts/{id}', [PostsController::class, 'supprimer_post'])->name('supprimer-post');
Route::get('/supp-produit/{id}', [PostsController::class, 'supprimer_produit'])->name('supprimer-produit');
Route::get('/supp-logo/{id}', [PostsController::class, 'supprimer_logo'])->name('supprimer-logo');
Route::get('/supp-adresse/{id}', [PostsController::class, 'supprimer_adresse'])->name('supprimer-adresse');
Route::get('/supp-actual/{id}', [PostsController::class, 'suppactual'])->name('supp-actual');
Route::get('/update-posts/{id}', [PostsController::class, 'update_post'])->name('update-post');
Route::get('/update-produit/{id}', [PostsController::class, 'update_produit'])->name('update-produit');
Route::get('/update-logo/{id}', [PostsController::class, 'update_logo'])->name('update-logo');
Route::get('/update-adresses/{id}', [PostsController::class, 'update_adresse'])->name('update-adresse');
Route::get('/update-actual/{id}', [PostsController::class, 'updateactual'])->name('update-actual');

Route::post('/updat-actual/{id}', [PostsController::class, 'updataactual'])->name('updat-actual');
Route::post('/updat-posts/{id}', [PostsController::class, 'updat_post'])->name('updat-post');
Route::post('/updat-produit/{id}', [PostsController::class, 'updat_produit'])->name('updat-produit');
Route::post('/updat-logo/{id}', [PostsController::class, 'updat_logop'])->name('updat-logo');
Route::post('/updat-adresse/{id}', [PostsController::class, 'updat_adresse'])->name('updat-adresse');
Route::post('/up/{id}', [PostsController::class, 'up'])->name('up');

Route::post('/search-posts', [PostsController::class, 'ser_post'])->name('ser-post');
Route::get('/load_card', [PostsController::class, 'load_card'])->name('load_card');
Route::post('/add_cart', [PostsController::class, 'add_cart'])->name('add_cart');
Route::get('/supp-post', [PostsController::class, 'suppall_post'])->name('supprimertout');
Route::post('/delete_card', [PostsController::class, 'delete_card'])->name('delete_card');
Route::post('/update_total', [PostsController::class, 'update_total'])->name('update_total');

Route::get('/select-post/{id}', [PostsController::class, 'selected_post'])->name('selected');