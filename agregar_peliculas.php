<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <center>
            <label for="">Agregar nueva Pélicula</label></br></br>
          <form action="proceso_agregar.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="titulo" placeholder="Título  "></br></br>
            <input type="text" name="genero" placeholder="Género"></br></br>
            <input type="text" name="idioma" placeholder="idioma"></br></br>
            <input type="text" name="pais" placeholder="País  "></br></br>
            <input type="text" name="year" placeholder="Año  "></br></br>
            <input type="text" name="link" placeholder="link  "></br></br>
            <input type="text" name="desc" placeholder="Descripción   "></br></br>
            <label for="">Selecciona portada</label><br>

            <input type="file" name="Imagen"><br><br>
            <input type="submit" value="Aceptar">
        </form>
        </center>
      
    </div>
</body>
</html>