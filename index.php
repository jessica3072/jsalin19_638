<?php 
include_once 'includes/header.php';
    
$hn = 'localhost';
$db = 'jsalin19_638';
$un = 'root';
$pw = '';
 
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT *  
		FROM image NATURAL JOIN item";

$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;


/*
echo "<table><tr> <th>Welcome</th> <th>Hello</th><th>Testing</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "<td>".$row["fullimage_filepath"]."</td><td>";
	echo "<a href=\"viewitem.php?id=".$row["closeup_filepath"]."\">".$row["name"]."</a>";
	echo '</tr>';
}
    echo "</table>";


//how to figure out including images using php?? on local server?

from sumi's index page: <img src='./images/".$randCoffee['img_url']."'>
*/

echo "<p><img src='./images/001fullsize.jpg'><a href='./about.php'></a></p><br/>";




include_once 'includes/footer.php';  
?>




