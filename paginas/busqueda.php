<!-- Hecho por: Adán Ruano -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de todos lo usuarios</title>
</head>
<body>
    <h1 align="left">Ver todos los Registros</h1>
    <hr>
    <?php 
    $conexion = mysqli_connect("localhost", "root","","base1") or
    die ("Problemas con la conexión"); 

    $registros = mysqli_query($conexion, "select codigo, nombre, mail, codigocurso from alumnos") or 
    die ("Problemas en el select:". mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo: ". $reg['codigo']. "<br>";
        echo "Nombre: ". $reg['nombre']. "<br>";
        echo "Mail: ". $reg['mail']. "<br>";
        echo "Curso: ";
        switch ($reg['codigocurso']) {
            case 1:
                echo "PHP";
                break;
            case 2:
                echo "ASP";
                break;
            case 3:
                echo "JSP";
                break;
        }
        echo "<br>";
        echo "<hr>";
    }
    ?>
</body>
</html>