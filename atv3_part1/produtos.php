<?php
    $produtos = ["banana", "maçã", "uva"];
    echo $produtos [0] . "<br>";
?>
<?php
    $produtos = [
        "banana" => ["id" => 1, "valor" => 0.98], "maçã"   => ["id" => 2, "valor" => 1.48], "uva"    => ["id" => 3, "valor" => 1.98]
    ];
    echo "A banana custa: R$ " . $produtos["banana"]["valor"] . "<br>";
    // "$raw" vai receber o índice do vetor, banana, maçã e uva. E "$dados" os "índices" associativos, como id e valor.
    foreach ($produtos as $raw => $dados) {
        echo "ID: " . $dados["id"] . " - ";
        echo "$raw custa: R$ " . number_format($dados["valor"], 2, ',', '.') . "<br>";
    }
    echo "<button>Adicionar Produto ao Carrinho</button>";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style> /* style gerado por IA */
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px; /* espaçamento entre cards */
            }
            .card {
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* sombra suave */
                padding: 20px;
                width: 200px;
                text-align: center;
            }
            button {
                margin-top: 10px;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                background-color: #28a745;
                color: white;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            button:hover {
                background-color: #218838;
            }
        </style>
        <title>Lista de Produtos em PHP</title>
    </head>
    <body>
        <!-- div gerada por IA, TBM! -->
        <div class="container">
            <?php foreach ($produtos as $nome => $dados): ?>
                <div class="card">
                    <h1><?php echo $nome; ?></h1>
                    <p>ID: <?php echo $dados["id"]; ?></p>
                    <p>Preço: R$
                        <?php
                            echo number_format($dados["valor"], 2, ',', '.');
                        ?>
                    </p>
                    <button>Adicionar ao Carrinho</button>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>