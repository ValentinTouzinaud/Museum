<section class="login">
    <div class="FormLogin">
        <h1> BIENVENUE </h1>
        <p> Pour vous connecter, veuillez remplir les cases. </p>
        <form action="index.php?action=login" method="post" class="formulaire_l">
            <label for="pseudo"> Pseudo </label>
            <input type="text" id="pseudo" name="pseudo" required>
            <label for="mdp"> Mot de passe </label>
            <input type="password" id="mdp" name="mdp" required>
            <input type="submit" id="envoyer" name="envoyer">
        </form>
    </div>
</section>