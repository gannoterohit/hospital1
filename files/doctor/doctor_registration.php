<?php include '../../layout/header.php';?>
  <div class="container  text-dark">
    <h2 class="text-center">Doctor Registration</h2>
    <form class="text-dark" action="add.php" method="post" enctype="multipart/form-data">
      <div class="form-group ">
        <label for="name">Doctor Name</label>
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
  </div> 

  <?php include '../../layout/footer.php';?>