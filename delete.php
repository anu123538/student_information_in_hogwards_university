<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hogwarts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_POST['student_id'];

$sql = "DELETE FROM students WHERE student_id='$student_id'";

if ($conn->query($sql) === TRUE) {
    echo "Student deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
