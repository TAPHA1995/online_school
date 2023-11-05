<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\formation_devfullphp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class DashdoardController extends Controller
{
    // affichage des apprenants chez admin
    public function lesaprenants(){

        $users = User::all();
        return view('admin.aprenants')->with('users' ,$users);
    }
     // Editer des apprenants chez admin
    public function aprenantsedit(Request $request, $id)
    {
        $users = user::findOrFail($id);
        return view('admin.aprenants_edit')->with('users', $users);
    }
     //affichage de la page d'édite des apprenants chez apprenant
    public function aprenants_editshow(Request $request, $id)
    {
        $users = user::findOrFail($id);
        return view('admin.aprenants_edit')->with('users', $users);
    }
    // fonction pour editer un apprenant chez admin et apprenant
    public function registersupdate( Request $request, $id)
    {
        $file = $request->file('imagevm');
        $file->move('imagesepreuve',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();

        $users = User::find($id);
        $users->photo = $file_name;
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->email = $request->input('email');
        $users->telephone = $request->input('telephone');
        $users->formation = $request->input('formation');
        $users->update();
        return back()->with('messageA',' Modification réussite !');
    }
// fonction pour supprimer un apprenant chez admin
    public function registerdelete($id){
        $users = User::findOrFail($id);
        $users->delete();

        return back()->with('message','L\'aprenant a étè bien supprimer !');
    }
    
    // fonction pour changer le mot de passe chez apprenant et admin
    public function  registerschangePassword(Request $request){
       $request->validate([
        'ancienmotPasse' => 'required',
        'nouveaumotPasse' => 'required',
       ]);
     
       if(!Hash::check($request->ancienmotPasse, auth()->user()->password))
        {
          return back()->with('messageB','L\'ancien mot de passe ne correspond pas');
        }
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
        'video' => 'required',
        'lienvc'=>'required',
        'sujetvm'=>'required',
        'lienvm'=>'required',
        'imagevm'=>'required|max:100',
       
     ]);
    //  $file = $request->file('video');
    //  $file->move('upload',$file->getClientOriginalName());
    //  $file_name=$file->getClientOriginalName();

     $file = $request->file('imagevm');
     $file->move('imagesepreuve',$file->getClientOriginalName());
     $file_name=$file->getClientOriginalName();

     $inserer = new formation_devfullphp();
     $inserer->titre = $request->input('titre');
     $inserer->consigne = $request->input('consigne');
     $inserer->video = $request->input('video');
     $inserer->lienvc = $request->input('lienvc');
     $inserer->sujetvm = $request->input('sujetvm');
     $inserer->lienvm = $request->input('lienvm');
     $inserer->imagevm = $file_name;
     $inserer->save();
     return redirect('index_u')->with('messageC','L\'ancien mot de passe a étè bien changé !');
       
 }

//affichage pour editer le module de la formation devfullphp
 public function  role_editdevfullshow(Request $request, $id)
    {
        $formation_devfullphps = formation_devfullphp::findOrFail($id);
        return view('admin.editdevfullphp')->with('formation_devfullphps', $formation_devfullphps);
    }

// fonction Editer le module de la formation devfullphp
    public function devfullphpsupdate( Request $request, $id)
    {

        // $file = $request->file('video');
        // $file->move('upload',$file->getClientOriginalName());
        // $file_name=$file->getClientOriginalName();
   
        $file = $request->file('imagevm');
        $file->move('imagesepreuve',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();

        $inserer = formation_devfullphp::find($id);
        $inserer->titre = $request->input('titre');
        $inserer->consigne = $request->input('consigne');
        $inserer->video = $request->input('video');
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
    $users = user::all();
    return view('admin.formationapprenant')->with('users', $users);
}

// public function aprenantsedit(Request $request, $id)
// {
//     $users = user::findOrFail($id);
//     return view('admin.aprenants_edit')->with('users', $users);
// }

// affichage de la page des cours pour Développement web fullstack php chez apprenant
public function indexaprenantshow(Request $request)
{
    $formation_devfullphps = formation_devfullphp::all();
    return view('admin.ajoutdevfullphpapprenant')->with('formation_devfullphps' ,$formation_devfullphps);
}

// déconnexion 
public function logoutaction($user, $value=true)
    {
       Session::flash($user);
       Auth:: logout();
       return redirect('login');
    }
 }

