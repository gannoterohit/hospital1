<?php
include '../database/connection.php';
// echo "<pre>";
// print_r($_GET);
// die;
?>
<?php include '../../layout/header.php'; ?>
<?php
$id = $_GET['id'];
// echo "<pre>";
// print_r($id);
// die;
// Create the query
$query = "SELECT * FROM appoinment where id=$id";

// Execute the query
$result = $conn->query($query);
$row = $result->fetch_assoc();
// echo "<pre>";
// print_r($row);
// die;


$full_name = $row['full_name'];
$email = $row['email'];
$phone = $row['phone'];
$department = $row['department'];
$date = $row['date'];
$message = $row['message'];

    ?>

<form  action="update.php" method="post">

     
<h2 class="text-center">Book an Appointment <a href="showdata.php" class="btn btn-dark text-white  float-end">appoinment list</a></h2>
<input type="hidden" value="<?= $id ?>" name="id">
<div class="form-group ">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="full_name"value="<?=$full_name?>">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email"value="<?=$email?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone"value="<?=$phone?>">
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department" name="department"value="<?=$department?>">
          <option>Select department</option>
          <option>Cardiology</option>
          <option>Neurology</option>
          <option>Orthopedics</option>
          <option>ENT</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date"value="<?=$date?>">
      </div>
      <div class="form-group">
        <label for="message">Additional Message</label>
        <textarea class="form-control" id="message" rows="3" name="message" value=""><?=$message?></textarea>
      </div>
      
        
      <button type="submit" class="btn btn-primary ">Submit</button>
      

    </form>
  </div>

<?php include '../../layout/footer.php' ?>