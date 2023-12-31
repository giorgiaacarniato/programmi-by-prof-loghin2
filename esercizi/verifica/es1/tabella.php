<!DOCTYPE html>
<html>
<head>
    <title>Tabella Generata</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    $testo = $_GET['testo'];
    $numeroA = $_GET['numeroA'];
    $numeroB = $_GET['numeroB'];

    echo "<table>";

    for ($u = 1; $u <= $numeroA; $u++) {
        echo "<tr>";
        for ($m = 1; $m <= $numeroB; $m++) {
            echo "<td>$testo</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>

