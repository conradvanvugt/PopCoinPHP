
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

$sql = "SELECT bedrag,beschrijving,datum FROM betaling";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "bedrag: " . $row["bedrag"]. " !-! beschrijving: " . $row["beschrijving"]. " !-! tijdstip: " . $row["datum"] .  "!<br>!";
     }
} else {
    echo "0 results";
}
$conn->close();
?>




