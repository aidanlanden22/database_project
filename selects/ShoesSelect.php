<DOCTYPE HTML>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <!-- required to handle IE -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <title> ThreadSwap.Shoes </title>
        <style>
        body {
          margin:auto;
        }
        .contents {
          margin:auto;
        }
        ul.Shoes li {
          background-color: rgba(146, 195, 209, 0.3);
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width: 250px;
          display: inline-block;
        }
        ul.Shoes li:hover {
          background-color: rgba(146, 195, 209, 0.5);
          transition: 0.3s;
          border-radius: 5px 5px 5px 5px;
          margin: 20px 20px 20px 20px;
          padding: 10px 10px 10px 10px;
          width:250px;
          display: inline-block;
        }
        
        ul.Shoes img {
          object-fit: cover;
        }
      </style>
        </head>
        <body>
          <div class=contents>

<?php
$Shirts = '<ul class="Shoes">';
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo("Can't connect to MySQL Server. Error code: " .
       mysqli_connect_error());
  return null;
}
// Form the SQL query (a SELECT query)
$sql="SELECT * FROM Shoes INNER JOIN clothing ON Shoes.item_id = clothing.clothingID ORDER BY Shoes.item_id";
$result = mysqli_query($con,$sql);
// Print the data from the table row by row

while($row = mysqli_fetch_array($result)) {
 $Shoes .= '<li>';
  $Shoes .= '<img src="#" />';
  $Shoes .= '<h4>' . $row['name'] . '</h4>';
  $Shoes .= '<p>' . $row['Size'];
  $Shoes .= " " . $row['description'];
  $Shoes .= " " . $row['brand'];
  $Shoes .= " " . $row['color'] . '</p>';

  $Shoes .= '<div class=details>';
  $Shoes .= '<p>' . "$" . $row['price'];
  $Shoes .= " " . "stock:" . $row['stock'];
  
  $Shoes .= " " . "rating:" . $row['rating'];
  $Shoes .= " " . $row['condition'] . '</p>';
  
  $Shoes .= '<p>' . $row['release_date_year'];
  $Shoes .= " " . $row['release_date_season'] . '</p>';
  $Shoes .= '</div>';
  $Shoes .= '</li>';
}
mysqli_close($con);
$Shoes .= '</ul>';
echo $Shoes;
?> 
</div>
</body>
</html>