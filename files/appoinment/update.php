<?php  include '../database/connection.php';


?>
<?php
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$date = $_POST['date'];
$message = $_POST['message'];
 $id=$_POST['id'];



$sql = "UPDATE appoinment SET full_name='$full_name', email='$email', phone='$phone', department='$department', date='$date', message='$message'  WHERE id=$id";

//  echo "<pre>";
// print_r($_POST);
// die;
if ($conn->query($sql) === TRUE) { 
  // echo "<pre>";
  // print_r($_POST);
  // die;
  header("Location: http://localhost/hospital/files/hospital/showlist.php");
    
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>