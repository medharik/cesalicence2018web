function valider() {
 
    //recuperer le champs libelle par son id
lib=    document.getElementById('libelle');
    //on recuperer sa valeur
val=lib.value;    
    //on test l'absence du data 
    if(val==""){
alert("le libelle est obligatoire");
lib.className='bg-danger form-control';
    }else{
      lib.className='form-control';
  
    }

}