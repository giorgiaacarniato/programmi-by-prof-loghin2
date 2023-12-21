<html>
<head>
    <title>Registrazione Utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
    <main class="form-signin">
        <h1>Benvenuto nel nostro sito, per favore inserisci i tuoi dati!</h1>
        <div class="form-floating">
            <form action="benvenuto.php" method="GET">
                <input type="text" class="form-control" id="fname" name="fnome" placeholder="Nome" required>
                <label for="fname"></label>

                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword"></label>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>

                <?php

                $allowedUsername = 'utente';
                $allowedPassword = 'passwordSegreta';
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST[''];
                
                    if ($username === $allowedUsername && $password === $allowedPassword) {
                        $_SESSION['username'] = $username;
                        header('Location: welcome.php');
                        exit;
                    } else {
                        if (!isset($_SESSION['login_attempts'])) {
                            $_SESSION['login_attempts'] = 1;
                        } else {
                            $_SESSION['login_attempts']++;
                        }
                
                        if ($_SESSION['login_attempts'] >= 3) {
                            echo "Hai superato il numero massimo di tentativi consentiti.";
                            exit;
                        } else {
                            echo "Credenziali errate. Riprova.";
                        }
                    }
                }

                ?>

            </form>
        </div>
    </main>
</body>
</html>
