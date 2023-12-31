<?php

if (isset($_GET["username"])) {
    $username = $_GET["username"];

    echo "Benvenuto, $username!";
} else {
 
    echo "Errore: Username mancante.";
}
?>

<!DOCTYPE html>
<html>
    <h1> Grarzie per esserti loggato! </h1>

</html>