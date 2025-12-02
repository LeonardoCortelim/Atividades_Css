<?php
$server = "localhost";
$user = "root";
$pass = "123";
$db = "php";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuários</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid #555; padding: 8px 12px; text-align: left; }
        th { background: #ddd; }
        body { font-family: Arial, sans-serif; }
        .vazio { text-align: center; font-size: 20px; margin-top: 40px; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Usuários Cadastrados</h2>

<?php if ($result->num_rows > 0): ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['telefone']; ?></td>
    </tr>
    <?php endwhile; ?>

</table>
<?php else: ?>
<p class="vazio">Nenhum usuário encontrado na tabela.</p>
<?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>
