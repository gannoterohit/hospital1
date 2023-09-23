
<?php include '../layout/header.php';?>
  <div class="container">
    <h1>Contact Us</h1>
    <p>If you have any questions, suggestions, or feedback, please feel free to contact us using the form below:</p>
    <form>
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php include '../layout/footer.php';?>
