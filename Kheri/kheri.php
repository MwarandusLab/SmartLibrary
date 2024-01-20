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

    // function getBookStatus($conn, $bookId) {
    //     $query = "SELECT physics_status FROM kheri_db WHERE physics_books = '$bookId'";
    //     $result = $conn->query($query);

    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             return $row["physics_status"];
    //         }
    //     }
    //     // Return a default status if not found
    //     return "UNKNOWN";
    // }
    // function getBookStatus_2($conn, $bookId) {
    //     $query = "SELECT engineering_status FROM kheri_db WHERE engineering_books = '$bookId'";
    //     $result = $conn->query($query);

    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             return $row["engineering_status"];
    //         }
    //     }
    //     // Return a default status if not found
    //     return "UNKNOWN";
    // }
    function getBookStatus($conn, $bookId) {
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
        // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    
    function getBookStatus_2($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_3($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_4($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_5($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_6($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_7($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_8($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_9($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_10($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_11($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_12($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_13($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_14($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    function getBookStatus_15($conn, $bookId) {
        // Similar changes for the second table
        $status_kheri = getBookStatusFromTable($conn, $bookId, 'kheri_db');
        $status_linah = getBookStatusFromTable($conn, $bookId, 'linah_db');
        $status_derrick = getBookStatusFromTable($conn, $bookId, 'derrick_db');
    
         // Check if all statuses are "Borrow"
        if ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            return 'Borrow';
        } elseif ($status_kheri === 'Borrow' && $status_linah === 'Booked' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Borrow' && $status_linah === 'Borrow' && $status_derrick === 'Booked') {
            // If any table has the status "Booked," return "Booked"
            return 'Not Available';
        }elseif ($status_kheri === 'Booked' && $status_linah === 'Borrow' && $status_derrick === 'Borrow') {
            // If any table has the status "Booked," return "Booked"
            return 'Booked';
        }
    }
    
    function getBookStatusFromTable($conn, $bookId, $tableName) {
        $query = "SELECT physics_status FROM $tableName WHERE physics_books = '$bookId'";
        $result = $conn->query($query);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["physics_status"];
            }
        }
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
                <?php echo getBookStatus($conn, 'Physics_1'); ?>
            </button>
                
            </div>
            <div class="box2">
                <img src="images/modern physics.jpeg" alt="Image 2">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Physics_2" onclick="buttonClicked('Physics_2')">
                <?php echo getBookStatus_2($conn, 'Physics_2'); ?>
            </button>
                
            </div>
            <div class="box3">
                <img src="images/PHYSICS 2.jpeg" alt="Image 3">
                <h3>PHYSICS</h3>
                <p>Author:JERAL WALKER</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Physics_3" onclick="buttonClicked('Physics_3')">
                <?php echo getBookStatus_3($conn, 'Physics_3'); ?>
            </button>
            </div>
            <div class="box4">
                <img src="images/physics.jpeg" alt="Image 4">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Physics_4" onclick="buttonClicked('Physics_4')">
                <?php echo getBookStatus_4($conn, 'Physics_4'); ?>
            </button>
                
            </div>
            <div class="box5">
                <img src="images/modern physics.jpeg" alt="Image 5">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Physics_5" onclick="buttonClicked('Physics_5')">
                <?php echo getBookStatus_5($conn, 'Physics_5'); ?>
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
                <?php echo getBookStatus_6($conn, 'Engineering_1'); ?>
            </button>
                
            </div>
            <div class="box7">
                <img src="images/engineering materials.jpeg" alt="Image 7">
                <h3>ENGINEERING MATERIALS</h3>
                <p>Author:HENERY TINDELL</p>
                <p>Category: ENGINEERING</p>
                <button class="htmlButton_1" data-book-id="Engineering_2" onclick="buttonClicked('Engineering_2')">
                <?php echo getBookStatus_7($conn, 'Engineering_2'); ?>
            </button>
                
            </div>
            <div class="box8">
                <img src="images/engineering mechanics.jpg" alt="Image 8">
                <h3>ENGINEERING MECHANICS</h3>
                <p>Author:DR.D.S KUMAR</p>
                <p>Category: ENGINEERING</p>
                <button class="htmlButton_1" data-book-id="Engineering_3" onclick="buttonClicked('Engineering_3')">
                <?php echo getBookStatus_8($conn, 'Engineering_3'); ?>
            </button>
            </div>
            <div class="box9">
                <img src="images/physics.jpeg" alt="Image 9">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Engineering_4" onclick="buttonClicked('Engineering_4')">
                <?php echo getBookStatus_9($conn, 'Engineering_4'); ?>
            </button>
                
            </div>
            <div class="box10">
                <img src="images/modern physics.jpeg" alt="Image 10">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Engineering_5" onclick="buttonClicked('Engineering_5')">
                <?php echo getBookStatus_10($conn, 'Engineering_5'); ?>
            </button>
                
            </div>
        </div>
        <h2>MATHEMATICS BOOKS</h2>
        <div class="content-containerss">
            <div class="box11">
                <img src="images/engineering maths.jpeg" alt="Image 11">
                <h3>ENGINEERING MATHEMATICS</h3>
                <p>Author:DONOVAN CRAWFORD</p>
                <p>Category: MATHEMATICS</p>
                <button class="htmlButton_1" data-book-id="Mathematics_1" onclick="buttonClicked('Mathematics_1')">
                <?php echo getBookStatus_11($conn, 'Mathematics_1'); ?>
            </button>
                
            </div>
            <div class="box12">
                <img src="images/mathematics for engineers.jpeg" alt="Image 12">
                <h3>ENGINEERING MATHEMATICS</h3>
                <p>Author:DONOVAN CRAWFORD</p>
                <p>Category: MATHEMATICS</p>
                <button class="htmlButton_1" data-book-id="Mathematics_2" onclick="buttonClicked('Mathematics_2')">
                <?php echo getBookStatus_12($conn, 'Mathematics_2'); ?>
            </button>
                
            </div>
            <div class="box13">
                <img src="images/mathematics jee.jpeg" alt="Image 13">
                <h3>MATHEMATICS FOR JEE</h3>
                <p>Author:VIKAS GUPTA</p>
                <p>Category: MATHEMATICS</p>
                <button class="htmlButton_1" data-book-id="Mathematics_3" onclick="buttonClicked('Mathematics_3')">
                <?php echo getBookStatus_13($conn, 'Mathematics_3'); ?>
            </button>
            </div>
            <div class="box14">
                <img src="images/physics.jpeg" alt="Image 14">
                <h3>PHYSICS</h3>
                <p>Author:SERWAY JEWETT</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Mathematics_4" onclick="buttonClicked('Mathematics_4')">
                <?php echo getBookStatus_14($conn, 'Mathematics_4'); ?>
            </button>
                
            </div>
            <div class="box15">
                <img src="images/modern physics.jpeg" alt="Image 15">
                <h3>MODERN PHYSICS</h3>
                <p>Author:ANDREW REX</p>
                <p>Category: PHYSICS</p>
                <button class="htmlButton_1" data-book-id="Mathematics_5" onclick="buttonClicked('Mathematics_5')">
                <?php echo getBookStatus_15($conn, 'Mathematics_5'); ?>
            </button>
                
            </div>
        </div>            
    </main>

    <footer>
        <p>&copy; 2024 Library Website</p>
    </footer>

    <?php
        $conn->close();
    ?>


</body>
</html>
