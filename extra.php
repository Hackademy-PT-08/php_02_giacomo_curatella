<?php
// Scrivere un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:
// v < 18: insufficiente
// 18 <= v < 21: sufficiente
// 21 <= v < 24: buono
// 24 <= v < 27: distinto
// 27 <= v <= 29: ottimo
// v = 30: eccellente
// Esempio:
// Input: v = 29
// Output: Ottimo

//dichiariamo la variabile vote
$vote = 29;

if($vote < 18) {
    echo "Insufficiente";
}
else if($vote >= 18 && $vote < 21) {
    echo "Sufficiente";
}
else if($vote >= 21 && $vote < 24) {
    echo "Buono";
}
else if($vote >= 24 && $vote < 27) {
    echo "Distinto";
}
else if ($vote >= 27 && $vote <= 29) {
    echo "Ottimo";
}
else if ($vote === 30) {
    echo "Eccellente";
}
?>