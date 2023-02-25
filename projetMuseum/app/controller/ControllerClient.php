<?php

namespace app\controller;

use \app\model\ModelClient;

class ControllerClient{

    private $model;

    public function __construct() {
        $this->model = new ModelClient();
    }

    public function enregistrerClient($data){

        $data["mdp"] = password_hash($data["mdp"], PASSWORD_BCRYPT);
        $content=$this->model->saveClient($data);
        
        header("Location:index.php");
    }


    public function enregistrerClientFormulaire() {

        include('app/Views/register.php');
    }

    public function loginClient($pseudo, $mdp){
        
        $login = $this->model->existeClient($pseudo, $mdp);

        if($login[0] == 1) {
            session_start();

            $_SESSION["pseudo"]=$_POST["pseudo"];
            $_SESSION["mdp"]=$_POST["mdp"];
            $_SESSION["role"]=$login[1];
            $_SESSION["id"]=$login[2];
            header("Location:index.php");
        }
        else{
            include('app/Views/erreur.php');
            include('app/Views/login.php');
        }

    }  


    public function loginClientFormulaire(){
        include('app/Views/login.php');
    }

    public function deconnexion(){
        session_destroy();
        unset($_SESSION);
        header("Location:index.php");
    }
}
?>