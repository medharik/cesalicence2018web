<?php
//use A\Fillable;
//require 'fillable.php';
class Categorie implements  Fillable
{
    private $id;
    private $nom;
    public function toArray(){
        $data=[];
        foreach ($this as $k => $v) {
            $data[$k]=$v;
        }
        return $data;
    }

    public  function hydrate(Array $data){
        foreach($data as $c=>$v){
        $method='set'.ucfirst($c);
            if(method_exists($this,$method)){
            $this->$method($v);
            }
        }
    }
    function __toString(){
        return $this->id.", ".$this->nom;
    }
    function setNom($nom){
$this->nom=$nom;
    }
    function setId($id){
$this->id=$id;
    }
    
public function produits(){
 $rp= Utils::db()->query("select * from produit where categorie_id=".$this->id);
 $rp->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Produit');
 return $rp->fetchAll();
}

}
