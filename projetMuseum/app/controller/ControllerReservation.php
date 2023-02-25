<?php

namespace app\controller;

use \app\model\ModelReservation;
use \app\model\ModelReservClient;

class ControllerReservation{


    private $model;

    public function __construct() {
        $this->model = new ModelReservation();
    }

    public function pageReservation(){
        $content=$this->model->findDisponible();
        include('app/Views/afficheReserv.php');
    }

    public function envoieLogin(){
        include('app/Views/login.php');
    }

    public function pageReserver($id_reservation, $id_client){
        
        $data=array("id_reservation"=>$id_reservation, "id_client"=>$id_client);
        $model = new ModelReservClient();
        try {
            $retour = $model->save($data);
            $content=$this->model->find(array("conditions"=>"id = ".$id_reservation))[0]["nb_place"];
            $content=$this->model->update(array("id"=>$id_reservation, "nb_place"=>$content-1));
            include('app/Views/confirmationReservation.php');
        }catch (\PDOException $e) {
            include('app/Views/messageErreurReserv.php');
        }
        $this->pageReservation();
    }
    
}
?>