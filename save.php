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
$student_name = $_POST['student_name'];
$gender = $_POST['gender'];
$blood_category = $_POST['blood_category'];
$house = $_POST['house'];

$sql = "INSERT INTO students (student_id, student_name, gender, blood_category, house)
VALUES ('$student_id', '$student_name', '$gender', '$blood_category', '$house')";

if ($conn->query($sql) === TRUE) {
    echo "Student saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
