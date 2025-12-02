<?php
$mensagem = "";
if (isset($_POST['numero'])) {
    $n = $_POST['numero'];
    if ($n % 2 == 0) {
        $mensagem = "O número $n é Par.";
    } else {
        $mensagem = "O número $n é Ímpar.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar</title>
</head>
<body>

<form method="POST">
    <label>Informe um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<h2><?php echo $mensagem; ?></h2>

</body>
</html>
