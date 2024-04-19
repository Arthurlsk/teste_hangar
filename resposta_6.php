<?

require "src/conexao.php";

$sql = "SELECT 
orders.order_date,
orders.order_total
from user,orders
where user.user_id = orders.order_user_id;";
$statement = $pdo->query($sql);
var_dump($sql);
?>; 