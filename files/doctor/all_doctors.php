
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


  <?php include '../../layout/footer.php';?>
