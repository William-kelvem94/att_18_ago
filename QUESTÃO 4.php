<?php
$continuar = true;
while ($continuar) {
    echo "Tabela de Conversão de Polegadas para Centímetros:\n";
    echo "+-----------+--------------+\n";
    echo "| Polegadas | Centímetros  |\n";
    echo "+-----------+--------------+\n";
    for ($polegadas = 1; $polegadas <= 20; $polegadas++) {
        $centimetros = $polegadas * 2.54;
        printf("| %-9s | %-12s |\n", $polegadas, $centimetros);
    }
    echo "+-----------+--------------+\n";
    echo "Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'sair') {
        $continuar = false;
    }
    echo "\n";
}
echo "Programa encerrado.\n";
?> 