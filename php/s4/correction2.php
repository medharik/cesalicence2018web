<?php 
$p1 = array('libelle' => 'hp' , 'prix' => 1000 , 'qtestock' => 10);
$p2 = array('libelle' => 'dell' , 'prix' => 2000 , 'qtestock' => 100);
$p3 = array('libelle' => 'sony' , 'prix' => 4000 , 'qtestock' => 0);
$stock=[$p1,$p2,$p3];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
	<tr>
		<td>id</td>
		<td>libelle</td>
		<td>prix</td>
		<td>Qte stock</td>
		<td>etat</td>
	</tr>
	<?php foreach ($stock as $c => $v) {
	?>	
	
	<tr>
		<td><?php echo $c ?></td>
		<td><?php echo $v['libelle']; ?></td>
		<td><?php echo $v['prix']; ?></td>
		<td><?php echo $v['qtestock']; ?></td>
		<?php 
			$etat= 'disponible';
			$color= 'green'; 
			$class='bg-success';
			if ($v['qtestock']==0) {
				$etat= 'non disponible';
			$color= 'red';
			$class='bg-danger';
			}
			else if ($v['qtestock']<=10) {
			 	$etat= 'alerte ';
			$color= 'orange';
			$class='bg-warning';	
			} 
?>
		<td class="<?php echo $class; ?>" style="color: <?php echo $color; ?>"><?php echo $etat ?></td>
		</tr>
	<?php } ?>
</table>
</body>
</html>