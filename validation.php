<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'dima');
define('DB_PASS', '1234');
define('DB_NAME', 'userregistration');

session_start(); 

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$name = $_POST['user'];
$pass = $_POST['password'];

/** 
 * Check if the username is already in the database
 */ 
$s = "SELECT * FROM usertable WHERE name = '$name' && password = '$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['username'] = $name;
    header('Location: home.php');
} else {
    header('Location: login.php');
}








