<?php
$resultado = "";
if (isset($_POST['min']) && isset($_POST['max'])) {
    $min = $_POST['min'];
    $max = $_POST['max'];

    if (is_numeric($min) && is_numeric($max) && $min <= $max) {
        $resultado = "Número sorteado: " . rand($min, $max);
    } else {
        $resultado = "Valores inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sorteio</title>
</head>
<body>

<form method="POST">
    <label>Valor mínimo:</label>
    <input type="number" name="min" required>

    <label>Valor máximo:</label>
    <input type="number" name="max" required>

    <button type="submit">Sortear</button>
</form>

<h2><?php echo $resultado; ?></h2>

</body>
</html>
