<!DOCTYPE html>
<html lang="en">
<head>
  <title>PRODUCTOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script> 
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">  
      <a class="navbar-brand" href="/colfondos">Colfondos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="contactenos.php">CONTACTENOS</a>
        </li>        
      </ul>
    </div>    
  </nav>
</div>
<div class="container" id="productos">
<br>
<div class="card">
  <div class="card-header">DATOS GENERALES</div>
  <div class="card-body">
  
 <form class="form-horizontal" id="clienteForm">
  	<div class="form-group row">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="telefono">Teléfono:</label>
      <div class="col-sm-10">          
        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese teléfono">
      </div>
    </div>
    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="registro">Enviar</button>
      </div>
    </div>
  </form>
  </div>
</div>
<footer class="text-white text-center text-lg-start">  
  <div class="text-center p-3">
    © 2020 Copyright.    
  </div>  
</footer>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>