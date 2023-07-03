<?php
require_once("Connection.php");

$conn = Connection::getConnection();

$msgErro = "";
$titulo = 'Cadastre-se';

$user = isset($_POST['user']) ? $_POST['user'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

if (isset($_POST['submetido'])) {

    $sql = "SELECT * FROM cadastro WHERE user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user]);
    $sameUserName = $stmt->fetchAll();

    $sql = "SELECT * FROM cadastro WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $sameEmail = $stmt->fetchAll();

    if (!$user && !$email && !$senha) {
        $msgErro = '<p id="msgErro">Preencha seus dados!</p>';
        $titulo = $msgErro;
    } else if (!$user) {
        $msgErro = '<p id="msgErro">Insira um nome de usuário</p>';
        $titulo = $msgErro;
    } elseif (count($sameUserName) > 0) {
        $msgErro = '<p id="msgErro">Nome de usuário já em uso!</p>';
        $titulo = $msgErro;
    } else if (!$email) {
        $msgErro = '<p id="msgErro">Insira seu e-mail.</p>';
        $titulo = $msgErro;
    } elseif (count($sameEmail) > 0) {
        $msgErro = '<p id="msgErro">E-mail já cadastrado!</p>';
        $titulo = $msgErro;
    } else if (!$senha) {
        $msgErro = '<p id="msgErro">Crie uma senha.</p>';
        $titulo = $msgErro;
    }

    if (empty($msgErro)) {
        $sql = 'INSERT INTO cadastro(user, email, senha)' . ' VALUES(?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$user, $email, $senha]);
        header("location: login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Cadastro</title>
</head>

<body>


    <div class="container">
        <form action="" method="POST" onsubmit="return msgSucesso();">
            <div class="header">
                <h1 id="titulo"><?php echo $titulo; ?></h1>
            </div>
            <div class="inputField">
                <label for="user">Nome de Usuário</label>
                <input type="text" name="user" placeholder="Informe o nome de usuário" id="user" value="<?php
                                                                                                        echo $user; ?>">
            </div>

            <div class="inputField">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Informe o e-mail" id="email" value="<?php
                                                                                                    echo $email; ?>">
            </div>

            <div class="inputField">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Crie uma senha" id="senha" value="<?php
                                                                                                    echo $senha; ?>">
            </div>

            <div class="btn">
                <button type="submit">Cadastrar</button>
                <a href="login.php" class="loginBtn">Fazer login</a>
                <input type="hidden" name="submetido" value="1">
            </div>
        </form>
    </div>

</body>

</html>