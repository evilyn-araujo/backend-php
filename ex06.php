<?php
echo "Digite o valor de X: ";
$x = (int) readline();

echo "Digite o valor de Y: ";
$y = (int) readline();

$soma = 0;

$menor = min($x, $y);
$maior = max($x, $y);

for ($i = $menor + 1; $i < $maior; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

echo "A soma dos números ímpares entre $x e $y é: $soma\n";
?>
