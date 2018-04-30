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


//  try {
//  $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "tobymysqlserver.mysql.database.azure.com", "toby@tobymysqlserver", "TheOffice1!!", "quickstartdb", 3306);
//
$query = "SELECT * FROM inventory";
echo $query;
 ?>



 </body>
</html>