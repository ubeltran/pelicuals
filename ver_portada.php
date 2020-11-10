
<?php
    
session_start();

$id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table>
            <thead>
                <tr>
                    <th >Titulo</th>
             
                    <th>Imagen</th>
                    <th colspan="2">Datos</th>
                </tr>
                <tbody>
                    <?php
                        include('conexion.php');

                    
                    

                    $con = mysqli_query($sql, "SELECT titulo,generos.desc_genero As genero,portadas.imagen AS portada,idiomas.desc_idioma AS idioma,paises.desc_pais AS pais,peliculas.desc_pelicula AS resumen  FROM peliculas,generos,idiomas,portadas,paises WHERE
                     peliculas.id_genero=generos.id_genero AND peliculas.id_portada=portadas.id_portada AND
                     peliculas.id_idioma=idiomas.id_idioma AND peliculas.id_pais=paises.id_pais AND peliculas.id_portada=$id");
                    while($row = $con->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $row['titulo']?></td>
                     
                            <td><img height="300px " src="data:$image/jpg;base64,<?php echo base64_encode($row['portada']); ?>"></td>
                            <td><?php echo "Genero: ".$row['genero']." </br>"."País: ".$row['pais']."</br>Resumen: ".$row['resumen']."</br>Idioma: ". $row['idioma']?>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </thead>
        </table>
    </center>
    
</body>
</html>