<?php
function nivelLesma($velocidade) {
    if ($velocidade < 10) {
        return 1;
    } elseif ($velocidade < 20) {
        return 2;
    } else {
        return 3;
    }
}

$velocidades = array(5, 12, 22, 8, 15);

$velocidadeMaisRapida = 0;

foreach ($velocidades as $velocidade) {
    if ($velocidade > $velocidadeMaisRapida) {
        $velocidadeMaisRapida = $velocidade;
    }
}

$nivelLesmaMaisRapida = nivelLesma($velocidadeMaisRapida);

echo "O nível de velocidade da lesma mais rápida é: $nivelLesmaMaisRapida";
?>
