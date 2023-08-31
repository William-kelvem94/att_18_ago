<?php
$continuar = true;
while ($continuar) {
    $numeros = [];
    for ($i = 1; $i <= 20; $i++) {
        $numeros[$i] = intval(readline("Digite o " . $i . "º número inteiro: "));
    }
    $maior = max($numeros);
    $menor = min($numeros);
    echo "O maior valor fornecido é: $maior\n";
    echo "O menor valor fornecido é: $menor\n";
    echo "Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'sair') {
        $continuar = false;
    }
    echo "\n";
}
echo "Programa encerrado.\n";
?>