function calculer(){
  var n1=  document.getElementById('n1');
  var n2=  document.querySelector('#n2');
  var rep=  document.getElementById('rep');
  var rep=  document.getElementById('rep');
  var image =document.querySelector('img');

  var produit =n1.value*n2.value;
  if(produit==rep.value){
    //   alert('ok')
image.src="images/ok.gif"

  }else {
    image.src="images/ko.gif"
}

image.className='montrer'

}





function boutonAm(){
n1=document.getElementById('n1');
n2=document.getElementById('n2');
rep=document.getElementById('rep');
btn=document.querySelector('.btn');

if(n1.value.length==0 || n2.value.length==0 ||rep.value==""  ){
btn.className='btn btn-primary col-12 cacher';
}else{
    btn.className='btn btn-primary col-12 montrer';
}
//alert(btn.value)
console.log(btn.className)
//alert(n1.value.length==0 || n2.value.length==0 ||rep.value=="")
}

function aleatoire(){
    n1=document.getElementById('n1');
    n2=document.getElementById('n2');
   n1.value= parseInt(Math.random()*10)
   n2.value=parseInt(Math.random()*10)


}