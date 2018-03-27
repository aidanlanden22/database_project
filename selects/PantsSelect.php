<?php
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo("Can't connect to MySQL Server. Error code: " .
       mysqli_connect_error());
  return null;
}
// Form the SQL query (a SELECT query)
$sql="SELECT * FROM Pants INNER JOIN clothing ON Pants.item_id = clothing.clothingID ORDER BY Pants.item_id";
$result = mysqli_query($con,$sql);
// Print the data from the table row by row
while($row = mysqli_fetch_array($result)) {
  echo $row['clothingID'];
  echo " " . $row['Size'];
  echo " " . $row['name'];
  echo " " . $row['price'];
  echo " " . $row['stock'];
  echo " " . $row['description'];
  echo " " . $row['rating'];
  echo " " . $row['condition'];
  echo " " . $row['brand'];
  echo " " . $row['color'];
  echo " " . $row['release_date_year'];
  echo " " . $row['release_date_season'];
  echo "<br>";
}
mysqli_close($con);
?> 