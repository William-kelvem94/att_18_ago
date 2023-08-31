 <?php
$continuar = true;
while ($continuar) {
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
    echo "Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'sair') {
        $continuar = false;
    }
    echo "\n";
}
echo "Programa encerrado.\n";
?>