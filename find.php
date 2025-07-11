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

$sql = "SELECT * FROM students WHERE student_id='$student_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Student Name: " . $row['student_name'] . "<br>";
    echo "Gender: " . $row['gender'] . "<br>";
    echo "Blood Category: " . $row['blood_category'] . "<br>";
    echo "House: " . $row['house'] . "<br>";
} else {
    echo "No student found with ID: $student_id";
}

$conn->close();
?>
