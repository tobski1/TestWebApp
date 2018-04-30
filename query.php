        <?php
        $serverName = "tobytestdatabase.database.windows.net";
        $connectionOptions = array(
            "Database" => "TobyTestDatabase",
            "Uid" => "toby",
            "PWD" => "TheOffice1!!"
        );
        //Establishes the connection
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
                FROM [SalesLT].[ProductCategory] pc
                JOIN [SalesLT].[Product] p
             ON pc.productcategoryid = p.productcategoryid";
        $getResults= sqlsrv_query($conn, $tsql);
        echo ("Reading data from table" . PHP_EOL);
        if ($getResults == FALSE)
            echo (sqlsrv_errors());
        while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
         echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
        }
        sqlsrv_free_stmt($getResults);
        ?>

<html>
<head>
<title> php test script - hope this works </title>
</head>
<body>
<h1>php & mysql connection</h1>
<hr>
<table border = '2'>
<tr>
<th>id</th>
<th>name</th>
</tr>

<?php
while ($rows = $tsql->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $rows['pc.Name'] ."</td>";
    echo "<td>" . $rows['p.name'] . "</td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>