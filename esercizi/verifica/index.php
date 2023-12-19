<!DOCTYPE html>
<html>
<head>
    <title>Registrazione Utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
    <main class="form-signin">
        <h1>Benvenuto utente! Per favore inserisci i dati richiesti </h1>
        <div class="form-floating">
            <form action="tabelladati.php" method="GET">
                <input type="text" class="form-control" id="testo" name="testo" placeholder="testo" required>
                <label for="testo"></label>

                <input type="number" class="form-control" id="numeroA" name="numeroA" placeholder="numeroA" required>
                <label for="numeroA"></label>

                <input type="number" class="form-control" id="numeroB" name="numeroB" placeholder="numeroB" required>
                <label for="numeroB"></label>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrazione</button>
            </form>
        </div>
    </main>
</body>
</html>