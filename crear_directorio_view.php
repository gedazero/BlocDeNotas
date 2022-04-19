<?php include("crear_directorio.php") ?>
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
         <h1 style="color: white; padding-right: 4%;">CREAR DIRECTORIOS</h1>
         <a href="index.php" class="navbar-brand"><button class="btn btn-primary" onclick="index.php">Directorios</button></a>
     </div>

 </nav>
 
<div class="contenedor">   
    <div class="ArDirk">
  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <table>
        <tr>
            <td>Directorio/s:</td>
            <td><input type="text" name="carpeta"></td>
        </tr>
        <tr>
            <td>Guardar en la ruta:</td>
            <td><input type="text" name="ruta"></td>
        </tr>
    </table>
    <input type="hidden" name="directorio">
    <br>
    <input type="submit" class="btn btn-success custom" value="Crear Directorio" onclick="">
</form>
    </div>
    </div>
   
</body>
</html>

