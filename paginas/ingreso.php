<!-- Hecho por: Adán Ruano -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario dado de Alta</title>
    <style type="text/css">
        body{
            background-color:#ffffff;
        }
    </style>
</head>
<body>
    <center>
        <h1>Alta de estudiantes</h1>
    </center>  
    <?php 
    $conexion = mysqli_connect("localhost", "root","","base1") or
    die ("Problemas con la conexión");                                              

    mysqli_query($conexion, "insert into alumnos(nombre, mail, codigocurso) values
                ('$_REQUEST[nombre]', '$_REQUEST[mail]', $_REQUEST[codigocurso])")
    or die("Problemas en el select". mysqli_error($conexion));

    mysqli_close($conexion);

    echo "<center>El estudiante fue dado de alta.</center>"
    ?>

    <center>
        <img src="../img/1.jfif">
    </center>
</body>
</html>