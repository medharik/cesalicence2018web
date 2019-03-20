<?php 
//generer un tbaleau aleatoire
$stock=array();
for($i=0;$i<100;$i++){
    $p=array('libelle'=>'produit Num '.rand(1,10),
    'cout' =>rand(1,1000),
    'prix' =>rand(300,3000),
    'qteStock'=>rand(0,999) 
        );
   $stock[$i]=$p; 

    }
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

<table class="table table-dark">
    <tr>
        <td>photo</td>
        <td>libelle</td>
        <td>prix</td>
        <td>cout</td>
        <td>qte en stock</td>
    </tr>
    
    <?php foreach($stock as $c=>$p){?>
    <tr>
        <td><img src="http://lorempixel.com/100/100/technics/<?php echo $c+1?>/" alt=""></td>
        <td><?php  echo $p['libelle']?></td>
        <td><?php  echo $p['prix']?></td>
        <td><?php  echo $p['cout']?></td>
        <td><?php  echo $p['qteStock']?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>