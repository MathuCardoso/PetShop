<?php
$produto_nome = $_GET['produto_nome'];
$produto_descricao = $_GET['produto_descricao'];
$produto_preco = $_GET['produto_preco'];
$produtoImagem = $_GET['produto_imagem'];
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                    <button type="submit" id="comprar">COMPRAR</button>
                </div>

            </div>

        </div>


        <div class="sucesso" id="divSucesso" style="display: none;">
            <h2 style="display: none;" id="sucesso">Compra realizada com sucesso!</h2>
        </div>

        <div class="formProd" id="formProd">

            <form class="formCompra">
                <h4 style="text-align: center;" class="mb-3">Preencha as informações abaixo</h4>
                <div class="form">
                    <div class="left">
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">E-mail</label>
                            <input type="email" placeholder="Insira seu e-mail" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone" class="form-label">Telefone</label>
                            <input type="number" placeholder="(xx) xxxxx-xxxx" class="form-control" id="exampleInputPhone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCardNumber" class="form-label">Número do cartão</label>
                            <input type="number" class="form-control" id="exampleInputCardNumber">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nome do títular</label>
                            <input type="text" class="form-control" id="exampleInputName">
                        </div>
                    </div>
                    <div class="right">
                        <div class="mb-3">
                            <label for="exampleInputCardDate" class="form-label">Data de validade</label>
                            <input type="date" class="form-control" id="exampleInputCardDate">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCode" class="form-label">Código de segurança</label>
                            <input type="number" class="form-control" id="exampleInputCode" maxlength="3">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCPF" class="form-label">CPF</label>
                            <input type="number" class="form-control" id="exampleInputCPF">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAd" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="exampleInputAd">
                        </div>
                    </div>
                </div>
            </form>
            </form>

        </div>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('comprar').addEventListener('click', function() {
            var email = document.getElementById('exampleInputEmail');
            var phone = document.getElementById('exampleInputPhone');
            var cardNumber = document.getElementById('exampleInputCardNumber');
            var cardName = document.getElementById('exampleInputName');

            if (email.value !== '' && phone.value !== '' && cardNumber.value !== '' && cardName.value !== '') {
                document.getElementById('formProd').style.display = 'none';
                document.getElementById('divSucesso').style.display = 'block'
                document.getElementById('sucesso').style.display = 'block';
            } else {
                alert('Preencha os campos do formulário não preenchidos antes de comprar.');
            }
        });
    </script>

</body>

</html>