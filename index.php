<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="post" name="Formfill" onsubmit="return validateForm()">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="Email" required>
                        <label for="">Student Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="Password" required>
                        <label for="">Password</label>
                        <p id="error-message" class="error-message"><?php echo $error_message; ?></p>
                    </div>
                    <button type="submit">Log in</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function validateForm() {
            var errorMessage = "<?php echo $error_message; ?>";

            if (errorMessage) {
                document.getElementById("error-message").innerText = errorMessage;
                // Prevent the form from submitting
                return false;
            }

            return true; // Allow the form to submit
        }
    </script>
</body>
</html>