<?php
//include_once 'fillable.php';
class Facture implements Fillable
{
   private $id;
   private $numero;
   private $date;
   public function toArray(){
      $data=[];
      foreach ($this as $k => $v) {
          $data[$k]=$v;
      }
      return $data;
  }
}


?>