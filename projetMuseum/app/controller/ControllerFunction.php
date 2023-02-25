<?php

namespace app\controller;

use \app\model\ModelFunction;

class ControllerFunction{


    private $model;

    public function __construct() {
        $this->model = new ModelFunction();
    }


    public function getAll(){

        $content=$this->model->findAll();
        include('app/Views/getAllArt.php');
        
    }


    public function getOne($id){
        $content=$this->model->findOne($id);

        include('app/Views/details.php');

    }

    public function publierPeinture($data){
        $content=$this->model->saveArt($data);
        header("Location:index.php");
    }

    public function publierPeintureFormulaire() {
        include('app/Views/ajoutOeuvre.php');
    }

}
?>