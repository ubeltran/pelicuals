<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexion.php');
        $id = $_REQUEST['id'];
        $con = mysqli_query($sql,"SELECT * FROM portadas WHERE id_portada = '$id'");
        $row = $con->fetch_assoc();
    ?>
    <div>
        <center>
          <form action="proceso_modificar.php?id=<?php echo $row['id_portada'];?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre...  " value="<?php echo $row['nombre']; ?>"></br></br>
            <img src="data:$image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"></br></br>
            <input type="file" name="Imagen"><br><br>
            <input type="submit" value="Aceptar">
        </form>
        </center>
      
    </div>
</body>
</html>