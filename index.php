<?php
include __DIR__ . "/generatePassword.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body">
    <div class="container-fluid d-flex justify-content-center bg-secondary">
        <form class="d-flex py-5" action="index.php" method="GET">
            <div class="row">
                <div class="col-8">
                    <p class="mb-5 fw-semibold text-white">Lunghezza password: </p>
                    <button class="btn btn-lg btn-primary">Invia</button>
                </div>
                <div class="col-4">
                    <input type="number" name="passwordLength" min="1" max="100">
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h2 class="mt-5 fw-semibold"><?= getPasswordLength() ?> </h2>
        </div>
    </div>
    </body>

</html>