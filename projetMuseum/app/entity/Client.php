<?php

namespace app\entity;

class Client{

    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $pseudo;
    private string $mdp;
    private int $role;


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

    //SET ET GET DE NOM
    public function setNom($nom){
        $this->nom=$nom;
    }
 
    public function getNom(){
        return $this->nom;
    }

    //SET ET GET DE PRENOM
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
 
    public function getPrenom(){
        return $this->prenom;
    }

    //SET ET GET DE EMAIL
    public function setEmail($email){
        $this->email=$email;
    }
 
    public function getEmail(){
        return $this->email;
    }

    //SET ET GET DE PSEUDO
    public function setPseudo($pseudo){
        $this->pseudo=$pseudo;
    }
 
    public function getPseudo(){
        return $this->pseudo;
    }

    //SET ET GET DE MDP
    public function setMdp($mdp){
        $this->mdp=$mdp;
    }
 
    public function getMdp(){
        return $this->mdp;
    }

    //SET ET GET DU ROLE
    public function setRole($role){
        $this->role=$role;
    }
 
    public function getRole(){
        return $this->role;
    }

    public function __toString() {
        return $this->id." ".$this->nom." ".$this->prenom." ".$this->email." ".$this->pseudo." ".$this->role;
    }


}
?>