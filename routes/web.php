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





