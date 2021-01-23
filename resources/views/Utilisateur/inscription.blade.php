<?php use App\Models\Utilisateur;?>

<h1>Inscription</h1>
    <form action="" method="POST">
    @csrf
        <div>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" />
        </div>
        <button type="submit">Envoyer</button>
    </form>