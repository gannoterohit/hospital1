<?php  include '../database/connection.php';


?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$Address = $_POST['Address'];
$department = $_POST['department'];
$message = $_POST['message'];
 $id=$_POST['id'];
 


$sql = "UPDATE hospitalr SET name='$name', email='$email', phone='$phone', Address='$Address', department='$department', message='$message'  WHERE id=$id";

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

 
