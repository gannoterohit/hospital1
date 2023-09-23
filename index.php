<?php include 'layout/header.php'; ?>
<!--
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators" style="height: 600px;">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/i1.avif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/i2.avif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/i3.avif" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->

<div class="container-fluid">
    <div class="row my-4">
        <div class="col-lg-3">
            <a class="card bg-info" href="files/doctor/doctor.php">
                <div class="card-body">
                    <h4>Total Doctor</h4>
                    <p class="p-0 m-o">View All</p>
                    <?php
                    $query = "SELECT COUNT(id) AS count FROM doctor";
                    $result = $conn->query($query);

                    if ($result) {
                        $row = $result->fetch_assoc();
                        $count = $row['count'];

                    }
                    ?>
                    <span>
                        <?php echo $count; ?>
                    </span>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="card bg-warning" href="files/hospital/hospital.php">
                <div class="card-body">
                    <h4>Hospitals</h4>
                    <p class="p-0 m-o">All Registered Hospitals</p>
                    <?php
                    $query = "SELECT COUNT(id) AS count FROM hospitalr";
                    $result = $conn->query($query);

                    if ($result) {
                        $row = $result->fetch_assoc();
                        $count = $row['count'];

                    }
                    ?>
                    <span>
                        <?php echo $count; ?>
                    </span>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="card bg-success text-white" href="files/appoinment/appoinment.php">
                <div class="card-body">
                    <h4>Appointments</h4>
                    <p class="p-0 m-o">All Registered Appointments</p>
                    <?php
                    $query = "SELECT COUNT(id) AS count FROM appoinment";
                    $result = $conn->query($query);

                    if ($result) {
                        $row = $result->fetch_assoc();
                        $count = $row['count'];

                    }
                    ?>
                    <span>
                        <?php echo $count; ?>
                    </span>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a class="card bg-danger text-white" href="files/hospital/hospital.php">
                <div class="card-body">
                    <h4>Covid Patients</h4>
                    <p class="p-0 m-o">All Covid Hospitals</p>
                    <span>0</span>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- <div class="row">
<div class="col-lg-12 text-start  mt-2">
<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
                </div>
</div> -->

<div class="container-fluid">
    <div class="row my-4 bg-info text-dark ">
        <div class="col-lg-12 text-start  mt-2">
            <h4 class="my-2 text-center">Doctors <a href="files/doctor/all_doctors.php"
                    class="btn btn-outline-dark float-end my-2">View
                    More</a></h4>
        </div>
    </div>
    <div class="row justifiy-content-evenly doc-row">

        <?php
        // Create the query
        $query = "SELECT * FROM doctor LIMIT 4";

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


                <div class="col-lg-3   col-md-6 mb-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded items">
                        <div class="text-center  ">
                            <img src="uploads/doctors/<?= $row['img']; ?>" class="card-img-top img-fluid" style="  
    height: 260px ;" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-title"> <br>
                            <P>
                            <h4>
                                <?= $row['full_name']; ?>
                            </h4>

                            <!-- <p class="card-text">Specialty<br>
                                //$row['specialty'];  -->
                            </p>

                            <a href="files/doctor/doctor_view.php?id=<?= $row['id'] ?>" class="btn btn-primary">View
                                Details </a>
                        </div>
                    </div>
                </div>

            <?php }
        } ?>

    </div>
</div>

<div class="container-fluid">
    <div class="row my-4 bg-warning text-dark ">
        <div class="col-lg-12 text-start ">

            <h4 class="my-2 text-center">Hospital <a href="#" class="btn btn-outline-dark float-end my-2">View More</a>
            </h4>
        </div>
    </div>
    <div class="row justifiy-content-evenly doc-row">
        <?php
        // Create the query
        $query = "SELECT * FROM hospitalr limit 6";

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
                            <p class="card-title"></p>
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
        <script type="text/javascript">
            $(document).ready(function () {
                alert();
            })
            // $('.loop').owlCarousel({
            //     center: true,
            //     items: 2,
            //     loop: true,
            //     margin: 10,
            //     responsive: {
            //         600: {
            //             items: 4
            //         }
            //     }
            // });
            // $('.nonloop').owlCarousel({
            //     center: true,
            //     items: 2,
            //     loop: false,
            //     margin: 10,
            //     responsive: {
            //         600: {
            //             items: 4
            //         }
            //     }
            // });
            // $('.owl-carousel').owlCarousel({
            //     loop: true,
            //     margin: 10,
            //     nav: true,
            //     responsive: {
            //         0: {
            //             items: 1
            //         },
            //         600: {
            //             items: 3
            //         },
            //         1000: {
            //             items: 5
            //         }
            //     }
            // })
        </script>


        <?php include 'layout/footer.php' ?>