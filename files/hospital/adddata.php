<?php
include '../database/connection.php'; 
// echo "<pre>";
// print_r($_POST);
// die;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$Address = $_POST['address'];
$department = $_POST['department'];
$message = $_POST['message'];



$sql = "INSERT INTO hospitalr (name,email,phone,Address,department,message) VALUES ('$name', '$email','$phone','$Address','$department','$message')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    echo '<script>alert("New record created successfully."); window.location.href = "hospital.php";</script>';
    
} else {

    echo "Error: " . $sql . "<br>" . $conn->error; 

}
?>