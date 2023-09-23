<?php
include '../database/connection.php';
// echo "<pre>";
// print_r($_POST);
// die; 

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$contect = $_POST['contect'];
$specialty = $_POST['specialty'];
$exprience = $_POST['exprience'];                              
$massage = $_POST['massage'];
$img = "";               

$filename = 'doctor_img_' . time() . $_FILES["images"]["name"];
$tempname = $_FILES["images"]["tmp_name"];
$folder = "../../uploads/doctors/" . $filename;
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}

 
$sql = "INSERT INTO doctor (full_name,email,contect,specialty,exprience,massage,img) VALUES ('$full_name', '$email','$contect','$specialty','$exprience','$massage','$filename')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    echo '<script>alert("New record created successfully."); window.location.href = "doctor.php";</script>';
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

?>