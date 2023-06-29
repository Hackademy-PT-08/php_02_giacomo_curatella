<?php
// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

//dichiariamo la variabile che sarà il nostro iteratore
$i = 1;

//fin quando la condizione è vera eseguiamo il ciclo
while($i < 101) {
    //se il numero è multiplo di entrambi
    if($i % 3 === 0 && $i % 5 === 0){
        echo "HACKADEMY \n";
    }
    //altrimenti se il numero è multiplo solo di 3
    else if($i % 3 === 0) {
        echo "PHP \n";
    }
    //altrimenti se il numero è multiplo solo di %
    else if($i % 5 === 0) {
        echo "JAVASCRIPT \n";
    }
    //in tutti gli altri casi stampiamo solo in numero
    else {
        echo $i . "\n";
    }
    //incrementiamo il valore di $i per ogni volta che viene eseguito il ciclo
    $i++;
}

?>