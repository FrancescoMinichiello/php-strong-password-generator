<?php

function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@%^&*()|/?#.-$_={}:`+[]';
    $password = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $password;
}

function getPasswordLength()
{
    if (isset($_GET["passwordLength"])) {
        $length = $_GET["passwordLength"];
        if ($length > 0 && $length <= 100) {
            return "La password è:" . " " . generatePassword($length);
        } else {
            return "Oops, qualcosa è andato storto. Assicurati di aver inserito solo caratteri numerici o che il campo non sia vuoto.";
        }
    }
}
