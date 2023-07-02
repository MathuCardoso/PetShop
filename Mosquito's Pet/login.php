<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>


    <div class="container">
        <form action="login.html" method="POST">
            <div class="header">
                <h4>Faça Login!</h4>
            </div>

            <div class="inputField">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Informe o e-mail" id="email">
            </div>

            <div class="inputField">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Crie uma senha" id="senha">
            </div>

            <div class="btn">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>


</body>

</html>