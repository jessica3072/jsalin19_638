<!DOCTYPE html>
<html>
<head>
       <title>Billowy Vintage Archive</title>
<link rel="stylesheet" href="includes/enter.css">
</head>
<body>


   

    <h3 class="center">billowy vintage archive:<br>individual item page</h3><br>


    
<?php
session_start();

include_once 'includes/header.php';
require_once 'includes/functions.php';

$hn = 'localhost';
$un = 'jsalin19_mysql';
$pw = 'zATfUZ9xUVEr';
$db = 'jsalin19_638';
    
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


if (isset($_GET['id'])) {
	$id = sanitizeMySQL($conn, $_GET['id']);
	$query = "SELECT * FROM image NATURAL JOIN item WHERE item_id=".$id;
	$result = $conn->query($query);
	if (!$result) die ("Invalid item id.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "No item found with id of $id<br>";
	} else {
		while ($row = $result->fetch_assoc()) {
 

    echo "<span class=\"center\"><img src='images/".$row["fullimage_filepath"]."' height=\"450\" alt=\"item catalog image full size\"><img src='images/".$row["closeup_filepath"]."' height=\"450\" alt=\"item catalog image close up\"></span><br>";
    echo "<br><b><span class=\"center\">Item Information: </span></b><br><span class=\"center\">".$row["name"]."</span><br>";
     		}
	} 
	echo "<p><a href=\"archive.php\">Return to Gallery of all items</a></p>";
              }


include_once 'includes/footer.php';
?>



    
</body>
</html> 
