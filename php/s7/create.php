<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    <div class="container">
      <div class="row">
       <div class="col-md-6 shadow mx-auto mt-3 py-2 ">
       <form action="store.php" method="post">
       
       <div class="form-group">
        <label for="libelle">Libelle</label>
        <input type="text" name="libelle" id="liblle" class="form-control" required>
       </div>
   
       <div class="form-group">
        <label for="qteStock">Quantite</label>
        <input type="number" name="qtestock" id="qtestock" class="form-control">
       </div>
      
       <div class="form-group">
        <label for="prix">Prix </label>
        <input type="number" name="prix" id="prix" class="form-control">
       </div>
       <div class="form-group">
     
        <input type="submit" class="btn btn-primary btn-block">
       </div>
       </form>
       </div>
      
      </div>
    
    
    </div>


</body>
</html>