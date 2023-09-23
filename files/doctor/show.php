<?php
include '../database/connection.php';
?>
<?php include '../../layout/header.php'; ?>
<div class="container mt-4">
    <h4 class="my-4"> DR. List <a class="btn btn-primary float-end" href="doctar.php">Add Recored Here</a></h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SNO.</th>
                <th>img</th>
                <th>DR.name</th>
                <th>specialty</th>
                <th>Exprince</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Create the query
            $query = "SELECT * FROM doctor";

            // Execute the query
            $result = $conn->query($query);

            // Check if the query execution was successful
            if ($result) {
                // Fetch the data row by row
                $i = 1;
                foreach ($result as $row) { ?>



                    <tr>
                        <td style="width:45px;">
                            <?= $i++; ?>
                        </td>
                        <td><img src="../../uploads/doctors/<?= $row['img']; ?>" width="100px;" /></td>
                        <td>
                            <?= $row['full_name']; ?>
                        </td>
                        <td>
                            <?= $row['specialty']; ?>
                        </td>
                        <td>
                            <?= $row['exprience']; ?>
                        </td>

                        <td>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        <td>

                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-dark btn-sm">Edit</a>

                        </td>
                    </tr>


                <?php }

                // Free the result set
                $result->free();
            } else {
                // Query execution failed
                // echo "Error: " . $mysqli->error;
            }

            // Close the database connection
            
            ?>
        </tbody>
    </table>
</div>


<?php include '../../layout/footer.php' ?>