<?php

namespace app\model;

use \app\entity\ReservClient;
use \app\model\Model;


class ModelReservClient extends Model{

    public function __construct() {
        $this->table = "reserv_client";
        parent::__construct($this->table);
    }

    public function deleteReserv($id_client, $id_reservation): int{
        $sql="DELETE FROM ".$this->table." WHERE id_reservation=".$id_reservation." AND id_client=".$id_client;
        $retour=$this->connexion->exec($sql);
        return $retour;
    }
    
public function getInfoReservation(){
    $sql ="SELECT C.nom, C.prenom, R.jour, R.heure, RC.id_client, RC.id_reservation FROM reserv_client RC
    JOIN register C ON C.id = RC.id_client
    JOIN reservation R ON R.id = RC.id_reservation";
    $prepa=$this->connexion->prepare($sql);
    $prepa->execute();
    $data=$prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $data;
}

}