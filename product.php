<?php
session_start();
include 'db_connect.php';
$sql = "SELECT ProductName, UnitsInStock from products where CategoryID=1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <tbody>

  <table>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    
    <tr>
      <td>Chai</td>
      <td>39</td>
    </tr>

    <tr>
      <td>chang</td>
      <td>17</td>
    </tr>

    <tr>
      <td>Guaraná Fantástica</td>
      <td>20</td>
    </tr>

    <tr>
      <td>Sasquatch Ale</td>
      <td>111</td>
    </tr>

    <tr>
      <td>Steeleye Stout</td>
      <td>20</td>
    </tr>

    <tr>
      <td>Cote de Blaye</td>
      <td>17</td>
    </tr>

    <tr>
      <td>Chartreuse verte</td>
      <td>69</td>
    </tr>

    <tr>
      <td>Lpoh Coffee</td>
      <td>17</td>
    </tr>

    <tr>
      <td>Laughing Lumberjack Langer</td>
      <td>52</td>
    </tr>

    <tr>
      <td>Outback Lager</td>
      <td>15</td>
    </tr>

    <tr>
      <td>Rhonbrau Klosterbier</td>
      <td>125</td>
    </tr>

    <tr>
      <td>Lakkalikoori</td>
      <td>57</td>
    </tr>
        
  </table>
</body>
</html>