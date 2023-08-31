<?php
function fibonacci($n) {
    $fib = [1, 1]; 
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
$continuar = true;
while ($continuar) {
    $termo = 20;
    $serie = fibonacci($termo);
    echo "Série de Fibonacci até o $termo-ésimo termo:\n";
    echo implode(', ', $serie) . "\n";
    echo "Pressione ENTER para reiniciar o programa ou digite 'sair' para encerrar: ";
    $input = trim(fgets(STDIN));
    if (strtolower($input) === 'sair') {
        $continuar = false;
    }
    echo "\n";
}
echo "Programa encerrado.\n";
?>