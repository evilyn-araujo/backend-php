<?php
echo "Digite o valor monetário: ";
$money = (int) readline();

echo "Você digitou: " . $money . "\n";

$note100 = (int) ($money / 100);
$money %= 100;

$note50 = (int) ($money / 50);
$money %= 50;

$note20 = (int) ($money / 20);
$money %= 20;

$note10 = (int) ($money / 10);
$money %= 10;

$note5 = (int) ($money / 5);
$money %= 5;

$note2 = (int) ($money / 2);
$money %= 2;

$note1 = $money;

echo "$note100 nota(s) de R$ 100,00\n";
echo "$note50 nota(s) de R$ 50,00\n";
echo "$note20 nota(s) de R$ 20,00\n";
echo "$note10 nota(s) de R$ 10,00\n";
echo "$note5 nota(s) de R$ 5,00\n";
echo "$note2 nota(s) de R$ 2,00\n";
echo "$note1 nota(s) de R$ 1,00\n";
?>
