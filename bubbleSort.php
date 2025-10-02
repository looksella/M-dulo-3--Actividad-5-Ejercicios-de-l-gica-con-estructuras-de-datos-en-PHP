<?php
/*
Problema de Ordenar Lista con Bubble Sort */
/* Escribe un programa que ordene una lista de números de forma descendente utilizando el algoritmo Bubble Sort. 
La lista puede contener duplicados y valores negativos. Asegúrate de manejar estos casos y muestra la lista antes 
y después de aplicar el algoritmo. */

function bubbleSortDescendente(array $numeros): array {
    $totalElementos = count($numeros);    
    for ($i = 0; $i < $totalElementos - 1; $i++) { // Bucle externo: controla el número de pasadas        
        for ($j = 0; $j < $totalElementos - $i - 1; $j++) { // Bucle interno: recorre el arreglo comparando elementos adyacentes

            // Si el elemento actual es menor que el siguiente, se intercambian (orden descendente)
            if ($numeros[$j] < $numeros[$j + 1]) {
                $temporal = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $temporal;
            }
        }
    }
    return $numeros;
}

$listaNumeros = [64, 34, 25, 12, 22, 11, 90, -5, 0, 22, -10, 90, -5]; // Arreglo de prueba con positivos, negativos y duplicados

// Mostrar la lista original
echo "==== ALGORITMO BUBBLE SORT (ORDEN DESCENDENTE) =====\n";
echo "Lista original:\n";
echo implode(", ", $listaNumeros) . "\n\n";

$listaOrdenada = bubbleSortDescendente($listaNumeros); // Ordenar con Bubble Sort en forma descendente

// Mostrar la lista ordenada
echo "Lista ordenada (descendente):\n";
echo implode(", ", $listaOrdenada) . "\n";

?>