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
$query = "SELECT * FROM hospitalr where id=$id";

// Execute the query
$result = $conn->query($query);
$row = $result->fetch_assoc();

$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$Address = $row['Address'];
$department = $row['department'];
$message = $row['message'];


    ?>

<div class="container">
    <h2 class="text-center">Hospital Registration Edit <a href="showlist.php" class="btn btn-dark text-white  float-end">Hospital list</a></h2>
    <form action="update.php" method="post">
    <input type="hidden" value="<?= $id ?>" name="id">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your full name"  name="name" value="<?=$name?>">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email" value="<?=$email?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone"value="<?=$phone?>">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Enter your address" name="Address"value="<?=$Address?>">
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control" id="department" name="department" value="<?=$department?>">
          <option>Select department</option>
          <option>Cardiology</option>
          <option>Neurology</option>
          <option>Orthopedics</option>
          <option>ENT</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Additional Message</label>
        <textarea class="form-control" id="message" rows="3" name="message" value=""><?= $message?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

<?php include '../../layout/footer.php' ?>