<?php
    include ("conexion.php");

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $idioma = $_POST['idioma'];
    $pais =   $_POST['pais'];
    $year = $_POST['year'];
    $link = $_POST['link'];
    $desc_p = $_POST['desc'];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $con = mysqli_query($sql,"INSERT INTO portadas (id_portada,nombre,imagen) VALUES(null,'$titulo','$imagen')");
    if($con)
    {
       // 
       $ultima = mysqli_query($sql, "SELECT MAX(id_portada) FROM portadas");
       while($row = $ultima->fetch_assoc())
       {
            $portada= $row['MAX(id_portada)'];
       }
       
       $consulta = mysqli_query($sql,"INSERT INTO peliculas(id_pelicula,titulo,id_genero,id_portada,id_pais,id_idioma,desc_pelicula,id_year)
       VALUE(null,'$titulo',$genero,$portada,$pais,$idioma,'$desc_p',$year)" );
       if($consulta)
       {
            echo "Pélicula insetada con éxito";
            header('location: index.php');
       }
       else{
            echo "Error en query";
       }
       
    }
    else
    {
        echo "No se inserto";
    }
?>