<?php 

spl_autoload_register(function($classe){
include_once $classe.'.php';
});
// $p=new Produit();
// // $c=new Categorie();
// // $cd=new CategorieDao();
// // $c->hydrate(['nom'=>'pc portable']);
// // $cd->save($c);
// $p->hydrate(['categorie_id'=>4,'libelle'=>'dell sat 5','prix'=>9000]);
// $pd=new ProduitDao();
// //$pd->save($p);
// //var_dump($pd->all());
// //echo "nombre de produit : <br>{$pd->find(55)}";
//  $pp= $pd->find(56);
// $pp->libelle="toshiba 56";
// // echo $pd->find(54);
// // echo $pd->count();
//  //$pd->delete($pp);
// echo $pd->update($pp);
//echo ProduitDao::getTable();
//CategorieDao::init();
$cc=CategorieDao::find(4);
echo  ($cc);
//die("ok");
echo "<hr>";
;
 foreach ($cc->produits() as $p) {
  echo  $p->libelle;

 }

 // function load($classe){
//  require $classe.'.php';
// }
// spl_autoload_register('load');
// $p=new Produit("dell","coucou");
// echo $p;
// $p->_libelle="sony";
// try{
// $p->_prix="sony";
// }catch(Exception $e){
// echo ($e->getMessage());
// }
// echo $p;
// echo $p->_libelle;
// echo "<hr>";

// $p->setLibelle("mac air ");
// $p->setPrix(9000.9);
// echo $p->_libelle;
// echo "<hr>";
// $attributs=["libelle"=>'koki vaio',"prix"=>"1090"];
// $pp=new Produit("sony vaio",1200);
// $pp->hydrate($attributs);
// echo $pp;
// $class=ucwords("produit");
// $i=new $class("harik",90);
// echo $i;


// ?>
 <hr>

<?php 
// $t=['libelle'=>'sony v', 'prix'=>9000];
// $d=new ProduitDao();
// $id=$d->save($i);
// //die($id);
// //   function intero($c){
// //     return '?';
// //     }

// //print_r(array_map('intero',array_values($t)));
// //var_dump(get_object_vars(new Produit("t",1)));
// $db=Utils::db();
// //var_dump($x);
?>