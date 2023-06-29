<?php
//traccia:
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

//VARIABLES
$min = 1;
$max = 100;
$my_numbers = [];
$even_numbers = [];

//generiamo 10 numeri casuali da pushare nell'array
for ($i=0; $i < 10; $i++) { 
    $prova = rand($min, $max);
    array_push($my_numbers, $prova);
}
//controlliaimo quale dei numer è pari e lo pushiamo in un array di appoggio
foreach($my_numbers as $number){
    if($number % 2 === 0){
        array_push($even_numbers, $number);
    }
}
//stampiamo i numeri pari trovati
foreach($even_numbers as $even_number) {
    echo "$even_number è stato aggiungo alla lista \n";
}
//cacoliamo la somma di tutti i numeri nell'array
$sum_of_even_numbers = array_sum($even_numbers);
//calcoliamo la media dei numeri nell'array
$mid_of_even_numbers = $sum_of_even_numbers / count($even_numbers);
//stampiamo il risultato in console
echo "La loro somma è: $sum_of_even_numbers e la media è: " . ceil($mid_of_even_numbers);

?>