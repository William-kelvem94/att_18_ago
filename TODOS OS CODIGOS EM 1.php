<?php
$continuar = true;

while ($continuar) {
    echo "Escolha uma opção:\n";
    echo "1. Soma de números inteiros de 1 a N.\n";
    echo "2. Série de Fibonacci até o vigésimo termo.\n";
    echo "3. Maior e menor valor de 20 números inteiros.\n";
    echo "4. Tabela de conversão de polegadas para centímetros.\n";
    echo "5. Verificar se um número é múltiplo de 5.\n";
    echo "6. Calcular multa por excesso de velocidade.\n";
    echo "7. Menu para operações com dois números.\n";
    echo "8. Verificar tipo de clima por temperatura em Celsius.\n";
    echo "0. Encerrar o programa.\n";

    $opcaoPrincipal = intval(readline("Opção: "));

    switch ($opcaoPrincipal) {
        case 1:
            $N = intval(readline("Digite um número inteiro N: "));
            $soma = 0;
            for ($i = 1; $i <= $N; $i++) {
                $soma += $i;
            }
            echo "A soma dos números de 1 a $N é: $soma\n";
            break;

        case 2:
            function fibonacci($n) {
                $fib = [1, 1];
                for ($i = 2; $i < $n; $i++) {
                    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                }
                return $fib;
            }
            $termo = 20;
            $serie = fibonacci($termo);
            echo "Série de Fibonacci até o $termo-ésimo termo:\n";
            echo implode(', ', $serie) . "\n";
            break;

        case 3:
            $numeros = [];
            for ($i = 1; $i <= 20; $i++) {
                $numeros[$i] = intval(readline("Digite o " . $i . "º número inteiro: "));
            }
            $maior = max($numeros);
            $menor = min($numeros);
            echo "O maior valor fornecido é: $maior\n";
            echo "O menor valor fornecido é: $menor\n";
            break;

        case 4:
            echo "Tabela de Conversão de Polegadas para Centímetros:\n";
            echo "+-----------+--------------+\n";
            echo "| Polegadas | Centímetros  |\n";
            echo "+-----------+--------------+\n";
            for ($polegadas = 1; $polegadas <= 20; $polegadas++) {
                $centimetros = $polegadas * 2.54;
                printf("| %-9s | %-12s |\n", $polegadas, $centimetros);
            }
            echo "+-----------+--------------+\n";
            break;

        case 5:
            $numero = intval(readline("Digite um número qualquer: "));
            if ($numero % 5 === 0) {
                echo "$numero é múltiplo de 5.\n";
            } else {
                echo "$numero não é múltiplo de 5.\n";
            }
            break;

        case 6:
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
            break;

        case 7:
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
            break;

        case 8:
            $temperatura = floatval(readline("Digite a temperatura em graus Celsius: "));
            if ($temperatura <= 18) {
                echo "Clima: Frio\n";
            } elseif ($temperatura >= 19 && $temperatura <= 23) {
                echo "Clima: Agradável\n";
            } elseif ($temperatura >= 24 && $temperatura <= 35) {
                echo "Clima: Quente\n";
            } else {
                echo "Clima: Muito quente\n";
            }
            break;

        case 0:
            $continuar = false;
            break;

        default:
            echo "Opção inválida.\n";
            break;
    }

    if ($opcaoPrincipal >= 1 && $opcaoPrincipal <= 8) {
        echo "Pressione ENTER para voltar ao menu principal ou digite 'sair' para encerrar: ";
        $input = trim(fgets(STDIN));

        if (strtolower($input) === 'sair') {
            $continuar = false;
        }
    }

    echo "\n";
}

echo "Programa encerrado.\n";
?>