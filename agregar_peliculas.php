<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="agregar">
            <label for="">Agregar nueva Pélicula</label></br></br>
            <form  action="proceso_agregar.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="titulo" placeholder="Título  "></br></br>
                <label>Género</label>
                <select class="col-sm-6 form-control" name="genero" id="">
                <?php 
                    $consulta="SELECT * FROM generos" ;
                    $res=mysqli_query($sql,$consulta);
                    while($row=mysqli_fetch_array($res)){
                    $id=$row['id_genero'];
                    $genero=$row['desc_genero'];
                ?>
                <option id="" name="genero" value="<?php echo $id; ?>"><?php echo $genero; ?></option>
                <?php	
                }
                ?>
                </select></br></br>

                <label>Idioma</label>
                <select class="col-sm-6 form-control" name="idioma" id="">
                <?php 
                    $consulta="SELECT * FROM idiomas" ;
                    $res=mysqli_query($sql,$consulta);
                    while($row=mysqli_fetch_array($res)){
                    $id=$row['id_idioma'];
                    $idioma=$row['desc_idioma'];
                ?>
                <option id="" name="idioma" value="<?php echo $id; ?>"><?php echo $idioma; ?></option>
                <?php	
                }
                ?>
                </select></br></br>
                <div class>
                    <label>País</label>
                    <select class="col-sm-6 form-control" name="pais" id="">
                    <?php 
                        $consulta="SELECT * FROM paises" ;
                        $res=mysqli_query($sql,$consulta);
                        while($row=mysqli_fetch_array($res)){
                            $id=$row['id_pais'];
                            $pais=$row['desc_pais'];
                            ?>
                    <option id="" name="pais" value="<?php echo $id; ?>"><?php echo $pais; ?></option>
                    <?php	
                    }
                    ?>
                    </select></br></br>
                </div>

                <label>Año</label>
                <select class="col-sm-6 form-control" name="year" id="">
                <?php 
                    $consulta="SELECT * FROM years" ;
                    $res=mysqli_query($sql,$consulta);
                    while($row=mysqli_fetch_array($res)){
                    $id=$row['id_years'];
                    $year=$row['year'];
                ?>
                <option id="" name="year" value="<?php echo $id; ?>"><?php echo $year; ?></option>
                <?php	
                }
                ?>
                </select></br></br>
                <input type="text" name="link" placeholder="link  "></br></br>
                <input type="text" name="desc" placeholder="Descripción   "></br></br>
                <label for="">Selecciona portada</label><br>

                <input type="file" name="Imagen"><br><br>
                <input type="submit" value="Aceptar">
            </form>
        </div>
    </div>
</body>
</html>