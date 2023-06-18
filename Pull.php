<?php 
// SQL connect info	
$servername = "localhost";
$username = "root";
$password = "N$341588n";
$dbname = "php_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br>";

$sql = "SELECT * FROM php_form.comments";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "Name: ". $row['Firstname'].$row['Email'].$row['Comment']."<br>";
		
	}
}else {
	echo "No records has been found";
}



$conn->close();


?>