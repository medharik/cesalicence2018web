<?php 
 include ("functions.php");
 // extraire les donnees recus depuis le form dans les variables
$volume=$_POST['volume'];
$prix=$_POST['prix'];
$flux=$_POST['flux'];
$matricule=$_POST['matricule'];
add($volume, $prix, $flux, $matricule);
// redirection vers index.php
header("location:index.php");
?>