<?php
    include ("conexion.php");
    $id = $_REQUEST['id'];
  
    $con = mysqli_query($sql,"DELETE FROM portadas WHERE id_portada='$id'");
    if($con)
    {
        //echo "Si se elimino correctamente";
        header('location: mostrar.php');
    }
    else
    {
        echo "No se elimino";
    }
?>