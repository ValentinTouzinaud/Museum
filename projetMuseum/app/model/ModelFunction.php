<?php

namespace app\model;

use \app\entity\Functions;
use \app\model\Model;


class ModelFunction extends Model{

    public function __construct() {
        $this->table = "artiste";
        parent::__construct($this->table);
    }


    public function findAll() : array {

        $arrayArt = $this->find();
        $newTab = array();
        foreach ($arrayArt as $unTableau){
            $newTab[] = new Functions($unTableau);
        }
        return $newTab;

    }

    public function findOne($id) : Functions{
        $data=$this->read($id);

        return new Functions($data);
    }

    public function saveArt($data) : int {
        return $this->save($data);

    }

    

}