<h1>Connexion</h1>
    <form action="" method="POST">
    @csrf
        <div>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" />
        </div>
        <button type="submit">Envoyer</button>
    </form>