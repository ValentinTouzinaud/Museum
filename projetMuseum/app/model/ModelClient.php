<?php

namespace app\model;

use \app\entity\Client;
use \app\model\Model;


class ModelClient extends Model{

    public function __construct() {
        $this->table = "register";
        parent::__construct($this->table);
    }


    public function saveClient($data) : int {
        return $this->save($data);
    }

    public function existeClient($pseudo, $mdp){
        $sql_mdp = "SELECT mdp, role, id FROM register WHERE pseudo = '$pseudo'";

        $prepa=$this->connexion->prepare($sql_mdp);
        $prepa->execute();
        $data=$prepa->fetchAll(\PDO::FETCH_ASSOC);

        if(count($data)>0){
            if(password_verify($mdp, $data[0]["mdp"])){
                return [1, $data[0]["role"], $data[0]["id"]];
            }
            else{
                return [0, null, null];
            }
        }
        else{
            return [0, null, null];
        }

    }



}