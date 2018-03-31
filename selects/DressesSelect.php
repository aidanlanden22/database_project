<DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <!-- required to handle IE -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <title> ThreadSwap Dresses </title>
        <style>
        body {
          margin:auto;
        }
        .contents {
          margin:auto;
        }
        ul.Dresses li {
          background-color: rgba(146, 195, 209, 0.3);
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width: 250px;
          display: inline-block;
        }
        ul.Dresses li:hover {
          background-color: rgba(146, 195, 209, 0.5);
          transition: 0.3s;
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width:250px;
          display: inline-block;
        }
        
        ul.Dresses img {
          object-fit: cover;
        }
      </style>
        </head>
        <body>
          <div class=contents>
          


<?php
$Dresses = '<ul class="Dresses">';
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo("Can't connect to MySQL Server. Error code: " .
       mysqli_connect_error());
  return null;
}
// Form the SQL query (a SELECT query)
$sql="SELECT * FROM Dresses INNER JOIN clothing ON Dresses.item_id = clothing.clothingID ORDER BY Dresses.item_id";
$result = mysqli_query($con,$sql);
// Print the data from the table row by row
$col = 0;
while($row = mysqli_fetch_array($result)) {
  $Dresses .= '<li>';
  $Dresses .= '<img src="#" />';
  $Dresses .= '<h4>' . $row['name'] . '</h4>';
  $Dresses .= '<p>' . $row['Size'];
  $Dresses .= " " . $row['description'];
  $Dresses .= " " . $row['brand'];
  $Dresses .= " " . $row['color'] . '</p>';

  $Dresses .= '<div class=details>';
  $Dresses .= '<p>' . "$" . $row['price'];
  $Dresses .= " " . "stock:" . $row['stock'];
  
  $Dresses .= " " . "rating:" . $row['rating'];
  $Dresses .= " " . $row['condition'] . '</p>';
  
  $Dresses .= '<p>' . $row['release_date_year'];
  $Dresses .= " " . $row['release_date_season'] . '</p>';
  $Dresses .= '</div>';
  $Dresses .= '</li>';
}
mysqli_close($con);
$Dresses .= '</ul>';
echo $Dresses;
?> 
</div>
</body>
</html>