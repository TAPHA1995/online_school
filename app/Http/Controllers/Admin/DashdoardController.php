<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashdoardController extends Controller
{
    public function lesaprenants(){

        $users = User::all();
        return view('admin.aprenants')->with('users' ,$users);
    }
    public function aprenantsedit(Request $request, $id)
    {
        $users = user::findOrFail($id);
        return view('admin.aprenants_edit')->with('users', $users);
    }
    public function registersupdate( Request $request, $id)
    {
        $users = User::find($id);
        $users->photo = $request->input('photo');
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->email = $request->input('email');
        $users->telephone = $request->input('telephone');
        $users->formation = $request->input('formation');
        $users->update();
        return redirect('role_apprenant')->with('status','L\'aprenant a étè bien modifier !');
    }



    public function registerdelete($id){
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role_apprenant')->with('status','L\'aprenant a étè bien supprimer !');
    }
     



    
}
