<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Calcula el salario total apartir de las horas trabajadas</h1>
    <form action="Tarea07_ejerc5.php" method="GET">
        <label for="nom">Ingresa el nombre del empleado</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="hr">Ingresa la cantidad de horas trabajadas</label>
        <input type="number" id="hr" name="hr">
        <br>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <?php
        $Salario="";
        $Horas="";
        $nombre="";

        if (isset($_GET['hr'])){

            $Horas=$_GET['hr'];
            $nombre=$_GET['nom'];
            if($Horas < 30) {
                $Salario = $Horas * 120;

                echo "<h2>$nombre trabajaste: $Horas horas <br> Tu salario por hora es de: $120 pesos</h2>";
               }else if($Horas >= 30) {
                $Salario = $Horas * 200;

                echo "<h2>$nombre trabajaste: $Horas horas <br> Tu salario por hora es de: $200 pesos</h2>";
               
            }
        } 
        if (isset($_GET['Enviar'])){
            echo "<h2>Tu salario total es de : $$Salario pesos.</h2>";
        }

        
    ?> 
</body>
</html>