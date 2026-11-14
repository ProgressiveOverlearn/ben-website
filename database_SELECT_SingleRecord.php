<html>
<head>
<title>Select from Database Server: Profile View</title>
</head>
<body>
<?php
include "../connection_string.php"; //contains server connection login & database info
//ID info from database_SELECT_.php file
$userID = $_REQUEST['ID'];
$result1 = ("SELECT * FROM benTABLE4 WHERE ID=\"$userID\"");
$result = $connect->query($result1);
$result2 = $connect->query($result1);
//database name: classworkWORKDB
?>

<h3>Profile View: <i>
<?php 

while($rowName = $result2->fetch_assoc())
 {
  echo $rowName['name'].", ".$rowName['email'];
 }
?> 
</i></h3>

<hr><table border="1px" cellpadding="10px" cellspacing="5px" style="border-collapse:collapse">
<tr><td>ID</td><td>Name</td><td>Email</td><td>Message</td></tr> 
<?php

//select data and display in the browser the specific ID
//MAKE SURE TABLE NAME "tableTOMTOM" MATCHES YOUR TABLE NAME IN database_connection.php FILE

while($row = $result->fetch_assoc())
  {  
  echo "
  <tr>
  <td>" . $row['ID'] . "</td>
  <td>" . $row['name'] . "</td>
  <td>" . $row['email'] . "</td>
  <td>" . $row['message'] . "</td>
  <tr>";
  }
?>
</table>
</body>
</html>
