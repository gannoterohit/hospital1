<!doctype html>
<html lang="en">


<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/hospital'; ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <title>Home page</title>
    <link href="<?= $base_url ?>/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base_url ?>/style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/style/css/owl.theme.default.min.css"> 
    <script></script>

</head>


<body>
    <nav class="navbar navbar-dark bg-dark text-white  navbar-expand-lg   shadow-sm  mt-2 py-5 ">
        <div class="container-fluid">
            <a class="navbar-brand h1 text-start " href="<?= $base_url ?>/index.php"> BHOPAL PLUS </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto  mb-2 mb-lg-0  ">
                    <li class="nav-item">
                        <a class="nav-link active  " aria-current="page" href="<?= $base_url ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  " href="<?= $base_url ?>/files/about.php">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active hover-white "
                            href="<?= $base_url ?>/files/appoinment/appoinment.php">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  " href="<?= $base_url ?>/files/doctor/doctor.php">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  " href="<?= $base_url ?>/files/hospital/hospital.php">Hospital</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  " href="<?= $base_url ?>/files/contect.php">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hospital";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>
    