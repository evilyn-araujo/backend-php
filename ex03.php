<?php
echo "Digite o valor de X: ";
$valueX = (int) readline();

echo "Digite o valor de Y: ";
$valueY = (int) readline();

echo "Valores entre $x e $y cujo resto da divisão por 5 é igual a 2 ou igual a 3:\n";

for ($i = $valueX + 1; $i < $valueY; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>
