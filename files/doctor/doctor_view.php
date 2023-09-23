<?php include '../../layout/header.php'; ?>
<style>
    body {
        background-color: #f9f9fa
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden;
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px;
    }

    .m-r-0 {
        margin-right: 0px;
    }

    .m-l-0 {
        margin-left: 0px;
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px;
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263);
    }

    .user-profile {
        padding: 20px 0;
    }

    .card-block {
        padding: 1.25rem;
    }

    .m-b-25 {
        margin-bottom: 25px;
    }

    .img-radius {
        border-radius: 5px;
    }



    h6 {
        font-size: 14px;
    }

    .card .card-block p {
        line-height: 25px;
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px;
        }
    }

    .card-block {
        padding: 1.25rem;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .card .card-block p {
        line-height: 25px;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .f-w-600 {
        font-weight: 600;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .user-card-full .social-link li {
        display: inline-block;
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
</style>
<?php include '../database/connection.php'; ?>
<?php
//  print_r($_GET);
//             die;
$id = $_GET['id'];
// Create the query
$query = "SELECT * FROM doctor where id=$id";

// Execute the query
$result = $conn->query($query);
$row = $result->fetch_assoc();
// echo"<pre>";
// print_r($row);
// die;
// Check if the query execution was successful
$id = $row['id'];
$full_name = $row['full_name'];
$email = $row['email'];
$contect = $row['contect'];
$specialty = $row['specialty'];
$exprience = $row['exprience'];
$img = $row['img'];
?>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-evenly">
            <div class="col-xl-6 col-md-12 text-center" style="width:1100px"  >
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="../../uploads/doctors/<?= $row['img']; ?>" style="    width: 300px;
    height: 300px;" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h4 class="f-w-600">
                                    <?= $row['full_name']; ?>
                                </h4>

                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block " style="height:500px" >
                                <h1 class="mt-5 p-b-5 b-b-default ">Information</h1>
                                <div class="row">
                                    <div class="col-6 mt-1">
                                        <h3 class="m-b-10 f-w-600">Email</h3>
                                        <h5 class="text-muted f-w-400">
                                            <?= $row['email']; ?>
                                        </h5>
                                    </div>
                                    <div class="col-sm-6 mt-1">
                                        <h3 class="m-b-10 f-w-600">Phone</h3>
                                        <h5 class="text-muted f-w-400">
                                            <?= $row['contect']; ?>
                                        </h5>
                                    </div>
                                </div>
                                <h1 class="mt-5  b-b-default f-w-600"></h1>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600 mt-1">specialty</h3>
                                        <h5 class="text-muted f-w-400">
                                            <?= $row['specialty']; ?>
                                        </h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="m-b-10 f-w-600 mt-1">year of exprience</h3>
                                        <h5 class="text-muted f-w-400">
                                            <?= $row['exprience']; ?>
                                        </h5>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10 h1">
                                    <li ><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="facebook" data-abc="true"><i
                                                class="fa-brands fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="twitter" data-abc="true"><i
                                                class="fa-brands fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="instagram" data-abc="true"><i
                                                class="fa-brands fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../../layout/footer.php'; ?>