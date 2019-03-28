<?php 
//on recupere les infos envoyees depuis le form
// $a=$_POST['a'];
// $b=$_POST['b'];
// $operation=$_POST['operation'];
extract($_POST);// on $a , $b et $operation
$type="";
if ($operation=='+') {
$resultat =$a +$b;
$type="somme";
}
if ($operation=='-') {
$resultat =$a - $b;
$type="soustraction";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h2>
 		 	 la <?php echo $type ?> de <?php echo $a; ?> et de <?php echo $b ?> est 
 		 	 <?=$resultat ?>

 	</h2>
 
 </body>
 </html>