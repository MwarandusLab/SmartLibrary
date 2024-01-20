<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
          background-color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kheri.css">
    <title>Dashboard</title>
</head>
<body>

    <?php
        // Assuming you have a database connection established
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mku_library";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected successfully";
        }

        // Assuming Physics_1 is the book ID you want to check
        $bookId = 1;

        // Query the database to get the status
        $query = "SELECT physics_status FROM kheri_db WHERE physics_books = 'Phyisics_1'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $status = $row["physics_status"];
            }
            echo "Found. Status: $status";
        } else {
            // Handle the case where no record is found
            $status = "UNKNOWN";
            echo "Not Found. Status: $status";
        }

        $conn->close();

    ?>

    <header>
        <h1>Library Catalog</h1>
        <nav>
            <ul>
                <li><a href="kheri.html">Dashboard</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="contacts.html">Contact</a></li>
                <li><a href="logout.html">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h3 class="User">Welcome Back Kheri</h3>
        <h2>PHYSICS BOOKS</h2>
        <div class="content-container">
            <!-- Use PHP to dynamically set the button text based on the status -->
            <div class="box1">
                <img src="images/physics.jpeg" alt="Image 1">
                <h3>PHYSICS</h3>
                <p>Author: SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="1" onclick="buttonClicked(1)">
                    <?php echo $status; ?>
                </button>
            </div>
            <!-- Repeat similar blocks for other books -->
        </div>
        <!-- Repeat similar blocks for other categories -->
    </main>


</body>
</html>
