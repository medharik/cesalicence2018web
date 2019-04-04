<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto shadow">
    <form class="form-horizontal" action="store.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Nouveau produit</legend>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="volume">Volume</label>  
  <div class="col-md-4">
  <input id="volume" name="volume" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="prix">Prix</label>  
  <div class="col-md-4">
  <input id="prix" name="prix" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">en DHS</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="control-label" for="flux">Flux</label>
  <div class="">
  <div class="radio">
    <label for="flux-0">
      <input type="radio" name="flux" id="flux-0" value="1" checked="checked">
      ENTRÉE
    </label>
	</div>
  <div class="radio">
    <label for="flux-1">
      <input type="radio" name="flux" id="flux-1" value="-1">
      SORTIE
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="matricule">Matricule </label>  
  <div class="col-md-4">
  <input id="matricule" name="matricule" type="text" placeholder="NN-AA-NNNNN" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Valider</button>
  </div>
</div>

</fieldset>
</form>

    </div>
    
    </div>
</div>
    
</body>
</html>