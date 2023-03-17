<?php 

include 'data.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: register.php");
}

if (isset($_POST['signup'])) {
	$ID = $_POST['ID'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($password == $password) {
		$sql = "SELECT * FROM databs WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO databs (ID, username, password)
					VALUES ('$ID', '$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registration Complete.')</script>";
				$username = "";
				$_POST['password'] = "";

			} else {
				echo "<script>alert('Something went wrong...')</script>";
			}
		} 
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Log in</title>
      
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
        <style> 
            
            body {
                background: #7f9b4e url(images/ban.jpg) no-repeat center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }
            .container > header h1,
            .container > header h2 {
                color: #black;
                text-shadow: 0 1px 1px rgba(0,0,0,0.7);
            }
        </style>
    </head>
    <body>
        <div class="container">
         <h1> &nbsp <span> &nbsp </span></h1>
              <h1> &nbsp <span> &nbsp </span></h1>
              
            <header>
            
                <h1><strong>CREATE ACCOUNT NOW!</strong></h1>
                
                
                

                
                
            </header>

         
       <center>
		<form action="register.php" method="POST">
<h3>UserID:</h3>
		<p> <input type="text" name="ID" placeholder="6969" required /> </p>

 <h2>  <span> &nbsp </span></h2>
		<h3>UserName:</h3>
		<p><input type="text" name="username" placeholder="Arjay Delos Pobres" required /> </p>
		
		 <h2>  <span> &nbsp </span></h2>
		<h3>Password:</h3>
    	<input type="password" name="password" placeholder="***************" required />
<br>
   			<p><h1> <strong> <input type="submit" name="signup" value="            Sign Up             " /></strong></h1></p>
  				  	<br>
  				  	Already member?
						<u><b><a href="index.php">Back to Log In!!</a></b></u>  
						
           
        </div>
    </form> </center>
    </body>
</html>