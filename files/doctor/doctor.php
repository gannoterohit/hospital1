
<?php include '../../layout/header.php';?>

</div>
<div class="container-fluid">
    <div class="row my-4  mb-2 bg-warning text-dark ">
        <div class="col-lg-12 text-start  mt-2">
            <h4 class="my-2 text-center">Doctors 
                    <a href="doctor_registration.php" class="btn btn-outline-dark float-end my-2 p-2">Doctor Registration
                    </a>
                  </h4>
        </div>
    </div>
    <div class="row justifiy-content-evenly doc-row">

        <?php
        // Create the query
        $query = "SELECT * FROM doctor";

        // Execute the query
        $result = $conn->query($query);

        // Check if the query execution was successful
        if ($result) {
            // Fetch the data row by row
            $i = 1;
            foreach ($result as $row) {
                // print_r($row);
                // die;
                ?>


                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class="text-center">
                            <img src="../../uploads/doctors/<?= $row['img']; ?>" class="card-img-top img-fluid" style="  
    height: 260px ;" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-title"> Dr.name <br>
                            <P>
                            <h4>
                                <?= $row['full_name']; ?>
                                <h4>

                                    <!-- <p class="card-text">Specialty<br>
                                //$row['specialty'];  -->
                                    </p>
                                    <a href="<?=$base_url?>/files/doctor/doctor_view.php?id=<?= $row['id'] ?>" class="btn btn-primary">View
                                        Details </a>
                        </div>
                    </div>
                </div>

            <?php }
        } ?>

    </div>
</div>
  <!-- <div class="container  text-dark">
    <h2 class="text-center">Doctor Registration</h2>
    <form class="text-dark" action="add.php" method="post" enctype="multipart/form-data">
      <div class="form-group ">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="full_name">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number"name="contect">
      </div>
      <div class="form-group">
        <label for="specialty">Specialty</label>
        <input type="text" class="form-control" id="specialty" placeholder="Enter your specialty" name="specialty">
      </div>
      <div class="form-group">
        <label for="experience">Years of Experience</label>
        <input type="number" class="form-control" id="experience" placeholder="Enter your years of experience" name="exprience">
      </div>
      <div class="form-group">
        <label for="message">Additional Message</label>
        <textarea class="form-control" id="message" rows="3" name="massage"></textarea>
      </div>
     
      <label>Add your img</label>
      <input type="file" name="images" class="form-control" id="images" placeholder="Add your img" >
      <button type="submit" class="btn btn-primary mt-2">Register</button>
      <a href="show.php" class="btn btn-dark text-white mt-2 float-end">show list</a>

    </form>
  </div> -->

  <?php include '../../layout/footer.php';?>
