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
$servername = "tobymysqlserver.mysql.database.azure.com";
$username = "toby@tobymysqlserver";
$password = "TheOffice1!!";
$dbname = "quickstartdb";

// Create connection
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "{tobymysqlserver.mysql.database.azure.com}", "{toby@tobymysqlserver}", {TheOffice1!!}, {quickstartdb}, 3306);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["name"]. " - Quantity: ". $row["quantity"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

 </body>
</html>