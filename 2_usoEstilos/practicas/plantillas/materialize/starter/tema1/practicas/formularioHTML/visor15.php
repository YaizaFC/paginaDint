<html>

<head>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    //error_reporting(E_ERROR | E_WARNING | E_PARSE); //le dices que no quieres que te muestre los errores de error, de warning y parse

    error_reporting(E_WARNING);

    echo  "<b>Nombre: </b>" . $_POST['nombre'], "<br>";
    echo  "<b>Apellido: </b>" . $_POST['apellidos'], "<br>";
    echo  "<b>Fecha de Nacimiento: </b>" . $_POST['nacimiento'], "<br>";
    echo  "<b>DNI: </b>" . $_POST['dni'], "<br>";
    echo "<b>¿Cuanto es 10+2?: </b>", $_POST['suma1'], "<br>";
    echo "<b>¿De qué color pueden ser las camisetas?: </b><br>";
    echo $_POST['camisetas1'], "<br>";
    echo $_POST['camisetas2'], "<br>";
    echo $_POST['camisetas3'], "<br>";
    echo $_POST['camisetas4'], "<br>";


    ?>
</body>

</html>