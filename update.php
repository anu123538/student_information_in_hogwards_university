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

$sql = "UPDATE students SET 
    student_name='$student_name', 
    gender='$gender', 
    blood_category='$blood_category',
    house='$house'
    WHERE student_id='$student_id'";

if ($conn->query($sql) === TRUE) {
    echo "Student updated successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
