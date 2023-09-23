<?php
include '../database/connection.php'; 
// echo "<pre>";
// print_r($_POST);
// die;
?>
<?php include '../../layout/header.php';?>

<div class="container mt-4">
    <h4 class="my-4"> Hospital List <a class="btn btn-primary float-end" href="hospital.php">Hospital Ragistration</a></h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SNO.</th>
                
                <th>name	</th>
                <th>phone</th>
                <th>department</th>
                <th> Address</th>
                <th> </th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Create the query
            $query = "SELECT * FROM hospitalr";

            // Execute the query
            $result = $conn->query($query);

            // Check if the query execution was successful
            if ($result) {
                // Fetch the data row by row
                $i= 1;
                foreach ($result as $row) { ?>

                 <tr>
                        <td style="width:45px;"><?= $i++; ?></td>
                       
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td><?= $row['department']; ?></td>
                        <td><?= $row['Address']; ?></td>
                        
                        <td>
                            <form action="delete.php" method="post">
                            <input type="hidden" name="user_id" value="<?= $row['id'];?>">
                            <button class="btn btn-danger btn-sm">Delete</button>
                </form>
                        </td>
                <td>
                <form>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-dark btn-sm">Edit</a>
                </form>
                        </td>
                    </tr>


             <?php   }

                // Free the result set
              
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