<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $conn = new mysqli("localhost", "root", "", "seu_banco");

    if ($conn->connect_error) {
        $mensagem = "Erro na conexão: " . $conn->connect_error;
    } else {
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, telefone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $telefone);

        if ($stmt->execute()) {
            $mensagem = "Usuário inserido com sucesso!";
        } else {
            $mensagem = "Erro ao inserir: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inserir Usuário</title>
</head>
<body>

<form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <label>Telefone:</label>
    <input type="text" name="telefone" required>

    <button type="submit">Enviar</button>
</form>

<h3><?php echo $mensagem; ?></h3>

</body>
</html>
