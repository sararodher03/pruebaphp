<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Calcula tu edad</h1>
    <form action="Tarea07_ejerc3.php" method="GET">
        <label for="nom">Ingresa un nombre</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="anio">Ingresa el año de nacimiento</label>
        <input type="number" id="anio" name="anio">
        <br>
        <input type="submit" value="Edad" name="Edad">
    </form>
    <?php
        if (isset($_GET['Edad'])){

            $Nombre=$_GET['nom'];
            $Año=$_GET['anio'];

            $Edad=2021-$Año;
            echo "<h2> $Nombre usted tiene $Edad años de edad </h2>";
        }
    ?>
</body>
</html>