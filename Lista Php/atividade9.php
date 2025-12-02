<?php
$etapa = 1;

if (isset($_GET['nome']) && isset($_GET['email']) && !isset($_POST['peso'])) {
    $etapa = 2;
    $nome = $_GET['nome'];
    $email = $_GET['email'];
}

if (isset($_POST['peso']) && isset($_POST['altura'])) {
    $etapa = 3;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = number_format($peso / ($altura * $altura), 2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>
<body>

<?php if ($etapa == 1): ?>

<form method="GET">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <button type="submit">Continuar</button>
</form>

<?php endif; ?>


<?php if ($etapa == 2): ?>

<form method="POST">
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">

    <label>Peso (kg):</label>
    <input type="number" step="0.01" name="peso" required>

    <label>Altura (m):</label>
    <input type="number" step="0.01" name="altura" required>

    <button type="submit">Calcular IMC</button>
</form>

<?php endif; ?>


<?php if ($etapa == 3): ?>

<h2>Resultado do IMC</h2>
<p><b>Nome:</b> <?php echo $nome; ?></p>
<p><b>E-mail:</b> <?php echo $email; ?></p>
<p><b>Peso:</b> <?php echo $peso; ?> kg</p>
<p><b>Altura:</b> <?php echo $altura; ?> m</p>
<p><b>IMC:</b> <?php echo $imc; ?></p>

<?php endif; ?>

</body>
</html>
