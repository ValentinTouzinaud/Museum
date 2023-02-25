<?php

namespace app\entity;

class ReservClient{

    private int $id_client;
    private int $id_reservation;

    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            
            if (method_exists($this, $method))
            {
                $this->$method($value);
                
            }
        }
    }

    //SET ET GET DE ID_CLIENT
    public function setId($id_client){
        $this->id_client=$id_client;
    }
 
    public function getIdclient(){
        return $this->id_client;
    }

    //SET ET GET DE ID_RESERVATION
    public function setIdreservation($id_reservation){
        $this->id_reservation=$id_reservation;
    }
 
    public function getIdreservation(){
        return $this->id_reservation;
    }

    public function __toString() {
        return $this->id_client." ".$this->id_reservation;
    }
}
?>