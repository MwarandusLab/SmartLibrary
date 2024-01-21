<?php
// Replace these variables with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_entry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    // SQL query to check if the email and password match
    $sql = "SELECT * FROM user_data WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $userData = $result->fetch_assoc();
        // Determine the redirect based on the email
        switch ($email) {
            case 'kherikisia@mylife.mku.ac.ke':
                header("Location: Kheri/kheri.php");
                break;
            case 'linahalmasi@mylife.mku.ac.ke':
                header("Location: Linah/linah.php");
                break;
            case 'derrickkamau@mylife.mku.ac.ke':
                header("Location: Derrick/derrick.php");
                break;
        }
        exit();
    } else {
        echo ": Invalid email or password";
    }
}

// Close the database connection
$conn->close();
?>
