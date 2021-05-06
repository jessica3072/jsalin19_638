
<?php
//decade.php
//browse by decade
//template?
session_start();
include_once 'includes/header.php';
require_once 'includes/functions.php';

    
$hn = 'localhost';
$db = 'jsalin19_638';
$un = 'root';
$pw = '';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['id'])) {
	$id = sanitizeMySQL($conn, $_GET['id']);
	$query = "SELECT * FROM image NATURAL JOIN item WHERE decade_id=".$id;
	$result = $conn->query($query);
	if (!$result) die ("Invalid decade id.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "No item found with id of $id<br>";
    } else {
		while ($row = $result->fetch_assoc()) {
			echo '<h1>Item Information</h1>';
			echo '<p>'.$row["name"]." TEST ".$row["gender_id"]." TESTING ".$row["name"]." ".$row["decade_id"].'</p>';
			echo '<h4>More Information:</h4>';
			echo $row["name"]." (".$row["decade_id"].")";		     
		}
	}
	echo "<p><a href=\"archive.php\">Return to homepage</a></p>";
} else {
	echo "No item id passed";
}

include_once 'includes/footer.php';


    
    
    
//viewpet example
    
 // code to grab the $row from images table from db

//echo "<img src=".$row['fullimage_filepath'].">";   
    
/*
echo "<table><tr> <th>Welcome</th> <th>Hello</th><th>Testing</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "<td>".$row["fullimage_filepath"]."</td><td>";
	echo "<a href=\"viewitem.php?id=".$row["closeup_filepath"]."\">".$row["name"]."</a>";
	echo '</tr>';
}
    echo "</table>";
*/
    
//  $randQuery = "SELECT * FROM image ORDER BY RAND() LIMIT 1";
    

    
    
    
/*
view.pet example
<?php
session_start();
include_once 'includes/header.php';


$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['id'])) {
	$id = sanitizeMySQL($conn, $_GET['id']);
	$query = "SELECT * FROM image NATURAL JOIN item WHERE item_id=".$id;
	$result = $conn->query($query);
	if (!$result) die ("Invalid tem id.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "No item found with id of $id<br>";
	} else {
		while ($row = $result->fetch_assoc()) {
			echo '<h1>Item Information</h1>';
			echo '<p>'.$row["name"]." is a ".$row["age"]." year(s) old ".$row["sex"]." ".$row["species"].'</p>';
			echo '<h4>Caretaker Information:</h4>';
			echo $row["caretaker_name"]." (".$row["email"].")";			
		}
	}
	echo "<p><a href=\"index.php\">Return to homepage</a></p>";
} else {
	echo "No item id passed";
}

include_once 'includes/footer.php';
?>

*/
    
    
    
    
?>

</body>
</html>