<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\formation_devfullphp;
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

// affichage de la page des formations pour Développement web fullstack
    public function role_devwebfullshow()
    {
        return view('admin.formation');
    }
   
// affichage de la page des cours pour Développement web fullstack php chez admin
public function index(Request $request)
{
    $formation_devfullphps = formation_devfullphp::all();
    return view('admin.ajoutdevfullphp')->with('formation_devfullphps' ,$formation_devfullphps);
}
    // affichage du frmulaire d'ajout de la formation Développement web fullstackphp chez admin


// Envoi du frmulaire d'ajout de la formation Développement web fullstackphp chez admin
 public function insert( Request $request)

 {
    
     $request->validate([
        'titre'=>'required',
        'consigne'=>'required',
        'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        'lienvc'=>'required',
        'sujetvm'=>'required',
        'lienvm'=>'required',
        'imagevm'=>'required|max:100',
       
     ]);
     $file = $request->file('video');
     $file->move('upload',$file->getClientOriginalName());
     $file_name=$file->getClientOriginalName();

     $file = $request->file('imagevm');
     $file->move('images',$file->getClientOriginalName());
     $file_name=$file->getClientOriginalName();

     $inserer = new formation_devfullphp();
     $inserer->titre = $request->input('titre');
     $inserer->consigne = $request->input('consigne');
     $inserer->video = $file_name;
     $inserer->lienvc = $request->input('lienvc');
     $inserer->sujetvm = $request->input('sujetvm');
     $inserer->lienvm = $request->input('lienvm');
     $inserer->imagevm = $file_name;
     $inserer->save();
     return redirect('index_u')->with('messageC','L\'ancien mot de passe a étè bien changé !');
       
 }


 public function  role_editdevfullshow(Request $request, $id)
    {
        $formation_devfullphps = formation_devfullphp::findOrFail($id);
        return view('admin.editdevfullphp')->with('formation_devfullphps', $formation_devfullphps);
    }

// Editer le module de la formation devfullphp
    public function devfullphpsupdate( Request $request, $id)
    {

        $file = $request->file('video');
        $file->move('upload',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();
   
        $file = $request->file('imagevm');
        $file->move('images',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();

        $inserer = formation_devfullphp::find($id);
        $inserer->titre = $request->input('titre');
        $inserer->consigne = $request->input('consigne');
        $inserer->video = $file_name;
        $inserer->lienvc = $request->input('lienvc');
        $inserer->sujetvm = $request->input('sujetvm');
        $inserer->lienvm = $request->input('lienvm');
        $inserer->imagevm = $file_name;
        $inserer->save();
     return redirect('index_u')->with('messageC','L\'ancien mot de passe a étè bien changé !');
    }

//    Supprimer un module de la formation devfullphp

public function devfullphp_supprimer($id){
    $formation_devfullphps = formation_devfullphp::findOrFail($id);
    $formation_devfullphps->delete();

    return redirect('index_u')->with('messageC','L\'ancien mot de passe a étè bien changé !');

}

// affichage de la page des formations pour Développement web fullstack
public function role_devwebfullaprenatshow()
{
    return view('admin.formationapprenant');
}


// affichage de la page des cours pour Développement web fullstack php chez apprenant
public function indexaprenantshow(Request $request)
{
    $formation_devfullphps = formation_devfullphp::all();
    return view('admin.ajoutdevfullphpapprenant')->with('formation_devfullphps' ,$formation_devfullphps);
}






 }

