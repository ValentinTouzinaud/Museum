<?php

namespace app\entity;

class Reservation{

    private int $id;
    private string $jour;
    private string $heure;
    private int $nb_place;

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

    //SET ET GET DE ID
    public function setId($id){
        $this->id=$id;
    }
 
    public function getId(){
        return $this->id;
    }

    //SET ET GET DE JOUR
    public function setJour($jour){
        $this->jour=$jour;
    }
 
    public function getJour(){
        return $this->jour;
    }

    //SET ET GET DE HEURE
    public function setHeure($heure){
        $this->heure=$heure;
    }
 
    public function getHeure(){
        return $this->heure;
    }

    //SET ET GET DE NB_PLACE
    public function setNbplace($nb_place){
        $this->nb_place=$nb_place;
    }
 
    public function getNbplace(){
        return $this->nb_place;
    }

    public function __toString() {
        return $this->id." ".$this->jour." ".$this->heure." ".$this->nb_place;
    }


}
?>