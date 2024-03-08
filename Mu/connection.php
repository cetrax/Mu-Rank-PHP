<?php      
    $host = "localhost";  
    $user = "root";  
    $userpwd = '';  
    $db_name = "mu_serverinfo";  
      
    $con = mysqli_connect($host, $user, $userpwd, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  