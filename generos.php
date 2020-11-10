<?php
    include 'conexion.php';

    $con = mysqli_query($sql,"SELECT * FROM generos");

    while($row = $con->fetch_array()){
          echo   $id = $row['id_genero'];
          echo   $desc = $row['desc_genero'];
        }
?>