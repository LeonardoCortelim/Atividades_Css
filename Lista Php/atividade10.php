<?php
$output = "";
if (isset($_POST['inicio']) && isset($_POST['fim'])) {
    $inicio = intval($_POST['inicio']);
    $fim = intval($_POST['fim']);
    if ($inicio > $fim) {
        $temp = $inicio;
        $inicio = $fim;
        $fim = $temp;
    }
    for ($i = $inicio; $i <= $fim; $i++) {
        $output .= '<span class="numero">' . htmlspecialchars((string)$i, ENT_QUOTES, 'UTF-8') . '</span> ';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Intervalo de Números</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        form { margin-bottom: 20px; }
        input[type="number"] { width: 120px; padding: 6px; margin-right: 10px; }
        button { padding: 6px 12px; }
        .numero {
            display: inline-block;
            margin: 4px;
            padding: 6px 10px;
            border-radius: 6px;
            background: #f0f0f0;
            border: 1px solid #ccc;
            font-weight: 600;
        }
    </style>
</head>
<body>

<form method="POST">
    <label>Início:</label>
    <input type="number" name="inicio" required>
    <label>Fim:</label>
    <input type="number" name="fim" required>
    <button type="submit">Exibir</button>
</form>

<div>
    <?php echo $output; ?>
</div>

</body>
</html>
