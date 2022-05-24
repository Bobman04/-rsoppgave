<!DOCTYPE html>
<?php 
session_start();

	include("connection.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
    

        //if inputs is not empty
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$query = "insert into login (username,password) values ('$username','$password')";

			$con->query($query);

			header("Location: index.html");
			die;
		}else
		{
			echo '<script>alert("Please enter some valid information")</script>';
		}
	}

    
?>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <style><?php include "index.css"; ?></style>
	<title>Signup Page</title>
</head>
<body>
    <center>
            <div id="boxsign">
            
            <form method="post" onkeydown="return event.key != 'Enter';">
            
                <br>
                <h1>Registrer deg</h1>

                <div class="inputboxes">

                    <div class="inputs">
                        <input id="text" type="text" name="username" placeholder="Brukernavn"><br><br>
                        <input id="text" type="password" name="password" placeholder="Passord"><br><br>
                    </div>

                        
                    <input id="buttonsign" type="submit" value="Signup">
                        
                        
                        
                    <div class="uptextbox">
                        <a class="uptext" href="index.html">Trykk for å logge inn</a>
                    </div>
                        <br><br>

                </div>

		</form>
	</div>
    </center>

 <style>
        body{
            background-color: grey;
            text-allign: center;   
        }



</style> 



</body>
</html>
