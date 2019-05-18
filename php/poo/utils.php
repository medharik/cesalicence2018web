<?php 
 class Utils{
  private const HOST='localhost';   
  private const DB="dbpoo";   
  private const USER="root";   
  private const PWD="";   
  private static $_db=null;
    public static function  db(){
    if(!self::$_db){
      $options=array(
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
      );
        self::$_db=new PDO("mysql:host=".self::HOST.";dbname=".self::DB,self::USER,self::PWD,$options);
    }
    return self::$_db;
  }

 }

?>