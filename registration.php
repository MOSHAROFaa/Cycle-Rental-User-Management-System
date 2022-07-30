<?php
require_once("config/dbSetup.php");
require_once("config/setting.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST["uname"];
    $p = $_POST["pass"];
    $t = $_POST["userType"];

    $query = "INSERT INTO users (username, pword, userType)
            VALUES ('" . $u . "','" . $p . "','" . $t . "');";
    mysqli_select_db($conn, $dbName);
    $query_result = mysqli_query($conn, $query);

   
    newLocation("login.php");
    
} else { ?>
    <html>
    <head>
    <title>Cycle Rental User Management</title>
        <link rel="stylesheet" href="assets\css\style.css"/>
    </head>

    <body>
        <center> 
                <img src="cycleRent.jpg" style="width:28%;">
      <h2>NEW Admin REGISTRATION</h2>
            <div class="container">
                <form action="registration.php" method="POST">
                    <label for="Username">Username: </label>
                    <input type="text" id="uname" name="uname" required><br>
                    <label for="Password">Password: </label>
                    <input type="password" id="pass" name="pass" required><br>
                    <br>
                    <input type="submit" value="Register">
                    <input type="reset" value="Clear">
                    <br><br>
                    <p>Already have an account? <a href="login.php">Login Here</a></p>
                </form>
            </div>
        </center>
    </body>
    </html>
<?php } ?>