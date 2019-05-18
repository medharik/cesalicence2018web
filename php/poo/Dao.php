<?php 
 class Dao{
    protected static $_db;
    protected  $_fillable;
    protected static   $_table="Dao";
   
    public function __construct()
    {
       
      self::$_db=Utils::db(); 
//var_dump(Utils::db());

    }
    public static function  init(){
    
      static::$_table= static::$_table;
  }
   public  function hydrate(Array $data){
        foreach($data as $c=>$v){
        $method='set'.ucfirst($c);
            if(method_exists($this,$method)){
            $this->$method($v);
            }
        }
    }
public static   function find($id){
  //echo (static::$_table);
  //echo "select * from ".static::$_table." where id=$id";
$rp= Utils::db()->prepare("select * from ".static::$_table." where id=?");
$rp->execute(array((int)$id));
$rp->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,ucfirst(static::$_table)  );
//var_dump($rp->fetch());
return $rp->fetch();
}
public   function count(){

return  Utils::db()->query("select count(*) as c  from ".static::$_table )->fetchColumn();

}
public   function all(){
    $rp= Utils::db()->prepare("select * from ".static::$_table." order by id desc");
     $rp->execute();
return $rp->fetchAll();
}
private static function intero($c){
return '?';
}

public   function save(Fillable $object){
  $data=$object->toArray();
    try{
        //var_dump($data);
$keys=join(array_keys($data),',');
//echo $keys;
$in=join(array_map("Dao::intero",$data),',');
$sql="insert into ".static::$_table." ($keys) values($in)";
//die($sql);
//var_dump();
$r=Utils::db()->prepare($sql);
$r->execute(array_values($data));
return Utils::db()->lastInsertId();    
}catch(PDOException $e){
    $o=new ReflectionClass('Produit');
    
echo "erreur , save {$o->name}".$e->getMessage();
}


}
private static function intero_update($c){
return "$c=?";
}
public   function delete(Produit $produit){
  //  die($produit->id);
Utils::db()->exec("delete from $this->table where id=".(int)$produit->id);
}
public  function update(Produit $object){
    $data=$object->toArray();
    try{
$keys_set='set '.join(array_map('Dao::intero_update',array_keys($data)),',');
$in=join(array_map("Dao::intero_update",$data),',');
$sql="update ".static::$_table."  $keys_set where id=".(int)$object->id;
//die($sql);
$r=Utils::db()->prepare($sql);
$r->execute(array_values($data));
return $this->find($object->id);    
}catch(PDOException $e){
    $o=new ReflectionClass('Produit');
    echo "erreur , upd {$o->name}".$e->getMessage();
}
}




 }


?>