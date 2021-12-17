<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

$randomNumbers = [];
$maxRandomNumbers = 15;

while (count($randomNumbers) < $maxRandomNumbers) {
    $newNum = rand(1,100);

    if (!in_array($newNum, $maxRandomNumbers)) {
        $randomNumbers[] = $newNum;
    }
}

var_dump($randomNumbers);

?>