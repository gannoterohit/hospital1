<?php include '../../layout/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <h2 class="text-center">Hospital Registration <a href="showlist.php"
                        class="btn btn-dark text-white  float-end">Hospital list</a></h2>
                <div class="card-body">
                    <form action="adddata.php" method="post">
                        <div class="form-group">
                            <label for="name">Hospital Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your Hospital name"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number"
                                name="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter your address"
                                name="address">
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
                            <label for="message">Additional Message</label>
                            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../../layout/footer.php'; ?>