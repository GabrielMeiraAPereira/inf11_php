<?php
    $meuNome = "Gabriel M.";
    echo "Olá, $meuNome! Bem-vindo ao PHP";

    $Nome = "Pedro";
    $Idade = 229;
    $Altura = 1.97;

    const PI = 3.14159;
    const NOME_DO_PROF = "Tião das Capivara";
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
                echo "Vamo q Vamo!";
            ?>
        </h1>

        <p>
            <?php
                echo "blá blá blá blá blá blá blá blá blá blá blá blá blá blá blá blá";
            ?>
        </p>

        <p>
            <?php
                echo "Nome: $Nome<br>Altura: $Altura<br>Idade: $Idade";
            ?>
        </p>

        <p>
            <?php
                echo PI;
                echo "<br>"; // tentei usar o <br> entre os dois, tentei também com...
                echo NOME_DO_PROF; // algo escrito entre aspas dupla, mas funfo.
            ?>
        </p>
    </body>
</html>