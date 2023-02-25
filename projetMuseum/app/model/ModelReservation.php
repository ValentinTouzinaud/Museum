<?php

namespace app\model;

use \app\entity\Reservation;
use \app\model\Model;


class ModelReservation extends Model{

    public function __construct() {
        $this->table = "reservation";
        parent::__construct($this->table);
    }


    public function findAll() : array {

        $arrayReservation = $this->find();
        $newTab2 = array();
        foreach ($arrayReservation as $unJour){
            $newTab2[] = new Reservation($unJour);
        }
        return $newTab2;

    }

    public function findDisponible() : array {
        $data=array();
        $data["where"]="nb_place > 0";
        $arrayReservation = $this->find($data);
        $newTab2 = array();
        foreach ($arrayReservation as $unJour){
            $newTab2[] = new Reservation($unJour);
        }
        return $newTab2;
    }

}

?>