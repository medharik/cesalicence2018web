<?php
include("functions.php");
$stock=get_stock(100);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="alert alert-info  text-center">
Listes des produits
</div>
<table class="table table-dark">
    <tr>
        <td>id</td>
        <td>libelle</td>
        <td>prix</td>
        <td>Etat stock</td>
      
        <td>Gain</td>
       
    </tr>
<?php  foreach($stock as $c=>$p){?>
    <tr class="<?=couleur($p['qte_stock'])?>">
        <td><?php echo $c?></td>
        <td><?php echo $p['libelle']?></td>
        <td><?=$p['prix']?></td>
        <td ><?=etat_stock($p)?></td>
       
        <td><?=gain($p)?></td>
      
    </tr>
<?php }?>
</table>


</div>


    
</body>
</html>