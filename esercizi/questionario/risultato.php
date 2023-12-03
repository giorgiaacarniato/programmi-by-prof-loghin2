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
    <div class="result-container">
        <?php
        if(!empty($_GET)){
            $fnome = $_GET["fnome"];
            $lnome = $_GET["lnome"];
            $age = $_GET["age"];
            $sport = $_GET["sport"];
            $color = $_GET["color"];

            echo"<div class='risultato' style='background-color: &color;'>";
            echo "<div class='bg-light p-4' style='background-color: $color;'>";
            echo "<p><strong>Nome:</strong> $fnome </p>";
            echo "<p><strong>Cognome:</strong> $lnome </p>";
            echo "<p><strong>Età:</strong> $age </p>";
            echo "<p><strong>Sport:</strong> $sport </p>";
            echo "</div>";
        }
        else {
            echo"<p> Non abbiamo ricevuto nessun dato. </p>";
        }
        ?>
    </div>
</body>
</html>

