<?php
include_once("./library.php"); // To connect to the database
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Form the SQL query (an INSERT query)
 $sql="INSERT INTO clothing (clothingId, pageHitsTotal, pageHitsPerDay, imageLink, name, price, stock, description, rating, condition, brand, color, release_date_year, release_date_season)
 VALUES
 ($_POST[clothingId],$_POST[pageHitsTotal],$_POST[pageHitsPerDay],'$_POST[imageLink]','$_POST[name]',$_POST[price]
 ,$_POST[stock],'$_POST[description]',$_POST[rating],'$_POST[condition]','$_POST[brand]','$_POST[color]',$_POST[release_date_year],
 '$_POST[release_date_season]')";

if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
echo "1 record added"; // Output to user
mysqli_close($con);
?> 