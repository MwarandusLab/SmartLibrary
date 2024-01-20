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

    function getBookStatus($conn, $bookId) {
        $query = "SELECT physics_status FROM kheri_db WHERE physics_books = '$bookId'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["physics_status"];
            }
        }
        // Return a default status if not found
        return "UNKNOWN";
    }
    function getBookStatus_2($conn, $bookId) {
        $query = "SELECT engineering_status FROM kheri_db WHERE engineering_books = '$bookId'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["engineering_status"];
            }
        }
        // Return a default status if not found
        return "UNKNOWN";
    }

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
            <div class="box1">
                <img src="images/physics.jpeg" alt="Image 1">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Physics_1" onclick="buttonClicked('Physics_1')">
                <?php echo getBookStatus($conn, 'Phyisics_1'); ?>
            </button>
                
            </div>
            <div class="box2">
                <img src="images/modern physics.jpeg" alt="Image 2">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Phyisics_2" onclick="buttonClicked('Phyisics_2')">
                <?php echo getBookStatus($conn, 'Phyisics_2'); ?>
            </button>
                
            </div>
            <div class="box3">
                <img src="images/PHYSICS 2.jpeg" alt="Image 3">
                <h3>PHYSICS</h3>
                <p>Author:JERAL WALKER</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Phyisics_3" onclick="buttonClicked('Phyisics_3')">
                <?php echo getBookStatus($conn, 'Phyisics_3'); ?>
            </button>
            </div>
            <div class="box4">
                <img src="images/physics.jpeg" alt="Image 4">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Phyisics_4" onclick="buttonClicked('Phyisics_4')">
                <?php echo getBookStatus($conn, 'Phyisics_4'); ?>
            </button>
                
            </div>
            <div class="box5">
                <img src="images/modern physics.jpeg" alt="Image 5">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Phyisics_5" onclick="buttonClicked('Phyisics_5')">
                <?php echo getBookStatus($conn, 'Phyisics_5'); ?>
            </button>
                
            </div>
        </div>
        <h2>ENGINEERING BOOKS</h2>
        <div class="content-containers">
            <div class="box6">
                <img src="images/mechanical enginering.jpeg" alt="Image 6">
                <h3>MECHANICAL ENGINEERING</h3>
                <p>Author:JONATHAN WICKERT</p>
                <p>Category: Engineering</p>
                <button class="htmlButton_1" data-book-id="Engineering_1" onclick="buttonClicked('Engineering_1')">
                <?php echo getBookStatus_2($conn, 'Engineering_1'); ?>
            </button>
                
            </div>
            <div class="box7">
                <img src="images/engineering materials.jpeg" alt="Image 7">
                <h3>ENGINEERING MATERIALS</h3>
                <p>Author:HENERY TINDELL</p>
                <p>Category: ENGINEERING</p>
                <button  class="htmlButton_7" data-book-id="7" onclick="buttonClicked(7)">Borrow</button>
                
            </div>
            <div class="box8">
                <img src="images/engineering mechanics.jpg" alt="Image 8">
                <h3>ENGINEERING MECHANICS</h3>
                <p>Author:DR.D.S KUMAR</p>
                <p>Category: ENGINEERING</p>
                <button class="htmlButton_8" data-book-id="8" onclick="buttonClicked(8)">Borrow</button>
            </div>
            <div class="box9">
                <img src="images/physics.jpeg" alt="Image 9">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_9" data-book-id="9" onclick="buttonClicked(9)">Borrow</button>
                
            </div>
            <div class="box10">
                <img src="images/modern physics.jpeg" alt="Image 10">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_10" data-book-id="10" onclick="buttonClicked(10)">Borrow</button>
                
            </div>
        </div>
        <h2>MATHEMATICS BOOKS</h2>
        <div class="content-containerss">
            <div class="box11">
                <img src="images/engineering maths.jpeg" alt="Image 11">
                <h3>ENGINEERING MATHEMATICS</h3>
                <p>Author:DONOVAN CRAWFORD</p>
                <p>Category: MATHEMATICS</p>
                <button class="htmlButton_11" data-book-id="11" onclick="buttonClicked(11)">Borrow</button>
                
            </div>
            <div class="box12">
                <img src="images/mathematics for engineers.jpeg" alt="Image 12">
                <h3>ENGINEERING MATHEMATICS</h3>
                <p>Author:DONOVAN CRAWFORD</p>
                <p>Category: MATHEMATICS</p>
                <button class="htmlButton_12" data-book-id="12" onclick="buttonClicked(12)">Borrow</button>
                
            </div>
            <div class="box13">
                <img src="images/mathematics jee.jpeg" alt="Image 13">
                <h3>MATHEMATICS FOR JEE</h3>
                <p>Author:VIKAS GUPTA</p>
                <p>Category: MATHEMATICS</p>
                <button class="htmlButton_13" data-book-id="13" onclick="buttonClicked(13)">Borrow</button>
            </div>
            <div class="box14">
                <img src="images/physics.jpeg" alt="Image 14">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_14" data-book-id="14" onclick="buttonClicked(14)">Borrow</button>
                
            </div>
            <div class="box15">
                <img src="images/modern physics.jpeg" alt="Image 15">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_15" data-book-id="15" onclick="buttonClicked(15)">Borrow</button>
                
            </div>
        </div>            
    </main>

    <footer>
        <p>&copy; 2024 Library Website</p>
    </footer>
    <script>
        function buttonClicked(bookId, buttonId) {
            var button = document.getElementById(buttonId);
            var buttonText = button.innerText.trim();

            if (buttonText === "Borrow") {
                // Update the button text
                button.innerText = "Booked";

                // Send an AJAX request to update the database
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "update_status.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                // Prepare the data to be sent
                var data = "bookId=" + encodeURIComponent(bookId) + "&status=Booked";

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Handle the response from the server if needed
                        console.log(xhr.responseText);
                    }
                };

                // Send the request
                xhr.send(data);
            } else if (buttonText === "Booked") {
                // Do nothing when the status is already "Booked"
            }
        }
    </script>

    <?php
        $conn->close();
    ?>


</body>
</html>
