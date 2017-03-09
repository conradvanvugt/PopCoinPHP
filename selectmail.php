
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

$sql = "SELECT * FROM email";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - email: " . $row["email"] ."</br>";
     }
} else {
    echo "Geen resultaten";
}
$conn->close();
?>




