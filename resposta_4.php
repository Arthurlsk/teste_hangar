<?

require "src/conexao.php";

$sql = "SELECT  user.user_name, user.user_city, user.user_country, orders.order_date, orders.order_total from user,orders where user.user_id = orders.order_user_id and  user.user_id IN (1, 3, 5) ORDER BY user.user_name;";
$statement = $pdo->query($sql);
var_dump($sql);
?>; 