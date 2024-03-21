<?php
while (true) {
    echo "Digite o valor de M: ";
    $m = (int) readline();

    echo "Digite o valor de N: ";
    $n = (int) readline();

    if ($m <= 0 || $n <= 0) {
        echo "Um dos valores é menor ou igual a zero. Encerrando o programa.\n";
        break;
    }

    $min = $m;
    $max = $n;
    if ($m > $n) {
        $min = $n;
        $max = $m;
    }

    $sum = 0;

    echo "Sequência do menor até o maior: ";
    for ($i = $min; $i <= $max; $i++) {
        echo $i . " ";
        $sum += $i;
    }

    echo "\nSoma dos inteiros consecutivos: $sum\n";
}

?>
