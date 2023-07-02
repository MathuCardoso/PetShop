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

    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
        <div class="container-fluid">
            <h1 class="m-0" style="width: 150px;">
                <img src="assets/Logo/Mosquito's Pet Shop.png" style="width: 65%;" alt="">
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lojas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promoção</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2 rounded-0" type="search" placeholder="Digite o produto" aria-label="Pesquisar">
                    <button class="btn btns btn-outline-light rounded-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="prod">

            <div class="imgProd">
                <img src="<?php echo $produtoImagem ?>" alt="Imagem do Produto">
            </div>

            <div class="nameProd">
                <h1>
                    <?php echo $produto_nome; ?>
                </h1>
            </div>

            <div class="descProd">
                <p>
                    <?php echo $produto_descricao; ?>
                </p>
            </div>

            <div class="pricenbuy">

                <div class="priceProd">
                    <p>
                        <?php echo $produto_preco; ?>
                    </p>
                </div>

                <div class="buyProd">
                    <button type="submit">COMPRAR</button>
                </div>

            </div>

        </div>


        <div class="formProd">

            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="email" placeholder="Insira seu e-mail" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Telefone</label>
                    <input type="number" placeholder="(xx) xxxxx-xxxx" class="form-control" id="exampleInputPhone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Número do cartão</label>
                    <input type="number" class="form-control" id="exampleInputPhone">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </form>

        </div>

    </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>