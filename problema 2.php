<?php
// Función Merge Sort para ordenar una lista alfabéticamente
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    // Dividir el array en dos mitades
    $middle = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    // Ordenar las mitades recursivamente
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combinar las mitades ordenadas
    return merge($left, $right);
}

// Función para combinar dos arrays ordenados
function merge($left, $right) {
    $result = [];
    $i = 0; // Índice para el array izquierdo
    $j = 0; // Índice para el array derecho

    // Combinar los elementos de izquierda y derecha en orden
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Añadir los elementos restantes del array izquierdo
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    // Añadir los elementos restantes del array derecho
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Lista de palabras de ejemplo
$words = ["Manzana", "naranja", "Banana", "pera", "uva", "Limón", "manzana"];

// Mostrar la lista antes de ordenar
echo "Lista original: " . implode(", ", $words) . "\n";

// Ordenar la lista alfabéticamente
$sortedWords = mergeSort($words);

// Mostrar la lista después de ordenar
echo "Lista ordenada alfabéticamente: " . implode(", ", $sortedWords) . "\n";
?>
