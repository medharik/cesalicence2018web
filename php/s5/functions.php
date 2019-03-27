<?php 

function  get_stock($n){
$stock=array();
$produit=array();
for($i=0;$i<$n;$i++){
$produit['libelle']='produit-'.rand(1,100);
$produit['prix']=rand(10,10000);
$produit['cout']=rand(10,9000);
$produit['qte_stock']=rand(0,3);
$stock[]=$produit;
}

return $stock;
}

function etat_stock($produit){

if(is_array($produit) && isset($produit['qte_stock']) && $produit['qte_stock']>0){
    return "Disponible";
}else {
    return "non disponible";
}

}
function gain($produit){
return $produit['prix']-$produit['cout'];
}
function couleur($qte){
if($qte==0) return 'bg-danger';
else return 'bg-success'; 
}
?>