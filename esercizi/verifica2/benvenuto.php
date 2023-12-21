<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Benvenuto, $username!";
} else {
    header('Location: index.php');
    exit;
}
?>