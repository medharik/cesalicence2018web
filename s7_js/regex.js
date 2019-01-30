function valider(){
var np=document.getElementById('np');
var cin=document.querySelector('#cin');
var tel=document.getElementById('tel');
var er=document.getElementById('erreur');
er.innerHTML=""
var mnp=/[a-zA-Z]{2,} [a-zA-Z]{2,}/
var mcin=/^[a-zA-Z]{1,2}[0-9]{6}$/
var mtel=/^05[0-9]{8}$/

if(! mnp.test(np.value)){
//alert('erreur nom prenom')

er.innerHTML +="Erreur NP<br>";
}
if(! mcin.test(cin.value)){
// alert('erreur cin ')

er.innerHTML +="Erreur cin<br>";
}
if(! mtel.test(tel.value)){
// alert('erreur tel')
er.innerHTML +="Erreur tel<br>";

}



}