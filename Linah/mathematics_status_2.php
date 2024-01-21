<?php
require_once('linah.php');
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mku_library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId = $_POST["bookId"];

    // Check the current status
    $currentStatus = getBookStatusFromTable_3($conn, $bookId, 'linah_db');

    // If the current status is "Borrow," update it to "Booked"
    if ($currentStatus === 'Borrow') {
        $updateQuery = "UPDATE linah_db SET mathematics_status = 'Booked' WHERE mathematics_books = '$bookId'";
        if ($conn->query($updateQuery) === TRUE) {
            echo "Status updated successfully";
        } else {
            echo "Error updating status: " . $conn->error;
        }
    } else {
        echo "Status not updated. Current status: $currentStatus";
    }
}

$conn->close();
?>
