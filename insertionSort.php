<?php
/* Problema de Ordenar Lista con Insertion Sort */
/* Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo Insertion Sort. Muestra la lista antes y después de aplicar el algoritmo. */
function insertionSortNombres(array $nombres): array {
    $totalElementos = count($nombres);

 // Recorremos desde el segundo elemento (índice 1) hasta el final
    for ($i = 1; $i < $totalElementos; $i++) {
        $clave = $nombres[$i]; // Nombre actual a insertar
        $j = $i - 1; // Posición del elemento anterior
// Aqui se mueve los elementos del arreglo que son mayores que la clave
        while ($j >= 0 && strcasecmp($nombres[$j], $clave) > 0) {
            $nombres[$j + 1] = $nombres[$j];
            $j--;
        }
 // En esta parte se inserta la clave en su posición correcta
        $nombres[$j + 1] = $clave;
    }
    return $nombres;
}
// Lista de nombres desordenados (con mayúsculas, minúsculas y duplicados)
$nombresDesordenados = ["Yolanda", "isaac", "Sara", "oscar", "Juana", "mateo", "Aaron", "alicia", "Anderson"];
// Se mostrara la lista original
echo "=== ALGORITMO INSERTION SORT (ORDEN ALFABÉTICO) ===\n";
echo "Lista original:\n";
echo implode(", ", $nombresDesordenados) . "\n\n";
// Se aplica el algoritmo Insertion Sort
$nombresOrdenados = insertionSortNombres($nombresDesordenados);
// Y se muestra la lista ordenada
echo "Lista ordenada alfabéticamente:\n";
echo implode(", ", $nombresOrdenados) . "\n";
?>