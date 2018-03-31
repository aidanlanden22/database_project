<DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <!-- required to handle IE -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <title> ThreadSwap Pants </title>
        <style>
        body {
          margin:auto;
        }
        .contents {
          margin:auto;
        }
        ul.Pants li {
          background-color: rgba(146, 195, 209, 0.3);
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width: 250px;
          display: inline-block;
        }
        ul.Pants li:hover {
          background-color: rgba(146, 195, 209, 0.5);
          transition: 0.3s;
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width:250px;
          display: inline-block;
        }
        
        ul.Pants img {
          object-fit: cover;
        }
      </style>
        </head>
        <body>
          <div class=contents>
          


<?php
$Pants = '<ul class="Pants">';
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
$col = 0;
while($row = mysqli_fetch_array($result)) {
  $Pants .= '<li>';
  $Pants .= '<img src="#" />';
  $Pants .= '<h4>' . $row['name'] . '</h4>';
  $Pants .= '<p>' . $row['Size'];
  $Pants .= " " . $row['description'];
  $Pants .= " " . $row['brand'];
  $Pants .= " " . $row['color'] . '</p>';

  $Pants .= '<div class=details>';
  $Pants .= '<p>' . "$" . $row['price'];
  $Pants .= " " . "stock:" . $row['stock'];
  
  $Pants .= " " . "rating:" . $row['rating'];
  $Pants .= " " . $row['condition'] . '</p>';
  
  $Pants .= '<p>' . $row['release_date_year'];
  $Pants .= " " . $row['release_date_season'] . '</p>';
  $Pants .= '</div>';
  $Pants .= '</li>';
}
mysqli_close($con);
$Pants .= '</ul>';
echo $Pants;
?> 
</div>
</body>
</html>