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
    if ($num2 == 0) {
        return "Erro: divisão por zero!";
    }
    return $num1 / $num2;
    }
    
    while(true) {
        $operacao = readline("Escolha qual operação deseja (+, -, *, /): \n");
        if (!in_array($operacao, ['+', '-', '*', '/'])) {
            echo "Operação inválida, tente novamente! \n";
        } else {
        $num1 = (float) readline("Escolha o primeiro número: \n");
        $num2 = (float) readline("Escolha o segundo número: \n");
        if ($operacao == '+') {
            soma($num1, $num2);
            echo 'Seu resultado é '.soma($num1, $num2);
            break;
        } else if ($operacao == '-') {
            subtracao($num1, $num2);
            echo 'Seu resultado é '.subtracao($num1, $num2);
            break;
        } else if ($operacao == '*') {
            multiplicacao($num1, $num2);
            echo 'Seu resultado é: '. multiplicacao($num1, $num2);
            break;
        } else if ($operacao == '/') {
            divisao($num1, $num2);
            echo 'Seu resultado é: '. divisao($num1, $num2);
            break;
        }
    }
    }
    
?>
