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
$query = "SELECT * FROM doctor where id=$id";

// Execute the query
$result = $conn->query($query);
$row = $result->fetch_assoc();
// echo "<pre>";
// print_r($row);
// die;
$full_name = $row['full_name'];
$email = $row['email'];
$contect = $row['contect'];
$specialty = $row['specialty'];
$exprience = $row['exprience'];
$massage = $row['massage'];
$img = $row['img'];

    ?>
<div class="container  text-dark">
    <h2 class="text-center">Doctor Registration Edit</h2>

    <form class="text-dark" action="update_data.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $id ?>" name="id">
        <div class="form-group ">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="full_name"
                value="<?= $full_name ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email"
                value="<?= $email ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="contect"
                value="<?= $contect ?>">
        </div>
        <div class="form-group">
            <label for="specialty">Specialty</label>
            <input type="text" class="form-control" id="specialty" placeholder="Enter your specialty" name="specialty"
                value="<?= $specialty ?>">
        </div>
        <div class="form-group">
            <label for="experience">Years of Experience</label>
            <input type="number" class="form-control" id="experience" placeholder="Enter your years of experience"
                name="exprience" value="<?= $exprience ?>">
        </div>
        <div class="form-group">
            <label for="message">Additional Message</label>
            <textarea class="form-control" id="message" rows="3" name="massage" value=""> <?= $massage ?></textarea>
        </div>
        <div class="form-group">
            <label> images</label>
            <img src="../../uploads/doctors/<?= $img ?>" width="100px;" />
            <input type="hidden" value="<?= $img ?>" name="preview_img" />
        </div>
        <label>Add your img</label>
        <input type="file" name="img" class="form-control" id="img" placeholder="Add your img">
        <button type="submit" class="btn btn-primary mt-2">Register</button>
        <a href="show.php" class="btn btn-dark text-white mt-2 float-end">show list</a>

    </form>
</div>

<?php include '../../layout/footer.php' ?>