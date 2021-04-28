<!DOCTYPE html>
<html>
  <head> 
    <meta charset="UTF-8">
    </head> 
<body>
Welcome to my web site! <br><br><br>
    
    Click <a href="viewitem.php">here</a> to view all items. 



<?php
session_start();


include_once 'includes/header.php';



/*
$query = "SELECT type
		FROM item ";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<table><tr> <th>type</th> ";

*/

include_once 'includes/footer.php';
?>
