<!DOCTYPE html>
<html>
<head>
       <title>Billowy Vintage Archive</title>
  <link rel="stylesheet" href="includes/enter.css">
</head>
<body>
  

<!--<nav>
  <br>
    <a href="about.php">About</a>  |
    <a href="archive.php">Browse All Items</a>  |
  <a href="decade.php">Browse By Decade</a>  |
    <a href="contact.php">Contact</a>
    
</nav> -->

   
<?php 
include_once 'includes/header.php';
    
$hn = 'localhost';
$un = 'jsalin19_mysql';
$pw = 'zATfUZ9xUVEr';
$db = 'jsalin19_638';
 
    
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM image NATURAL JOIN item";

$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;



echo "<span class=\"center\"><b>"."Billowy Vintage Archive"."</b></span><br>"."<span class=\"center\"><i>Welcome! Click to view more item information</i></span><br>";
echo "<table class=\"center\"><tr> <th style=\"padding:5px\">Gallery</th>";
while ($row = $result->fetch_assoc()) {
	echo '<tr><td>';
    //example: echo "<a href=\"viewpet.php?id=".$row["pet_id"]."\">".$row["name"]."</a>";

    
    echo "<span class=\"center\"><a href=\"viewitem.php?id=".$row["item_id"]."\"><img src='images/".$row["thumb_filepath"]."' width=\"90\"  alt=\"thumbnail item image\"></a></span>";	
	echo '</td></tr>';
}

    

echo "</table>";

/*
Browse by Decade:
See all 1930s items
See all 1940s items
See all 1950s items
    */
    
//echo "<img src='./images/001fullsize.jpg' alt='full size item image of pinafore' height='600px'>";
//also ---- echo "<img src=".$row['fullimage_filepath'].">";


include_once 'includes/footer.php';  
?>


    </body>
</html>
