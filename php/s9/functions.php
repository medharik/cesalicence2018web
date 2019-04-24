<?php
require_once ('config.php') ;
function connecter_db () {

    $host =HOST ;
    $db   = DB_NAME;
    $user =USER;
    $pass = PWD;
    $charset = 'utf8';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
         $pdo = new PDO($dsn, $user, $pass, $options);
    
    return $pdo;
        } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

}


function ajouter($libelle , $prix){
   //connecter db
$cnx=connecter_db();
   //preparer la requete
   $stmt=$cnx->prepare("insert into  produit(libelle,prix) values (?,?)");
   //executer
   $stmt->execute([$libelle,$prix]);
}
function all(){
   //connecter db
$cnx=connecter_db();
   //preparer la requete
   $stmt=$cnx->query ("select * from  produit");
 
 return $stmt->fetchAll();
}
//ajouter("hp",9000);

?>