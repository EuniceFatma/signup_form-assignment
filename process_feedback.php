<?php
include 'config.php';

$name = $_POST['name'];
$feedback = $_POST['feedback'];

// Insert feedback into database
$sql = "INSERT INTO feedback (name, feedback) VALUES ('$name', '$feedback')";

if (mysqli_query($conn, $sql)) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>