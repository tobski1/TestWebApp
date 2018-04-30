<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>contact.php</title>
 <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>
 <body>


<?php
$host = 'tobymysqlserver.mysql.database.azure.com';
$username = 'toby@tobymysqlserver';
$password = 'TheOffice1!!';
$db_name = 'quickstartdb';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Quantity: " . $row["quantity"]. "<br>";
    }
} else {
    echo "0 results";
}
 ?>



 </body>
</html>