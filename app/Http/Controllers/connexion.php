<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class connexion extends Controller
{
    public function traitement(){  //Vérification si le compte existe deja 
        $email = request('email');
        $password = request('password');//bcrypt(request('password'))

        if (Utilisateur::all()->where('email',$email)->first()==null){ //Si null alors l'email n'existe pas
            //dd("pas d'email ".$email);
            //retourne une erreur
            echo 'Mauvais mdp';
            return view('Utilisateur/connexion');
        }
        else{
            if (Utilisateur::all()->where('email',$email)->first()->value('password')==$password){
                return view('dashboard/dashboard');
            }
        }
        
    }
}
