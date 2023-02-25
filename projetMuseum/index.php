<?php

session_start();

use app\controller\ControllerFunction;
use app\controller\ControllerClient;
use app\controller\ControllerReservation;
use app\controller\ControllerAdmin;

//autoload
function chargerClasse($classe) {
    $classe=str_replace('\\','/',$classe);
        require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //fin Autoload


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Art </title>
        <link rel="stylesheet" href="inc/style.css">
    </head>
    <body>
        <header>
        <nav class="crumbs">
            <ul>
                <li><a class="button" href="index.php"> Home </a></li>
                <li><a class="button" href="index.php?action=register"> Register </a></li>
                <li><a class="button" href="index.php?action=login"> Login </a></li>
                <li><a class="button" href="index.php?action=admin"> Admin </a></li>
                <li><a class="button" href="index.php?action=reservation"> Reservation </a></li>
                <li><a class="button" href="index.php?action=deconnexion"> Deconnexion </a></li>
            </ul>
        </nav>
        </header>
        <?php 

            $afficher = new ControllerFunction();
            $publier = new ControllerClient();
            $reserv = new ControllerReservation();
            $admin = new ControllerAdmin();

            if(empty($_GET)){
                $afficher->getAll();
            }
            else if(isset($_GET["action"], $_GET["id"]) && $_GET["action"] == "details") {
                $afficher->getOne($_GET["id"]);
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "register"){
                if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["pseudo"]) && isset($_POST["mdp"])) {

                    $publier->enregistrerClient(array(
                                                    "nom"=>$_POST["nom"],
                                                    "prenom"=>$_POST["prenom"],
                                                    "email"=>$_POST["email"],
                                                    "pseudo"=>$_POST["pseudo"],
                                                    "mdp"=>$_POST["mdp"]
                                                ));
                    }
                else{
                    $publier->enregistrerClientFormulaire();
                }
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "login") {
                if(!isset($_SESSION["pseudo"])){
                    if(isset($_POST["pseudo"]) && isset($_POST["mdp"])){
                        $publier->loginClient($_POST["pseudo"], $_POST["mdp"]);
                    }
                    else{
                        $publier->loginClientFormulaire();
                    }
                }
                else{
                    header("Location:index.php");
                }
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "deconnexion"){
                $publier->deconnexion();
            }
            else if(isset($_GET["action"], $_GET["userToDelete"]) && $_GET["action"] == "admin") {
                if(isset($_SESSION["pseudo"], $_SESSION["role"]) && $_SESSION["role"] == 0){
                    $admin->deleteUser($_GET["userToDelete"]);
                }
                else{
                    include('app/Views/pasAdmin.php');
                    $afficher->getAll();
                }
            }
            else if(isset($_GET["action"], $_GET["peintureToDelete"]) && $_GET["action"] == "admin") {
                if(isset($_SESSION["pseudo"], $_SESSION["role"]) && $_SESSION["role"] == 0){
                    $admin->deletePeinture($_GET["peintureToDelete"]);
                }
                else{
                    include('app/Views/pasAdmin.php');
                    $afficher->getAll();
                }
            }
            else if(isset($_GET["action"], $_GET["id_reservation"], $_GET["id_client"]) && $_GET["action"] == "admin") {
                if(isset($_SESSION["pseudo"], $_SESSION["role"]) && $_SESSION["role"] == 0){
                    $admin->deleteReservation($_GET["id_reservation"], $_GET["id_client"]);
                }
                else{
                    include('app/Views/pasAdmin.php');
                    $afficher->getAll();
                }
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "ajouterPeinture") {
                if(isset($_SESSION["pseudo"], $_SESSION["role"]) && $_SESSION["role"] == 0){
                    if(isset($_POST["nom_peinture"]) && isset($_POST["url"]) && isset($_POST["description"])) {

                        $afficher->publierPeinture(array(
                                                        "nom_peinture"=>$_POST["nom_peinture"],
                                                        "url"=>$_POST["url"],
                                                        "description"=>$_POST["description"]
                                                    ));
                        }
                    else{
                        $afficher->publierPeintureFormulaire();
                    }
                }
                else{
                    include('app/Views/pasAdmin.php');
                    $afficher->getAll();
                }
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "admin") {
                if(isset($_SESSION["pseudo"], $_SESSION["role"]) && $_SESSION["role"] == 0){
                    $admin->modeAdmin();
                }
                else{
                    include('app/Views/pasAdmin.php');
                    $afficher->getAll();
                }
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "reservation") {
                if(isset($_SESSION["pseudo"])){
                    $reserv->pageReservation();
                }
                else{
                    $reserv->envoieLogin();
                }
            
            }
            else if(isset($_GET["action"]) && $_GET["action"] == "reserver") {
                if(isset($_SESSION["pseudo"])){
                    if(isset($_GET["id"],$_SESSION["id"])){
                        $reserv->pageReserver($_GET["id"], $_SESSION["id"]);
                    }
                    else{
                        $reserv->pageReservation();
                    }
                }
                else{
                    $reserv->envoieLogin();
                }
            
            }
        ?>
    </body>
</html>