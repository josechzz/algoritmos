<?php
// Función Insertion Sort para ordenar una lista alfabéticamente
function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        // Comparar elementos y moverlos si es necesario
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Lista de nombres de ejemplo
$names = ["Ana", "juan", "Pedro", "maria", "Carlos", "ana"];

// Mostrar la lista antes de ordenar
echo "Lista original: " . implode(", ", $names) . "\n";

// Ordenar la lista alfabéticamente
$sortedNames = insertionSort($names);

// Mostrar la lista después de ordenar
echo "Lista ordenada alfabéticamente: " . implode(", ", $sortedNames) . "\n";
?>
