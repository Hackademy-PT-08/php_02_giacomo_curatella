<?php

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'male'],
    ['name' => 'Caterina', 'surname' => 'Perrucci', 'gender' => 'female'],
    ['name' => 'Andrea', 'surname' => 'Visicchio', 'gender' => 'male'],
    ['name' => 'Marco', 'surname' => 'Chierchia', 'gender' => 'male']
   ];

foreach($users as $user) {
    echo "Buongiorno " . ($user["gender"] === "male" ? "Sig. " : "Sig.ra ") . $user["name"] . " " . $user["surname"] . "\n";
}

?>