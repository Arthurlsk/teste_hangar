<?

require "src/conexao.php";

$sql = "UPDATE user SET user_country = 'Canada' WHERE user_country = 'USA' AND user_id = 1;";
$statement = $pdo->query($sql);
var_dump($sql);
?>; 