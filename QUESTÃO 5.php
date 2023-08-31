<?php
$continuar = true;
while ($continuar) {
    $numero = intval(readline("Digite um número qualquer: "));
    if ($numero % 5 === 0) {
        echo "$numero é múltiplo de 5.\n";
    } else {
        echo "$numero não é múltiplo de 5.\n";
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