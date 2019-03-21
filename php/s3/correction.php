<?php 
$p1=array('image'=>'http://lorempixel.com/300/200/technics/1/',
 'prix'=>3000);
$p2=array('image'=>'http://lorempixel.com/300/200/technics/2/',
 'prix'=>4000);
$p3=array('image'=>'http://lorempixel.com/300/200/technics/3/',
 'prix'=>5000);
$m=array($p1,$p2,$p3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<table class="table table-dark">
    <tr>
        <td>Image</td>
        <td>Prix</td>
    </tr>
<?php  foreach($m as $c => $v) {?>
    <tr>
        <td><img src="<?php echo $v['image']?>" alt=""></td>
        <td><?php echo $v['prix']?></td>
    </tr>
<?php  } ?>

</table>
    
</body>
</html>