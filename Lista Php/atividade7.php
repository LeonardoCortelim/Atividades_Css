<?php
$tabuada = "";
if (isset($_POST['numero'])) {
    $n = $_POST['numero'];
    $tabuada = "<h2>Tabuada do $n</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $tabuada .= "$n x $i = " . ($n * $i) . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>

<form method="POST">
    <label>Informe um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Gerar Tabuada</button>
</form>

<div>
    <?php echo $tabuada; ?>
</div>

</body>
</html>
