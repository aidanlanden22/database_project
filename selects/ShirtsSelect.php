<DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <!-- required to handle IE -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <title> ThreadSwap Shirts </title>
        <style>
        ul.Shirts li {
          background-color: rgba(146, 195, 209, 0.3);
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width: 250px;
          display: inline-block;
        }
        ul.Shirts li:hover {
          background-color: rgba(146, 195, 209, 0.5);
          transition: 0.3s;
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width:250px;
          display: inline-block;
        }
        ul.Shirts li.img {
          float:center;
        }
      </style>
        </head>
        <body>
          <div class="row">


<?php
$Shirts = '<ul class="Shirts">';
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo("Can't connect to MySQL Server. Error code: " .
       mysqli_connect_error());
  return null;
}
// Form the SQL query (a SELECT query)
$sql="SELECT * FROM Shirts INNER JOIN clothing ON Shirts.item_id = clothing.clothingID ORDER BY Shirts.item_id";
$result = mysqli_query($con,$sql);
// Print the data from the table row by row
$col = 0;
while($row = mysqli_fetch_array($result)) {
  $Shirts .= '<li>';
  $Shirts .= '<img src="#" />';
  $Shirts .= '<h4>' . $row['name'] . '</h4>';
  $Shirts .= '<p>' . $row['Size'];
  $Shirts .= " " . $row['description'];
  $Shirts .= " " . $row['brand'];
  $Shirts .= " " . $row['color'] . '</p>';

  $Shirts .= '<p>' . "$" . $row['price'];
  $Shirts .= " " . "stock:" . $row['stock'];
  
  $Shirts .= " " . "rating:" . $row['rating'];
  $Shirts .= " " . $row['condition'] . '</p>';
  
  $Shirts .= '<p>' . $row['release_date_year'];
  $Shirts .= " " . $row['release_date_season'] . '</p>';
  $Shirts .= '</li>';
}
mysqli_close($con);
$Shirts .= '</ul>';
echo $Shirts;
?> 
</div>
</body>
</html>