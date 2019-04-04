<?php 


function connecter_db(){

    //DSN <=> connection string 

$lien =new PDO("mysql:host=localhost;dbname=dbcesa2019","root","");
return $lien;

}





function add($volume , $prix, $flux , $matricule ){
//connexion
$lien=connecter_db();

//reparation de la requete
$rp=$lien->prepare("insert into carburant (volume , prix, flux,matricule ) 
values(?,?,?,?)");
//execution 
$rp->execute(array($volume , $prix, $flux , $matricule));

}

function get_all(){
//connexion
$lien=connecter_db();

//reparation de la requete
$rp=$lien->prepare("select * from carburant  order by id desc");
//execution 
$rp->execute();

return $rp->fetchAll();
}

//add(1,22,1,'1-A-290');
// $carburant=get_all();
// var_dump($carburant);
?>