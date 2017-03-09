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
if(isset($_POST['bedrag'])){
$bedrag = $_POST['bedrag'];
}
else{
	$bedrag = 0.00;
}
if(isset($_POST['beschrijving'])){
$beschrijving = $_POST['beschrijving'];
}
else{
	$beschrijving = null;
}

$sql = "INSERT INTO betaling (bedrag, beschrijving) VALUES ('$bedrag', '$beschrijving')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 