<?php
    include ("conexion.php");
    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $con = mysqli_query($sql,"UPDATE portadas SET nombre='$nombre', imagen='$imagen' WHERE id_portada=$id");
    if($con)
    {
        echo "Si se modifico";
        ///header('location: mostrar.php');
    }
    else
    {
        echo "No se inserto";
    }
?>