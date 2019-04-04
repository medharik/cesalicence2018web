<?php 
include("functions.php");
$carburants=get_all();

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
<h3 class="text-center text-primary">liste des mouvements de carburant</h3>
<table class="table table-striped table-dark">
  <thead class="bg-dark text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">volume</th>
      <th scope="col">prix</th>
      <th scope="col">flux</th>
      <th scope="col">matricule</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($carburants as $c => $ligne) {
 ?>
    <tr>
      <th scope="row"><?=$ligne['id']?></th>
      <td><?=$ligne['volume']?></td>
      <td><?=$ligne['prix']?></td>
      <td><?=$ligne['flux']?></td>
      <td><?=$ligne['matricule']?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
    
</body>
</html>