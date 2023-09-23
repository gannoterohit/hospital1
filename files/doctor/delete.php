<?php 
include '../database/connection.php'; 

$id=$_POST['user_id'];
// sql to delete a record
// echo "<pre>";
// print_r($_POST);
// die;
$sql = "DELETE FROM doctor WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/hospital/files/doctor/show.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>