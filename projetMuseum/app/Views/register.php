<form action="index.php?action=register" method="post" class="formulaire">
    <label for="nom"> Nom </label>
    <input type="text" id="nom" name="nom" required>
    <label for="prenom"> Prenom </label>
    <input type="text" id="prenom" name="prenom" required>
    <label for="email"> Adresse email </label>
    <input type="email" id="email" name="email" required>
    <label for="pseudo"> Pseudo </label>
    <input type="text" id="pseudo" name="pseudo" required>
    <label for="mdp"> Mot de passe </label>
    <input type="password" id="mdp" name="mdp" required>
    <input type="submit" id="envoyer" name="envoyer">
</form>