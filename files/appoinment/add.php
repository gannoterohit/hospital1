<?php
include '../database/connection.php';
// echo "<pre>";
// print_r($_POST);
// die;

// if (isset($_POST["SUBMIT"])){
   // echo "<pre>";
   // print_r($_POST);
   // die;

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$date = $_POST['date'];
$message = $_POST['message'];



$sql = "INSERT INTO appoinment (full_name,email,phone,department,date,message) VALUES ('$full_name', '$email','$phone','$department','$date','$message')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    echo '<script>alert("New record created successfully."); window.location.href = "appoinment.php";</script>';
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

?>