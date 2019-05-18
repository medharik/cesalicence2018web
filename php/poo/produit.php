<?php
//require 'fillable.php';
//use A\Fillable;
//namespace A; 

class Produit implements Fillable{
    public static $table="produit";
private $id;
private   $libelle;
private   $prix;
private   $categorie_id;
public function toArray(){
    $data=[];
    foreach ($this as $k => $v) {
        $data[$k]=$v;
    }
    return $data;
}
public function __set($name, $value)
{ //echo "<br> je suis dans set $name | $value<br>";
    if(isset($value) && !empty($value)){

        if($name=="libelle") $this->libelle=(String)$value;
        if($name=="prix") {
         if(is_int($value))
            $this->prix=(int)$value;
        else {
            throw new Exception("Erreur , le prix doit etre numerique");
        }
        }
    }

    
}
public function __construct($libelle="",$prix=20)
{
    $this->libelle=$libelle;
    $this->prix=$prix;
    
}
public function __get($name)
{
    return "--".$this->$name;
}



public function __toString()
{
    return $this->id." cate id : ".$this->categorie_id." Libelle : ". $this->libelle ." coute ".$this->prix."DHS";
}

function __destruct()
{
    //echo "destruction de $this<hr>";
}

public function setPrix($prix){
$this->prix=$prix;
}

public function setLibelle($libelle){
$this->libelle=$libelle;
}
function setCategorie_id($categorie_id){
$this->categorie_id=$categorie_id;
}


function hydrate($data){

   

    foreach ($data as $n => $v) {
        $method='set'.ucfirst($n);
     if(method_exists($this,$method)){
$this->$method($v);
     }
    }
}
}

?>