<?php

namespace app\controller;

use \app\model\ModelClient;
use \app\model\ModelReservClient;
use \app\model\ModelReservation;
use \app\model\ModelFunction;

class ControllerAdmin{

    private $model;

    public function __construct() {
        $this->model = new ModelClient();
    }

    public function modeAdmin(){
        $values = $this->model->find(array("fields"=>"id, prenom, nom, email", "conditions"=> "role != 0"));
        $modelFunction = new ModelFunction();
        $peintures = $modelFunction->findAll();
        $modelReservation = new ModelReservClient();
        $reservations = $modelReservation->getInfoReservation();
        include('app/Views/modeAdmin.php');
    }

    public function deleteUser($id) {
        $modelReservation = new ModelReservClient();
        $modelReserv = new ModelReservation();
        $reservationClient = $modelReservation->find(array("conditions"=>"id_client = ".$id, "order"=>"id_reservation"));
        foreach($reservationClient as $r){
            $modelReservation->deleteReserv($r["id_client"], $r["id_reservation"]);
            $content=$modelReserv->find(array("conditions"=>"id = ".$r["id_reservation"]))[0]["nb_place"];
            $content=$modelReserv->update(array("id"=>$r["id_reservation"], "nb_place"=>$content+1));
        }
        $this->model->delete($id);
        $this->modeAdmin();
    }

    public function deletePeinture($id) {
        $modelFunction = new ModelFunction();
        $modelFunction->delete($id);
        $this->modeAdmin();
    }

    public function deleteReservation($id_reservation, $id_client){
        $modelReservation = new ModelReservClient();
        $modelReserv = new ModelReservation();
        $retour = $modelReservation->deleteReserv($id_client, $id_reservation);
        if($retour != 0){
            $content=$modelReserv->find(array("conditions"=>"id = ".$id_reservation))[0]["nb_place"];
            $content=$modelReserv->update(array("id"=>$id_reservation, "nb_place"=>$content+1));
        }
        $this->modeAdmin();
    }

}

?>