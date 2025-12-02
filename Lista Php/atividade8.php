<?php
$resultado = "";

if (isset($_POST['texto'])) {
    $str = $_POST['texto'];
    $limpa = strtolower(preg_replace('/[^a-zA-Z]/', '', $str));

    $tamanho = strlen($str);
    $palindromo = ($limpa == strrev($limpa)) ? "Sim" : "Não";

    $vogais = preg_match_all('/[aeiouAEIOU]/', $str);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $str);

    $resultado = "
        <p><b>Tamanho da string:</b> $tamanho</p>
        <p><b>É palíndromo?</b> $palindromo</p>
        <p><b>Número de vogais:</b> $vogais</p>
        <p><b>Número de consoantes:</b> $consoantes</p>
    ";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Análise de String</title>
</head>
<body>

<form method="POST">
    <label>Informe uma string:</label>
    <input type="text" name="texto" required>
    <button type="submit">Analisar</button>
</form>

<div>
    <?php echo $resultado; ?>
</div>

</body>
</html>
