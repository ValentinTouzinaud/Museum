<?php

namespace app\model;

use app\config\Database;
use \PDO;


class Model{

    protected string $table;
    protected \PDO $connexion;


    public function __construct( ){
        $db = new Database();
        $this->connexion=$db->getConnection();
    }


    public function read($id) : array {

        $sql="SELECT * FROM ".$this->table." WHERE id=".$id;

        $retour=$this->connexion->query($sql);
        $content=$retour->fetch(PDO::FETCH_ASSOC);

        return $content;

    }


    public function find($data=array()) : array{
        $conditions="1";
        $fields="*";
        $limit="";
        $order="id";
        $othertable="";
        if(isset($data["conditions"])){$conditions=$data["conditions"];}
        if(isset($data["fields"])){$fields=$data["fields"];}
        if(isset($data["limit"])){$limit="LIMIT ".$data["limit"];}
        if(isset($data["order"])){$order=$data["order"];}
        if(isset($data["othertable"])){$othertable=','.$data["othertable"];}

        $sql="SELECT $fields FROM ". $this->table." ".$othertable." WHERE $conditions ORDER BY $order $limit";
        $prepa=$this->connexion->prepare($sql);
        $prepa->execute();
        $data=$prepa->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($data) : int {
        $sql="UPDATE ".$this->table." SET ";
        foreach ($data as $key => $value) {
            if($key != "id"){
                if(is_numeric($value)){
                    $sql.=''.$key.'='.$value.',';
                }else{
                    $sql.=''.$key.'="'.addslashes($value).'",';
                }
            }
        }
        $sql=substr($sql,0,-1);
        $sql.=" WHERE id=".$data["id"];
        $retour=$this->connexion->exec($sql);
        return $retour;
    }

    
    public function save($data) : int {

            $sql="INSERT INTO ".$this->table."(";
            foreach ($data as $key => $value) {
                unset($data["id"]);
                $sql.="`$key`,";
            }
            //suppression de la virgule
            $sql=substr($sql,0,-1);
            $sql.=" ) VALUES (";
            foreach ($data as $key => $value) {
                if(is_numeric($value))  $sql.=$value.",";
                else
                    $sql.="\"$value\",";
            }
            $sql=substr($sql,0,-1);
            $sql.=" )";

        $retour=$this->connexion->exec($sql);

        return $retour;
    }


    public function delete($id): int{
        $sql="DELETE FROM ".$this->table." WHERE id=".$id;
        $retour=$this->connexion->exec($sql);
        return $retour;
    }

}