<?php 

class CategorieDao extends Dao
{
    protected static $_table="categorie";
public function __construct(){
    parent::__construct();
    parent::$_table="categorie";
}
    // public static function init(){
    //   echo  self::$_table=get_class();

    // }
}
