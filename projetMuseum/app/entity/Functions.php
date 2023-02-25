<?php

namespace app\entity;

class Functions{

    private int $id;
    private string $nom_peinture;
    private string $url;
    private string $description;

    
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

    //SET ET GET DE NOM_PEINTURE
    public function setNom_peinture($nom_peinture){
        $this->nom_peinture=$nom_peinture;
    }
 
    public function getNom_peinture(){
        return $this->nom_peinture;
    }

    //SET ET GET DE URL
    public function setUrl($url){
        $this->url=$url;
    }
 
    public function getUrl(){
        return $this->url;
    }

    //SET ET GET DE DESCRIPTION
    public function setDescription($description){
        $this->description=$description;
    }
 
    public function getDescription(){
        return $this->description;
    }

    public function __toString() {
        return $this->id." ".$this->nom_peinture." ".$this->url." ".$this->description;
    }

}

?>