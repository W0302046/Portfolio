<?php

// SQL connect info	
$servername = "localhost";
$username = "root";
$password = "N$341588n";
$dbname = "php_form";

//Date VALUES
@$Name = $_POST['name'];
@$Email = $_POST['email'];
@$Comments = $_POST['comment'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO comments (Firstname, Email, Comment)
VALUES ('$Name','$Email','$Comments')";

if (mysqli_query($conn, $sql)){
	echo "New record added";
}else{
	echo "Error:" .$sql."<br>".mysqli_error($conn);
}

$conn->close();

header("refresh:2; url=Form.php);

?>