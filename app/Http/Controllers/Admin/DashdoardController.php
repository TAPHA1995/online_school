<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


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
    public function aprenants_editshow(Request $request, $id)
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
        return back()->with('messageA',' Modification réussite !');
    }



    public function registerdelete($id){
        $users = User::findOrFail($id);
        $users->delete();

        return back()->with('message','L\'aprenant a étè bien supprimer !');
    }
     
    
    public function  registerschangePassword(Request $request){
       $request->validate([
        'ancienmotPasse' => 'required',
        'nouveaumotPasse' => 'required',
       ]);
     

       if(!Hash::check($request->ancienmotPasse, auth()->user()->password))
        {
          return back()->with('messageB','L\'ancien mot de passe ne correspond pas');
        }
        // dd($request->all());


        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->nouveaumotPasse)
        ]);

        return back()->with('messageC','L\'ancien mot de passe a étè bien changé !');
    }

// affichage de page des formation pour Développement web fullstack
    public function role_devwebfullshow()
    {
        return view('admin.role_devwebfull');
    }
   
   

    
}
