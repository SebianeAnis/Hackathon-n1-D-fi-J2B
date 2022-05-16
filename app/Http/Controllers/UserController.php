<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profil;
use App\Models\Facture;
use App\Models\Formation;
use App\Models\Entreprise;
use Illuminate\Http\Request;


class UserController extends Controller{
    
    
    
    
    
    public function index(){
        
        $users=User::orderBy('name')->get();

        $entreprises=Entreprise::orderBy('nom_entreprise')->get();
        $formations=Formation::orderBy('nom_formation')->get();
        $factures=Facture::orderBy('id')->get();

        
        return view('/profils', compact('users', 'entreprises', 'formations', 'factures'));
        
    }
    
    
    
    public function showprofil($id){

        $user=User::findOrFail($id);

    
        return view('profil',compact('user'));

        
    }

    public function showentreprise($id){

    $entreprise=Entreprise::findOrFail($id);
    
    return view('entreprise',compact('entreprise'));

    }
    
    public function showformation($id){
        
        $formation=Formation::findOrFail($id);
        
        return view('formation',compact('formation'));
        
    }
    
    public function showfacture($id){

        $facture=Facture::findOrFail($id);

    
        return view('facture',compact('facture'));

        
    }
        

    public function contact(){
        
        return view('/contact');
        
    }

    public function creerentreprise(){
        
        return view('/creerentreprise');
        
    }



    public function storeentreprise(Request $request){


        $entreprise = new Entreprise();

        $entreprise->nom_entreprise = $request->nom_entreprise;
        $entreprise->telephone = $request->telephone;
        $entreprise->siret = $request->siret;
        $entreprise->adresse = $request->adresse;

        $entreprise -> save();
        
        return back();


    }
    
    
    public function creerformation(){
        
        return view('/creerformation');
        
    }

    



    public function storeformation(Request $request){


        $formation = new Formation();

        $formation->nom_formation = $request->nom_formation;
        $formation->prix = $request->prix;
        $formation->duree = $request->duree;
        $formation->description = $request->description;

        $formation -> save();
        
        return back();


    }
   

    public function creerprofil(){
        
        return view('/creerprofil');
        
    }


    public function storeprofil(Request $request){


        $profil = new Profil();

        $profil->numberphone = $request->numberphone;
        $profil->adress = $request->adress;
        $profil->picture = $request->picture;
        $profil->user_id = $request->user_id;

        $profil -> save();
        
        return back();

    }



    public function adduser(Request $request){


        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user -> save();
        
        return back();

    }


    public function addfacture(Request $request){


        $facture = new Facture();

        $facture->numero_affaire = $request->numero_affaire;
        $facture->numero_stage = $request->numero_stage;
        $facture->numero_bdc = $request->numero_bdc;
        $facture->numero_facture = $request->numero_facture;
        $facture->nom_formation = $request->nom_formation;
        $facture->nom_comedien = $request->nom_comedien;
        $facture->nom_entreprise = $request->nom_entreprise;
        $facture->adresse_entreprise = $request->adresse_entreprise;
        $facture->ville_formation = $request->ville_formation;
        $facture->objet_facture = $request->objet_facture;


        $facture -> save();
        
        return back();

    }

    public function creerfacture(){
        
        return view('/creerfacture');
        
    }


}
