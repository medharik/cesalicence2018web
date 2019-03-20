<?php 
$produit1=array('libelle'=>'dell s5',
                'cout' =>2800,
                'prix' =>3200,
                'qteStock'=>20    
                    );
$produit2=array('libelle'=>'hp dv 7',
                'cout' =>3800,
                'prix' =>4200,
                'qteStock'=>10    
                    );

$produits=[$produit1,$produit2];//c=0, v=produit1

$stock=array();
for($i=0;$i<10;$i++){
    $p=array('libelle'=>'produit Num '.rand(1,10),
    'cout' =>rand(1,1000),
    'prix' =>rand(300,3000),
    'qteStock'=>rand(0,999) 
        );
   $stock[$i]=$p; 
    
    }

// echo $produit2['libelle'].' coute '.$produit2['prix'].'DHS<br>';
// echo "{$produit2['libelle']} coute  {$produit2['prix']} DHS<br>";
// echo "{$produits[0]['libelle']}<br>";
// echo "{$produits[1]['prix']}<br>";


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
<h2>Produit : <?php  echo rand(0,10);?></h2>
<table  class="table">
    <tr>
        <td>Libellé</td>
        <td>cout</td>
        <td>prix</td>
        <td>quantité en stock</td>
    </tr>

<?php for($i=0;$i<count($produits);$i++){?>
    <tr>
        <td><?php  echo $produits[$i]['libelle'];?>      </td>
        <td><?php  echo $produits[$i]['cout'];?></td>
        <td><?php  echo $produits[$i]['prix'];?></td>
        <td><?php  echo $produits[$i]['qteStock'];?></td>
    </tr>
<?php } ?>




<table  class="table">
    <tr>
    <td>#</td>
        <td>Libellé</td>
        <td>cout</td>
        <td>prix</td>
        <td>quantité en stock</td>
    </tr>
<?php  foreach ($produits as $c => $p) {
 
?>
   <tr>
   <td><?=$c+1?></td>
        <td><?= $p['libelle'] ?></td>
        <td><?= $p['cout']?></td>
        <td><?= $p['prix']?></td>
        <td><?= $p['qteStock']?></td>
    </tr>


<?php } ?>
</table>


<hr>




<table  class="table table-dark">
    <tr>
    <td>#</td>
        <td>Libellé</td>
        <td>cout</td>
        <td>prix</td>
        <td>quantité en stock</td>
    </tr>
<?php  foreach ($produits as $c => $p) {
 
?>
   <tr>
   <td><?=$c+1?></td>
      
      <?php foreach($p as $k=>$v) {?>

      <td><?=$v?></td>
      
      <?php } ?>

    </tr>


<?php } ?>
</table>
</body>
</html>