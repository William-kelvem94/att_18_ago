<?php
$continuar = true;
while ($continuar) {
    $velocidadeMaxima = intval(readline("Digite a velocidade máxima permitida (km/h): "));
    $velocidadeMotorista = intval(readline("Digite a velocidade do motorista (km/h): "));
    $excesso = $velocidadeMotorista - $velocidadeMaxima;
    $multa = 0;
    if ($excesso > 0 && $excesso <= 10) {
        $multa = 50;
    } elseif ($excesso >= 11 && $excesso <= 30) {
        $multa = 100;
    } elseif ($excesso > 30) {
        $multa = 200;
    }
    echo "Excesso de velocidade: $excesso km/h\n";
    echo "Multa a ser paga: R$ $multa\n";
    echo "Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'sair') {
        $continuar = false;
    }
    echo "\n";
}
echo "Programa encerrado.\n";
?> 