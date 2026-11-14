<html>
<head>
<title>Connect to Database Server</title>

<script>
//This function redirects the user to the contact form page after the data is inserted into the database.
function redirect() {
  location.replace("https://media15live.com/schools/ftptasks/Ben%27s%20Website/contactme.html")
}
</script>

</head>
<body>

<?php
include "../connection_string.php"; //contains server connection login & database info
//database name: classworkWORKDB

//info from registration form
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//insert into table
//MAKE SURE TABLE NAME "tableTOMTOM" MATCHES YOUR TABLE NAME IN database_connection.php FILE
$insertquery = ("INSERT INTO benTABLE4 VALUES (NULL, '$name', '$email', '$message')");
$connect->query($insertquery);
	if($connect->connect_error)
	{
	echo "<p>Error inserting info:" . $connect->connect_error;
	}
	else
	{
	echo "<p>Your info has been saved! Redirecting you now back to the website...";
	}
?>
<script>redirect();</script> <!--Calls the redirect function to redirect the user to the form page-->
</body>
</html>
