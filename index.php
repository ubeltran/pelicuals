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
                <tr>
                    <th colspan="5"><a href="agregar_peliculas.php">Agregar pélicula</a></th>
                </tr>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <!-- <th colspan="2">Operación</th> -->
                </tr>
                <tbody>
                    <?php
                        include('conexion.php');

                        $con = mysqli_query($sql,"SELECT * FROM portadas");
                        while($row = $con->fetch_assoc()){
                    ?>
                        <tr>
                            <!-- <td><?php echo $row['id_portada']?></td> -->
                            <td><?php echo $row['nombre']?></td>
                            <td><img height="100px " onClick="ver_info(<?php echo $row['id_portada']; ?>)" src="data:$image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                            <!-- <td><a href="modificar.php?id=<?php //echo $row['id_portada'];?>">Modificar</a></td>
                            <td><a href="eliminar.php?id=<?php //echo $row['id_portada'];?>">Eliminar</a></td> -->
                        </tr>
                      
                    <?php
                        }
                    ?>
                </tbody>
            </thead>
        </table>
    </center>
    <div id="respuesta">
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    
    <script>
        function ver_info(a){
            let id_port = a;
           //console.log("Hola en la fucnion" + id_port);
            let ruta = "id="+id_port;
            $.ajax({
                url:'proceso_ver.php',
                type: 'POST',
                data:ruta
            }).done(function(res){
                //$('#respuesta').html(res);
                location.href="ver_portada.php"
            });


        }
    </script>
</body>
</html>