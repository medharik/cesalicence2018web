<?php 


function connecter_db(){

    //DSN <=> connection string 

$lien =new PDO("mysql:host=localhost;dbname=dbcesa2019","root","");
return $lien;

}





function ajouter( $libelle , $prix , $qtestock  ){
//connexion
$lien=connecter_db();

//reparation de la requete
$rp=$lien->prepare("insert into produits (libelle , prix, qtestock ) values(?,?,?)");
//execution 
$rp->execute(array($libelle, $prix, $qtestock));

}

//ajouter("mac air ",12000,100);



?>