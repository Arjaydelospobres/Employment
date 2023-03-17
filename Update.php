<?php

$user = 'root';
$password = '';
$database = 'account';
$servername='localhost:3306';

$mysqli = new mysqli($servername, $user,$password, $database);

if ($mysqli->connect_error) {
  die('Connect Error (' .$mysqli->connect_error . ') '.
  $mysqli->connect_error);
}

$sql = "SELECT * FROM recordlist ORDER BY ID ASC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>UPDATE</title>
      
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
        <style> 
            
            body {
                background: #7f9b4e url(images/ba.png) no-repeat center top;
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
         <center><h1><strong>EMPLOYEES MANAGEMENT SYSTEM</strong></h1></center>
              <h1> &nbsp <span> &nbsp </span></h1>
            
        <nav class="codrops-demos">
            <a href="a.html">  View Chart  </a>
          <a href="Home.php"> Home  </a>
          
          <a class="current-demo" href="Update.php">  Update  </a>
          <a  href="dfile.php"> DELETE  </a>
          <a href="Out.php">  Log Out   </a>
          
        </nav>
            <header>
            
                <h1><strong>UPDATE RECORDS</strong></h1>
                
                
                

                
                
            </header>
         
       <Center><form action="up.php" method="POST">
                           <p><h3>User ID:</h3>
                             <input type="text" name="ID" placeholder ="Example: 10" required /></p>
<br>
                             <p><h3>Name:</h3>
                             <input type="text" name="Name" placeholder ="Example: Arjay" required /></p>
<br>
                             <p><h3>Position:</h3>
                             <input type="text" name="Section" placeholder ="" required /></p>
                             <br>
                             <p><h3>Total Sale:</h3>
                             <input type="text" name="Sale" placeholder ="" required /></p>
                            <br>
                          <p><button class="btn-update" name="update" value="update"><h4>UPDATE</h4></button></p>
                      </form></center>

   <h1> &nbsp <span> &nbsp </span></h1>
      <h1> &nbsp <span> &nbsp </span></h1>


<center>
  <h2>User Data</h2><table>
    <h3> &nbsp <span> &nbsp </span></h3>
                          <tr>
                            <h2><th>User ID &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp      </th>
                            <th>NAME     &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp   </th>
                            <th>Job Position   &nbsp &nbsp &nbsp &nbsp  &nbsp     </th>
                        <th>Total Sales per Day  &nbsp &nbsp &nbsp &nbsp  &nbsp     </th></h2></h2>
                          </tr>
                          <?php 
                            while($rows=$result->fetch_assoc())
                            {
                          ?>
                          <tr>
                            <td><?php echo $rows['ID'];?></td>
                            <td><?php echo $rows['NAME'];?></td>
                            <td><?php echo $rows['Section'];?></td>
                            <td><?php echo $rows['Sale'];?></td>
                          </tr>
                          <?php
                           }
                          ?>
                        </table>
    <h1> &nbsp <span> &nbsp </span></h1>
        

         
            
           
        </div>
    </form> 
    </body>
</html>
