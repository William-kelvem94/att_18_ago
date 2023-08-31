<?php
$continuar = true;
while ($continuar) {
    $num1 = floatval(readline("Digite o primeiro número: "));
    $num2 = floatval(readline("Digite o segundo número: "));
    echo "Escolha a opção:\n";
    echo "1- Soma de 2 números.\n";
    echo "2- Diferença entre 2 números (maior pelo menor).\n";
    echo "3- Produto entre 2 números.\n";
    echo "4- Divisão entre 2 números (o denominador não pode ser zero).\n";
    $opcao = intval(readline("Opção: "));
    switch ($opcao) {
        case 1:
            echo "Resultado: " . ($num1 + $num2) . "\n";
            break;
        case 2:
            echo "Resultado: " . abs($num1 - $num2) . "\n";
            break;
        case 3:
            echo "Resultado: " . ($num1 * $num2) . "\n";
            break;
        case 4:
            if ($num2 != 0) {
                echo "Resultado: " . ($num1 / $num2) . "\n";
            } else {
                echo "Divisão por zero não é permitida.\n";
            }
            break;
        default:
            echo "Opção inválida.\n";
            break;
    }
    echo "Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'sair') {
        $continuar = false;
    }
    echo "\n";
}
echo "Programa encerrado.\n";
?> 