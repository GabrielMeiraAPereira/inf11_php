<?php
    $carrinho = [
        "Garfolher multiuso" => [
            "nome" => "Garfolher multiuso", "id" => 1, "quantidade" => 1, "valor_uni" => 10
        ], "Pá" => [
            "nome" => "Pá", "id" => 28, "quantidade" => 10, "valor_uni" => 39.98
        ]
    ];
    // obs: + adicionado junto ao =, ficando += para acumular as contas e depois somar.
    // agora fica o aviso de "Warning" tbm. Mas tá funfando, vai ficar assim tbm!
    $total = 0; // pela a explicação da IA essa var tinha que tá aqui com o valor 0, já que não tem nada no carrinho. Agora o "Warning" se foi.
    foreach ($carrinho as $produto) {
        $total += $produto["quantidade"] * $produto["valor_uni"];
    }
    echo "Valor total do carrinho é de: R$ " . number_format($total, 2, ",", ".");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrinho de Compras</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Subtotal</ht>
            </tr>
            <?php foreach ($carrinho as $produto): ?>
                <tr>"
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <td><?= $produto['valor_uni'] ?></td>
                    <td><?= $produto['quantidade'] * $produto['valor_uni'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php
            echo "<h4>O valor total é de: ".$total."</h4>"
        ?>
    </body>
</html>