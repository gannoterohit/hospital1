<?php include '../../layout/header.php'; ?>
<div class="container ">
  <div class="row d-flex justify-content-evenly">
    <div class="col-lg-10">
      <div class="card">

        <form action="add.php" method="post">
          <div class="bg-warning text-white my-2">
          <h2 class="text-center my-2">Book an Appointment <a href="showdata.php"
              class="btn btn-dark text-white  float-end  ">appoinment list</a></h2>
</div>
          <div class="card-body">
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
              <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
            </div>
            <div class="form-group">
              <label for="department">Department</label>
              <select class="form-control" id="department" name="department">
                <option>Select department</option>
                <option>Cardiology</option>
                <option>Neurology</option>
                <option>Orthopedics</option>
                <option>ENT</option>
              </select>
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
              <label for="message">Additional Message</label>
              <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>

<div class="mt-2">
            <button type="submit" class="btn btn-primary ">Submit</button>
</div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>


<?php include '../../layout/footer.php'; ?>