<?php
$cUsername = "utente";
$cPassword = "passwordSegreta";

$loginAttempts = isset($_GET['attempts']) ? (int)$_GET['attempts'] : 0;
$message = '';

if (isset($_GET["username"]) && isset($_GET["password"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];

    if ($username === $cUsername && $password === $cPassword) {
      
        $welcome = "benvenuto.php?username=$username";
        echo "<script>window.location.replace('$welcomeURL');</script>";
        exit;
    } else {
        $loginAttempts++;
        if ($loginAttempts < 3) {
            $message = "Le credenziali inserite sono errate. I tentativi rimasti sono: " . (3 - $loginAttempts);
        } else {
            $message = "Ci dispiace! Hai superato il numero massimo di tentativi. Accesso bloccato.";
        }
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Registrazione Utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
    <main class="form-signin">
        <h1>Benvenuto utente! Per favore inserisci i dati richiesti </h1>
        <p><?php echo $message; ?></p>
         <div class="form-floating">

         <form method="get" action="">

           <label for="username">Username:</label>
           <input type="text" id="username" name="username" required><br><br>

           <label for="password">Password:</label>
           <input type="password" id="password" name="password" required><br><br>

           <input type="hidden" name="attempts" value="<?php echo $loginAttempts; ?>">
           <input type="submit" value="Accedi">
    </form>
        </div>
    </main>
</body>
</html>