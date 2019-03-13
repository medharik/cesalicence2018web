<?php 
//tableau
$t=array(10,-20,30,"test");
$a=array('nom'=>'ali','prenom'=>'alaa','age'=>20,'date'=>date('d/m/Y'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php : les bases</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<ol>
<?php 
foreach ($t as $c => $v) {
   echo "<li>$c est $v</li>";
}
?>
</ol>
    

<?php 
foreach ($a as $c => $v) {
   echo "$c est $v<br>";
}
?>

<h2>Infos de : <?php echo $a['nom'] ?></h2>

<ul>
<?php  foreach($a as $c=>$v) {?>

<li><?php echo  "$c est $v ";?></li>

<?php } ?>
</ul>

<table  class="table table-dark">
  <?php foreach($a as $c=>$v) { ?>
    <tr>
        <td><?= $c ?></td>
        <td><?= $v?></td>
        
    </tr>
  <?php } ?>
   



</table>

</body>
</html>