<!--Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php-->

<?php

function getPasswordLength()
{
    $password = intval(isset($_GET["passwordLength"]));
    if ($password > 0) {
    } else {
        echo "Oops, qualcosa è andato storto, assicurati di aver inserito solo caratteri numerici (Si accettano solo numeri)";
    }


    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center">
        <form class="d-flex mt-5" action="index.php" method="GET">
            <div class="row">
                <div class="col-8">
                    <p class="mb-5">Lunghezza password: </p>
                    <button class="btn btn-lg btn-primary">Invia</button>
                </div>
                <div class="col-4">
                    <input type="text" name="passwordLength">
                    <p> <?= getPasswordLength() ?> </p>
                </div>
            </div>
        </form>

    </div>
</body>

</html>