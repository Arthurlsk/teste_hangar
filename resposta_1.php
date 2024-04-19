<?php
require "src/conexao.php";

$sql = "SELECT * FROM orders";
$statement = $pdo->query($sql);
$resultados = $statement->fetchAll();
var_dump($resultados);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Pedidos</title>
</head>
<body>
    /*
    <h2>Tabela de Dados</h2>
    <table>
        <tr>
            <th>order_id</th>
            <th>order_user_id</th>
            <th>order_total</th>
            <th>order_date</th>
            
        </tr>
        <?php foreach ($resultados as $row): ?>
            <tr>
                <td><?= $row['order_id'] ?></td>
                <td><?= $row['order_user_id'] ?></td>
                <td><?= $row['order_total'] ?></td>
                <td><?= $row['order_date'] ?></td>
            </tr>
        <?php endforeach; ?>
        */
    </table>
</body>
</html>