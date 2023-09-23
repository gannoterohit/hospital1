<?php
include '../database/connection.php'; 

?>
<?php
 $full_name = $_POST['full_name'];
 $email = $_POST['email'];
 $contect = $_POST['contect'];
 $specialty = $_POST['specialty'];
 $exprience = $_POST['exprience'];
 $massage = $_POST['massage'];
 $preview_img =$_POST['preview_img'];
 $id=$_POST['id'];
 
if($_FILES['img']['name'] !=''){
 $filename = 'doctor_img_' . time() . $_FILES["img"]["name"];
 $tempname = $_FILES["img"]["tmp_name"];
 $folder = "../../uploads/doctors/" . $filename;
 if (move_uploaded_file($tempname, $folder)) {
     echo "<h3>  Image uploaded successfully!</h3>";
 } else {
     echo "<h3>  Failed to upload image!</h3>";
 } 
}else{
   $filename=$_POST['preview_img'];
}  

$sql = "UPDATE doctor SET full_name='$full_name', email='$email',contect='$contect',specialty='$specialty',exprience='$exprience',massage='$massage',img='$filename'  WHERE id=$id";

if ($conn->query($sql) === TRUE) { 
    header("Location: http://localhost/hospital/files/doctor/show.php ");
    
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

 