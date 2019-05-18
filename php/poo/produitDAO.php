<?php 
// function charger($c){
// require $c.'.php';
// }
// spl_autoload_register('charger');
class ProduitDao  extends Dao
{
protected static $_table ="produit";
//protected $_fillable=['libelle','prix'];
function __construct(){
    parent::__construct();
    self::$_table="produit";
    //var_dump(Parent::$_table);
}
public  static function getTable(){
    return self::$_table;
}

}



?>