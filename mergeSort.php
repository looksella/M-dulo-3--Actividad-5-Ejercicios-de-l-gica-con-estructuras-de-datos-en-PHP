<?php
/*
Problema de Ordenar Lista con Merge Sort */
/* Implementa una función que ordene una lista de palabras alfabéticamente utilizando el algoritmo Merge Sort. 
Muestra la lista antes y después de aplicar el algoritmo. */

function mergeSort(array $palabras): array {
    // Aquí se maneja el caso base de la recursión
    if (count($palabras) <= 1) {
        return $palabras;
    }
    // Se divide el arreglo en dos mitades
    $medio = floor(count($palabras) / 2);
    $izquierda = array_slice($palabras, 0, $medio);
    $derecha   = array_slice($palabras, $medio);
    // Aqui se ordenan recursivamente ambas mitades
    $izquierda = mergeSort($izquierda);
    $derecha   = mergeSort($derecha);    
    return merge($izquierda, $derecha); // Se combinan las mitades ordenadas
}
function merge(array $izquierda, array $derecha): array {
    $resultado = [];
    $i = 0; // índice para recorrer izquierda
    $j = 0; // índice para recorrer derecha
    
    while ($i < count($izquierda) && $j < count($derecha)) { // Se comparan elementos de ambas mitades
        // En esta parte se usa strcasecmp para comparar sin distinguir mayúsculas y minúsculas
        if (strcasecmp($izquierda[$i], $derecha[$j]) <= 0) {
            $resultado[] = $izquierda[$i];
            $i++;
        } else {
            $resultado[] = $derecha[$j];
            $j++;
        }
    }
    // Agregar elementos restantes de la izquierda en caso de que queden
    while ($i < count($izquierda)) {
        $resultado[] = $izquierda[$i];
        $i++;
    }
    // Agregar elementos restantes de la derecha en caso de que queden
    while ($j < count($derecha)) {
        $resultado[] = $derecha[$j];
        $j++;
    }
    return $resultado;
}
$palabrasDesordenadas = ["Manzana", "zorro", "Banana", "árbol", "Casa", "elefante", "Gato", "Banana", "pera"]; // Lista de palabras desordenadas con mezcla de mayúsculas, minúsculas y acentos

// Se mostrara la lista original
echo "=== ALGORITMO MERGE SORT (ORDEN ALFABÉTICO) ===\n";
echo "Lista original:\n";
echo implode(", ", $palabrasDesordenadas) . "\n\n";
$palabrasOrdenadas = mergeSort($palabrasDesordenadas); // Aplicar el algoritmo Merge Sort

// Y se muestra la lista ordenada
echo "Lista ordenada alfabéticamente:\n";
echo implode(", ", $palabrasOrdenadas) . "\n";
?>