<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Calcula tú ganancia</h1>
    <form action="Tarea07_ejerc2.php" method="GET">
        <label for="cap">Ingresa la cantidad de capital para invertir</label>
        <input type="number" id="cap" name="cap">
        <br>
        <label for="meses">Ingresa la cantidad de meses para tú ganancia</label>
        <input type="number" id="meses" name="meses">
        <br>
        <input type="submit" value="Ganancia" name="Ganancia">
    </form>
    <?php
        if (isset($_GET['Ganancia'])){
            
            $capital = $_GET['cap'];
            $Meses = $_GET['meses'];

            $Ganancia = $capital * 0.02 * $Meses;
            echo "<h2> Su ganancia en $Meses meses es de: $Ganancia </h2>";
        }
    ?>
</body>
</html>