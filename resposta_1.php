<?php
// Conexão com o banco de dados
$pdo = new PDO('mysql:host=seu_host;dbname=seu_banco_de_dados', 'seu_usuario', 'sua_senha');

// Consulta para buscar os dados dos pedidos
$consulta = $pdo->query("SELECT * FROM pedidos");
$pedidos = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Calcula a média dos pedidos por dia
$media_por_dia = array();
foreach ($pedidos as $pedido) {
    $data = date('Y-m-d', strtotime($pedido['data']));
    if (!isset($media_por_dia[$data])) {
        $media_por_dia[$data] = array('total' => 0, 'quantidade' => 0);
    }
    $media_por_dia[$data]['total'] += $pedido['valor_total'];
    $media_por_dia[$data]['quantidade']++;
}

// Exibe os resultados em uma tabela HTML
echo '<table>';
foreach ($media_por_dia as $data => $media) {
    $media_calculada = $media['total'] / $media['quantidade'];
    $cor = '';
    if ($media_calculada < 3000) {
        $cor = 'red';
    } elseif ($media_calculada > 3000) {
        $cor = 'green';
    } else {
        $cor = 'gray';
    }
    echo "<tr style='background-color: $cor;'>";
    echo "<td>$data</td>";
    echo "<td>$media_calculada</td>";
    echo "</tr>";
}
echo '</table>';
?>