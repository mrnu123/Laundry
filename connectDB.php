$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "laundrydb";
$conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}