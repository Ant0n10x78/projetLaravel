<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class inscription extends Controller
{
    public function traitement(){  //Vérification si le compte existe deja 
        $email = request('email');
        $password = request('password');//bcrypt(request('password'))
        if ($email == null or $password ==null){
            return view('Utilisateur\inscription');
        }
        if (Utilisateur::all()->where('email',$email)->first()==null){ //Si null alors l'email n'existe pas
            $user =new Utilisateur();
            $user = email -> $email;
            $user = password -> $password;
            $user -> save();
            return view('Utilisateur\connexion');
        }
        else{
            echo 'Erreur';
            return view('Utilisateur\inscription');
        }
        
    }
}
