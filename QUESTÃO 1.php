<?php
do {
    $N = intval(readline("Digite um número inteiro N: "));
    $soma = 0;
    for ($i = 1; $i <= $N; $i++) {
        $soma += $i;
    }
    echo "A soma dos números de 1 a $N é: $soma\n";
    $continuar = readline("Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ");
} while (strtolower($continuar) !== 'sair');
echo "Programa encerrado.\n";
?>