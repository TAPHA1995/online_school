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

Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role_apprenant', 'Admin\DashdoardController@lesaprenants');
     Route::get('/role_edit/{id}', 'Admin\DashdoardController@aprenantsedit');
    //  Route::get('/ajouterAprenant','Admin\DashdoardController@ajouterLesaprenant');
     Route::put('/role_register_update/{id}', 'Admin\DashdoardController@registersupdate');
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




