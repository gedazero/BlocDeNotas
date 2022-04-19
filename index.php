<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <script src="https://kit.fontawesome.com/29ce805e3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Crear Directorio</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
     <div class="container">
         <a href="index.php" class="navbar-brand"><button class="btn btn-primary" onclick="index.php">Bloc de notas</button></a>
         <h1 style="color: white; padding-right: 10%;">BLOC DE NOTAS</h1>
         <a href="crear_directorio_view.php" class="navbar-brand"><button class="btn btn-primary" onclick="index.php">Directorios</button></a>
     </div>

 </nav>
<div class="contenedor">

    <div class="ArText">
  <h3>Crear archivo .TXT</h3>
  <form action="process.php" method="post">
    <textarea rows="10" cols="40" name="comment">
    </textarea>   
    <br> 
<input type="submit" class="btn btn-success custom" value="Descargar">
</form>
    </div>

    </div>
</body>
</html>

