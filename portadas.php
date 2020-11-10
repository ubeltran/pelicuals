<?php
    include ("conexion.php");

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $con = mysqli_query($sql,"INSERT INTO portadas (id_portada,nombre,imagen) VALUES(null,'$nombre','$imagen')");
    if($con)
    {
        header('location: mostrar.php');
    }
    else
    {
        echo "No se inserto";
    }
?>