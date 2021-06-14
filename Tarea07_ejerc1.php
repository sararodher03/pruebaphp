<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Calcula el total de días que se tendrán en "X" número de semanas</h1>
    <form action="Tarea07_ejerc1.php" method="GET">
        <label for="sem">Ingresa el número de semanas</label>
        <input type="number" id="sem" name="sem">
        <br>
        <input type="submit" value="Dias" name="Dias">
    </form>
    <?php
        if (isset($_GET['Dias'])){

            $dato=$_GET['sem'];

            $Num_Dias = $dato * 7;
            echo "<h2> En $dato semanas son $Num_Dias días </h2>";
        }
    ?>
</body>
</html>