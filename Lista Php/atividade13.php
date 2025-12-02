<?php
session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "1234";

$mensagem = "";

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION['logado'] = true;
    } else {
        $mensagem = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login simples</title>
</head>
<body>

<?php if (!isset($_SESSION['logado'])): ?>

<form method="POST">
    <label>Usuário:</label>
    <input type="text" name="usuario" required>

    <label>Senha:</label>
    <input type="password" name="senha" required>

    <button type="submit">Entrar</button>
</form>

<p><?php echo $mensagem; ?></p>

<?php else: ?>

<h2>Usuário está logado!</h2>

<form method="POST">
    <button type="submit" name="logout">Sair</button>
</form>

<?php endif; ?>

</body>
</html>
