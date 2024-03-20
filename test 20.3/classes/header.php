<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zviratka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Moje Aplikace</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">main page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/animal-list">seznam chovaných zvířat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/wanted-animals">zvířata která chceme</a>
                        </li>
                    </ul>
                    <div class="navbar-text">
                        <?php if (!isset($_SESSION["user_id"])) {
                        echo "<a class='nav-item nav-link' href='/login'>Login</a>";
                        } ?>
                    </div>
                    <div class="navbar-text">
                        <?php if (!isset($_SESSION["user_id"])) {
                        echo "<a class='nav-item nav-link' href='/register'>Register</a>";
                        } ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
