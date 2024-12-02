<?php
// Función Bubble Sort para ordenar en forma descendente
function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar elementos si están en el orden incorrecto
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Lista de ejemplo con duplicados y valores negativos
$list = [5, -1, 3, 9, -2, 5, 0];

// Mostrar la lista antes de ordenar
echo "Lista original: " . implode(", ", $list) . "\n";

// Ordenar la lista de forma descendente
$sortedList = bubbleSortDescending($list);

// Mostrar la lista después de ordenar
echo "Lista ordenada (descendente): " . implode(", ", $sortedList) . "\n";
?>
