<?php 
session_start();
echo "<h1><center> Login successful </center></h1>";  

include('connectMuGame.php');  

/* creo un select de toda la db y lo cargo en la variable $result */
        if(isset($_SESSION['username'])){
        	$username = $_SESSION['username'];
        }
echo "Welcome, $username.<br>";
$username = "ZYTHE".$username;
$sql = "SELECT * FROM t_roles";
//Corro la Query $sql en la conexion $con (mu_game_1)
$result = mysqli_query($con, $sql);


if(mysqli_num_rows($result) > 0)
{

 while($row = mysqli_fetch_assoc($result)){
 	if ($row["userid"]== $username){
		echo "Role id: " . $row["rid"]. "<br> Character Name: " .$row["rname"]. "<br> Battle Power: ". $row["combatforce"]."<br><br>";
	}
}
}
else
{
  echo "0 results";
} ?>