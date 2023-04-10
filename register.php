<?php
// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];
// Sanitize data
$username = htmlspecialchars($username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Connect to database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Insert data into database
// Insert data into database
$default_role = 'm'; // Assign the default role to a variable
$stmt = $conn->prepare("INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password, $email, $default_role); // Use the variable instead of the constant value
$stmt->execute();
$stmt->close();


// Redirect user to login page
header("Location: login.php");
exit();
?>