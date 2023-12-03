<!DOCTYPE html>
<html>
<head>
    <title>Risultato Registrazione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-size: 1.2em;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .result-container {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;"> Ecco a te i tuoi dati: </h3><br>

<?php
$color = $_GET["color"];
echo "<div class='risultato' style='background-color: $color;'>";
?>

<table>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Età</th>
    <th>Sport preferito</th>

    <tr><td>
        <?php
        $fnome = $_GET["fnome"];
        echo $fnome;
        ?>
    </td><td>
    <?php
        $lnome = $_GET["lnome"];
        echo $lnome;
        ?>
    </td><td>
    <?php
        $age = $_GET["age"];
        echo $age;
        ?>
    </td><td>
    <?php
        $sport = $_GET["sport"];
        echo $sport;
        ?>
    </td>
</table>


    
</body>
</html>

