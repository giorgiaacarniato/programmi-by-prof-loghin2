<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<!DOCTYPE html>
<html>
<head>
    <title>Registrazione Utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
    <main class="form-signin">
        <h1>Benvenuto utente nel nostro sito, per favore inserisci i tuoi dati!</h1>
        <div class="form-floating">
            <form action="risultato.php" method="GET">
                <input type="text" class="form-control" id="fname" name="fnome" placeholder="Nome" required>
                <label for="fname"></label>

                <input type="text" class="form-control" id="lname" name="lnome" placeholder="Cognome" required>
                <label for="lname"></label>

                <input type="number" class="form-control" id="età" name="age" placeholder="Età" required>
                <label for="età"></label>

                <input type="text" class="form-control" id="sport" name="sport" placeholder="Sport Preferito" required>
                <label for="sport"></label>

                <input type="color" class="form-control" id="colore" name="color" placeholder="Scegli un colore" required>
                <label for="colore"></label>

                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword"></label>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrazione</button>

                <?php
                 $error_message = "";

                      if (isset($_GET['password'])) {
                        $input_password = $_GET['password'];

                      if ($input_password === 'info2023') {
                           header('Location: risultato.php');
                           exit();
                      } else {
                       $error_message = "Password errata. Riprova.";
                      }
}
?>

            </form>
        </div>
    </main>
</body>
</html>
