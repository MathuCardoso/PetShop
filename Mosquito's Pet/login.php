<?php
require_once("Connection.php");

$msgErro = "";
$titulo = 'Faça Login';

$conn = Connection::getConnection();

$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

if (isset($_POST['submetido'])) {
    if (!$email && !$senha) {
        $msgErro = '<p id="msgErro">Preencha seus dados!</p>';
        $titulo = $msgErro;
    } else if (!$email) {
        $msgErro = '<p id="msgErro">Digite seu e-mail.</p>';
        $titulo = $msgErro;
    } else if (!$senha) {
        $msgErro = '<p id="msgErro">Digite sua senha.</p>';
        $titulo = $msgErro;
    } else {
        $sql = "SELECT * FROM cadastro WHERE email = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email, $senha]);
        $result = $stmt->fetch();

        if ($result) {
            session_start();
            $_SESSION['user'] = $result['user'];
            header("Location: index.php");
            exit();
        } else {
            $msgErro = '<p id="msgErro">E-mail ou senha inválidos.</p>';
            $titulo = $msgErro;
        }
    }
}
?>

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
        <form action="login.php" method="POST">
            <div class="header">
                <h1 id="titulo"><?php echo $titulo; ?></h1>
            </div>

            <div class="inputField">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Informe o e-mail" id="email" value="<?php echo $email; ?>">
            </div>

            <div class="inputField">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Crie uma senha" id="senha" value="<?php echo $senha; ?>">
            </div>

            <div class="btn">
                <button type="submit">Login</button>
                <a href="cadastro.php" class="cadastrarBtn">Cadastrar-se</a>
                <input type="hidden" name="submetido" value="1">
            </div>
        </form>
    </div>
</body>

</html>
