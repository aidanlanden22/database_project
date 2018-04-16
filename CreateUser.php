<?php
include_once("./library.php"); // To connect to the database
session_start();
$_SESSION["user"] = $_POST["username"];
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sqlAllUsers = "SELECT user_id FROM User";
  $result = mysqli_query($con,$sqlAllUsers);

// Form the SQL query (an INSERT query)
   $sql="INSERT INTO User (user_id, username, password, location, rating)
   VALUES
   (" . mysqli_num_rows($result) . ", '$_POST[username]','$_POST[password]','$_POST[location]', 'N/A')";
if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }

  
redirect('http://localhost:8080/database_project/homepage.html');
mysqli_close($con);

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>