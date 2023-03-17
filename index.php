<?php 

include 'data.php';

session_start();

error_reporting(0);

if (isset($_SESSION['ID'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM databs WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Error: Account not recognized!!')</script>";
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
            
                <h1><strong>Employees Management System</strong></h1>
                <h1> &nbsp <span> &nbsp </span></h1>
                
                

                
                
            </header>
         
       <center>
		<form action="" method="POST">
<h3>Username:</h3>
		<p><input type="text" name="username" placeholder="Arjay Delos Pobres" required> </p>
			 <h2> &nbsp <span> &nbsp </span></h2>
		
		<h3>Password:</h3>
    	<input type="password" name="password" placeholder="************" required />

  		  <h1> &nbsp <span> &nbsp </span></h1>
   			<p<h1> <strong><input type="submit" name="submit" value="             LOG IN              " /></strong></h1></p>
  				  	<br><br>
  				  	Doesn't have account?
						<u><b><a href="register.php">Create Account!!</a></b></u>  
						
           
        </div>
    </form> </center>
    </body>
</html>