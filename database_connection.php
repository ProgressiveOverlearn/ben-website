<html>
<head>
<title>Create Table in Database</title>
</head>
<body>

<?php
include "../connection_string.php"; //contains server connection login & database info
//database name: classworkWORKDB

// Create table
$tableNAME = "benTABLE4";//replace tableTOMTOM with your own unique name
$createTABLE = "CREATE TABLE ".$tableNAME."
(
ID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(40),
email varchar(50),
message varchar(200)
)"
;
// Execute query
$connect->query($createTABLE);
	if($connect->connect_error)
	{
	echo "<p>Error creating table:" . $connect->connect_error;
	}
	else
	{
	echo "<p>",$tableNAME," table created!";
	}
?>
</body>
</html>
