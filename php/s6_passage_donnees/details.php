<?php  

$hp = array('id' =>1,
	'libelle' =>'hp dv 8',
	'prix' =>3000,
	'qte_stock' =>90,
	'img'=>'http://lorempixel.com/400/200/technics/1'

 );

$dell = array('id' =>2,
	'libelle' =>'dell latitude',
	'prix' =>4000,
	'qte_stock' =>10,
	'img'=>'http://lorempixel.com/400/200/technics/3'

 );

 // recuprer l'id depuis le lien (methode get)

$id=$_GET['id'];//extract($_GET);
$produit=array();
if($id==1){
$produit=$hp;
}else{
	$produit=$dell;

}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> details du produit de numero : <?php echo  $id ?></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
 	<h3> Details du produit : <?php echo  $produit['libelle'] ?> </h3>
$produit=$hp;

 <div class="card">
    <img src="<?php echo $produit['img'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produit['libelle']    ?></h5>
      <p class="card-text">Le prix est : <?= $produit['prix'] ?> DHS</p>
      <p class="card-text"><small class="text-muted">il en reste : <?php echo  $produit['qte_stock'] ?></small></p>
    </div>
  </div>



 
 </body>
 </html>

