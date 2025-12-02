<?php
$resultado = "";

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $c = floatval($_POST['c']);

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {

        if ($a == $b && $b == $c) {
            $resultado = "Triângulo Equilátero";
        } elseif ($a == $b || $a == $c || $b == $c) {
            $resultado = "Triângulo Isósceles";
        } else {
            $resultado = "Triângulo Escaleno";
        }

    } else {
        $resultado = "Os valores informados NÃO formam um triângulo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Classificação de Triângulos</title>
</head>
<body>

<form method="POST">
    <label>Lado A:</label>
    <input type="number" step="0.01" name="a" required>

    <label>Lado B:</label>
    <input type="number" step="0.01" name="b" required>

    <label>Lado C:</label>
    <input type="number" step="0.01" name="c" required>

    <button type="submit">Verificar</button>
</form>

<h2><?php echo $resultado; ?></h2>

</body>
</html>
