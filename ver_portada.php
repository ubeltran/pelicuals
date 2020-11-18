
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <center>
        <table>
            <thead> 
            
            </thead>
                <tbody>
                    <?php
                        include('conexion.php');

                    $con = mysqli_query($sql, "SELECT titulo,generos.desc_genero As genero,portadas.imagen AS portada,idiomas.desc_idioma AS idioma,paises.desc_pais AS pais,peliculas.desc_pelicula AS resumen  FROM peliculas,generos,idiomas,portadas,paises WHERE
                     peliculas.id_genero=generos.id_genero AND peliculas.id_portada=portadas.id_portada AND
                     peliculas.id_idioma=idiomas.id_idioma AND peliculas.id_pais=paises.id_pais AND peliculas.id_portada=$id");
                    while($row = $con->fetch_assoc()){
                    ?>
                        <tr>
                            <td id="imagen"><img id="portada" height="300px " src="data:$image/jpg;base64,<?php echo base64_encode($row['portada']); ?>"></td>
                            <td id="info"><?php echo "Genero: ".$row['genero']." </br>"."País: ".$row['pais']."</br>Resumen: ".$row['resumen']."</br>Idioma: ". $row['idioma']?>
                        </tr>
                        <tr>
                            <td id="titulo" colspan="2"><?php echo $row['titulo']?></td>
                        
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
           
        </table>
    </center>
    
</body>
</html>