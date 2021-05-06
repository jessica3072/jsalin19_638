<!DOCTYPE html>
<html>
<head>
    <title>Billowy Vintage Archive</title>
<link rel="stylesheet" href="includes/enter.css">
</head>
<body>

    
<div class="center">
    <h3>billowy vintage archive</h3> </div>
    
    <div class="center">
    <button style="align:center" onclick="document.location='archive.php'">click here to enter</button> </div><br>
     
    <div class="center">
    
    
<?php 

$hn = 'localhost';
$un = 'jsalin19_mysql';
$pw = 'zATfUZ9xUVEr';
$db = 'jsalin19_638';
 
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
    
$query = "SELECT thumb_filepath FROM image ORDER BY RAND() LIMIT 1";

$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

while ($row = $result->fetch_assoc()) {
 
echo "<img src='images/".$row["thumb_filepath"]."' width=\"525\" alt=\"random item image generated\">";
//echo "<img src='./images/001main.jpg' alt='image of pinafore' height='600px'>";
    
// welcome / entry page
}



?>
</div>
  
</body>
</html> 
