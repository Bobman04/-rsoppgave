<?php      
    $host = "localhost";  
    $user = "teodor";  
    $password = 'Admin@123';  
    $db_name = "kubctf";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>
