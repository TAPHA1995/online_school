<?php
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});


 Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
     Route::group(['middleware' => ['auth','admin']], function(){
     Route::get('/role_apprenant', 'Admin\DashdoardController@lesaprenants');
     Route::delete('/role_delete/{id}', 'Admin\DashdoardController@registerdelete');
     Route::get('/ajouterAprenant', function(){
        return view('admin.ajouterAprenant');
    });
    Route::get('/affiche_formationdevfullphp', function(){
        return view('admin.Ajoutformdevfullphp');
    });
    
    Route::post('/ajouterAprenant', function(){
  
       $users = new User();
       $users->photo = request('photo');
       $users->nom = request('nom');
       $users->prenom = request('prenom');
       $users->email = request('email');
       $users->telephone = request('telephone');
       $users->formation = request('formation');
       $users->password = Hash::make('password');
       $users->save();
       return redirect('/role_apprenant')->with('status', 'L\'aprenant a étè bien ajouter !');
    });
   
  
});
Route::get('/role_edit/{id}', 'Admin\DashdoardController@aprenantsedit');
Route::put('/role_register_update/{id}', 'Admin\DashdoardController@registersupdate');
Route::get('/aprenants_edit','Admin\DashdoardController@aprenants_editshow');
Route::get('/profil_edit', function(){
    return view('admin.profil_edit');
});
// changer le mot de passe des utilisateurs coté admin et user
Route::post('/role_register_changePassword/{id}', 'Admin\DashdoardController@registerschangePassword');

// affichage de la page de formations pour Développement web fullstack chez admin
Route::get('/role_devwebfull', 'Admin\DashdoardController@role_devwebfullshow');

// affichage de la page des cours pour Développement web fullstackphp chez admin
Route::get('/index_u',[App\Http\Controllers\Admin\DashdoardController::class,'index']);

// Envoi du formulaire d'ajout des cours Développement web fullstackphp chez admin
Route::post('/insert_video',[App\Http\Controllers\Admin\DashdoardController::class,'insert'])->name('insert.file');

// Editer une formation coté admin
Route::get('/role_editdevfull/{id}', 'Admin\DashdoardController@role_editdevfullshow');
Route::post('/devfullphp_update/{id}', 'Admin\DashdoardController@devfullphpsupdate');

// Supprimer un module de la formation devfullphp
Route::delete('/devfullphp_delete/{id}', 'Admin\DashdoardController@devfullphp_supprimer');

// affichage de la page des modules de formations pour Développement web fullstack chez apprenant
Route::get('/role_devwebfullapprenant', 'Admin\DashdoardController@role_devwebfullaprenatshow');

// affichage de la page des cours pour Développement web fullstackphp chez apprenant
Route::get('/index_uapprenant',[App\Http\Controllers\Admin\DashdoardController::class,'indexaprenantshow']);