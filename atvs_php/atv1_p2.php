<?php
    $num1 = 99;
    $num2 = 1; // descobri que 0 dá erro fatal na conta

    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;
    $resto = $num1 % $num2;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página em PHP</title>
    </head>
    <body>
        <h1>
            <?php
                echo "Página limpada agora, POR#@!"
            ?>
        </h1>
        <P>
            <?php
                echo "$soma<br>";
                echo "$sub<br>";
                echo "$multi<br>";
                echo "$div<br>";
                echo "$resto<br>";
            ?>
        </p>
        <p>
            <?php
                $a = 10;
                $b = 20;
                var_dump ($a == $b); // igual
                echo "<br>";
                var_dump ($a != $b); // diferença
                echo "<br>";
                var_dump ($a > $b); // maior
                echo "<br>";
                var_dump ($a < $b); // menor
                echo "<br>";
                var_dump ($a >= $b); // maior ou igual
                echo "<br>";
                var_dump ($a <= $b); // menor ou igual
                echo "<br>";

                var_dump ($a && $b); // E
                echo "<br>";
                var_dump ($a || $b); // OU
                echo "<br>";
                // assim não dá: var_dump ($a ! $b);
                // esse !(NOT) nega só uma parada, então vou seguir só com uma var.
                var_dump (!$a); // NÃO
            ?>
        </p>
        <p>
            <?php
                $number = -1;
                if ($number > 0 && $number % 2 == 0) {
                    echo "o número tem valor positivo e par!";
                }
                elseif ($number > 0 && $number % 2 != 0) {
                    echo "o número é positivo e ímpar!";
                }
                elseif ($number == 0) { // 0 é par! Cê acredita nisso!?
                    echo "o número não tem valor positivo e par!";
                }
                else {
                    echo "o número não tem o valor positivor, e... não vou comparar números abaixo de zero!";
                }
            ?>
        </P>
    </body>
</html>