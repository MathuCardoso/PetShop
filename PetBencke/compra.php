<?php
$produto_nome = $_POST['produto_nome'];
$produto_descricao = $_POST['produto_descricao'];
$produto_preco = $_POST['produto_preco'];
$produtoImagem = $_POST['produto_imagem'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="compraStyle.css">
</head>

<body>

    <div class="container">





        <div class="imgProd">
            <img src="<?php echo $produtoImagem ?>" alt="Imagem do Produto">
        </div>

        
        <h1>
            <?php echo $produto_nome; ?>
        </h1>

        <p>
            <?php echo $produto_descricao; ?>
        </p>

        <p>
            <?php echo $produto_preco; ?>
        </p>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>