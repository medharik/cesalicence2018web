<?php 
include "functions.php";
$produits=all();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>liste des produits</h3>

    <table>
      <thead>
      <tr>
            <td>id</td>
            <td>libelle</td>
            <td>prix</td>
        </tr>
      
      </thead>
<tbody>
<?php foreach ($produits as $p) {
   ?>
 <tr>
            <td>
            <?=$p->id?>
            </td>
            <td>      <?=$p->libelle?></td>
            <td>      <?=$p->prix?></td>
</tr>
<?php } ?>
        
</tbody>
       
   
   
    </table>
</body>
</html>