<?php

function soma($num1, $num2) {
    return $num1 + $num2;
}

function subtracao($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacao($num1, $num2) {
    return $num1 * $num2;
}

function divisao($num1, $num2) {
    if($num2 == 0) {
        return 'Erro: Divisão por zero!';
    }
    return $num1 / $num2;
}

while(true) {
    $operacao = readline("Escolha a operação desejada (+, -, *, /): \n");
    if(!in_array($operacao, ['+', '-', '*', '/'])) {
        echo "Operação inválida, tente novamente!\n";
        continue;
    }
    
    $num1 = (float) readline("Digite o primeiro número: \n");
    $num2= (float) readline("Digite o segundo número: \n");
    
    switch($operacao) {
        case '+':
            $resultado = soma($num1, $num2);
            break;
        case '-':
            $resultado = subtracao($num1, $num2);
            break;
        case '*':
            $resultado = multiplicacao($num1, $num2);
            break;
        case '/':
            $resultado = divisao($num1, $num2);
            break;
    }
    
    echo 'Seu resultado é '. $resultado;
    break;
}

?>
