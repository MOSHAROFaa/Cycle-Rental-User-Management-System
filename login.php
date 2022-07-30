<?php
require_once("config/func.php");

session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
    newLocation("index.php");
    exit;
}


require_once("config/setting.php");
require_once("config/dbSetup.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $u = $_POST["uname"];
    $p = $_POST["pass"];

    mysqli_select_db($conn, $dbName);
    $query = "SELECT * FROM users WHERE username='" . $u . "' AND pword='" . $p . "';";
    $query_result = mysqli_query($conn, $query);

    if ($query_result === false) {
        newLocation("login.php");
    }

    $row = mysqli_fetch_assoc($query_result);

    session_start();
    $_SESSION["login"] = true;
    $_SESSION["id"] = $row["userID"];
    $_SESSION["username"] = $row["username"];
    $_SESSION["usertype"] = $row["userType"];

    newLocation("index.php");
} else { ?>
    <html>
<head>
    <link rel="stylesheet" href="assets\css\style.css"/>
</head>

<body>
    <center> 
    <img src="cycleRent.jpg" style="width:30%;">
      <h2>Cycle Rental User Management</h2>
<div class="container">
            <form action="login.php" method="POST">
                <label for="Username">Username: </label>
                <input type="text" id="uname" name="uname" required><br>
                <label for="Password">Password: </label>
                <input type="password" id="pass" name="pass" required><br>
                <br>
                <input type="submit" value="Login">
                <input type="reset" value="Clear">
                <br>
                <p>Don't have an account? <a href="registration.php">Register Here</a></p>
            </form>
        </div>
    </center>

</body>

</html>
<?php } ?>