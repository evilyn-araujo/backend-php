<?php
function ordenarParesImpares($array) {
    $pares = [];
    $impares = [];
    
    foreach ($array as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;
        } else {
            $impares[] = $valor;
        }
    }
    
    sort($pares);
    rsort($impares);
    
    return array_merge($pares, $impares);
}

$valores = [5, 9, 2, 8, 4, 7, 1, 3, 6];

$resultado = ordenarParesImpares($valores);

echo "Valores ordenados conforme o critério especificado: ";
foreach ($resultado as $valor) {
    echo $valor . " ";
}
?>
