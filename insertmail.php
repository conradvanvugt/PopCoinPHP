 <?php
$servername = "localhost";
$username = "root";
$password = "WwFfGgHh";
$dbname = "popcoin";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['email'])){
$mail = $_POST['email'];
}
else{
	$mail = null;
}

$sql = "INSERT INTO email (email) VALUES ('$mail')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 