<?php      
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "mu_game_2";  
/* Hago la conexión a la db mu_game_1 */

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
	die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
?>  