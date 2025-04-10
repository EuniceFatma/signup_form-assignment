<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful!";
    // Redirect to feedback page
    header("Location: feedback.php");
    exit();
} else {
    echo "Invalid email or password.";
}
?>