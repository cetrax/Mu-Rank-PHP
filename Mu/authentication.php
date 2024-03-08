<?php     
session_start();
include('connection.php');  
$username = $_POST['user'];  
$userpwd = $_POST['pass'];  

//to prevent from mysqli injection  
$username = stripcslashes($username);  
$userpwd = stripcslashes($userpwd);  
$username = mysqli_real_escape_string($con, $username);  
$userpwd = mysqli_real_escape_string($con, $userpwd);  

$sql = "select *from t_users where username = '$username' and userpwd = '$userpwd'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count == 1){  
        $_SESSION['username']=$username;
        if(isset($_SESSION['username'])){
            header("Location:loggedPage.php");
        }
}                  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";
    }     
?>  