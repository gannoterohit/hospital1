<?php include '../../layout/header.php';?>
  
<div class="container-fluid">
    <div class="row my-4 bg-warning text-dark ">
        <div class="col-lg-12 text-start ">

            <h4 class="my-2 text-center">Hospital <a href="hospital_registration.php" class="btn btn-outline-dark float-end my-2">Hospital Registration</a></h4>
        </div>
    </div>
    <div class="row justifiy-content-evenly doc-row">
        <?php
        // Create the query
        $query = "SELECT * FROM hospitalr ";

        // Execute the query
        $result = $conn->query($query);

        // Check if the query execution was successful
        if ($result) {
            // Fetch the data row by row
            $i = 1;
            foreach ($result as $row) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card  shadow p-3 mb-5 bg-body rounded">
                        <div class="text-center img">
                            <div className="show-icon" style="font-size:52px !important ;    position: absolute;
    right: 13px;
    top: 36px;color:red;">
                                <i class="fa-solid fa-hospital fa-2xl"></i>

                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-title"> Hospital Name:<br></p>
                            <h4>
                                <?= $row['name']; ?>
                                <h4>

                                    <h6 class="card-text">
                                        <?= $row['Address']; ?>
                                    </h6>
                                    <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
 
  <?php include '../../layout/footer.php';?>
