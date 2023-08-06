<?php
session_start();
include('header.php');
?>

<div>
  <div class="container">
    <div class="banner-content1">

      <?php if (isset($_SESSION['success_message'])): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_SESSION['success_message']; ?>
        </div>
        <?php unset($_SESSION['success_message']); ?>
      <?php elseif (isset($_SESSION['error_message'])): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_SESSION['error_message']; ?>
        </div>
        <?php unset($_SESSION['error_message']); ?>
      <?php endif; ?>
      <font size="6"><u>Contact our Officials!!</u></font><br><br>
      <div class="banner-content2"> Please E-mail us from the form below to give us the
        feedback regarding this website!!
      </div><br>
      <form action="../backend/submit_form.php" method="POST">



        <div class="row">
          <div class="col-md-6" class="placeholder">
            <label for="name">Name: </label>
            <input type="text" id="name" class="form-control" name="name" placeholder="Enter your Name">
          </div>
          <div class="col-md-6" class="placeholder">
            <label class="col-md-4 " for="email">E-mail: </label>
            <input type="text" id="email" class="form-control" name="email" placeholder="Enter your Email"><br><br>
          </div>
          <div class="col-md-12" class="placeholder">
            <font class="comment">Comments: </font>
            <textarea class="col-md-6 form-control" name="comments"
              placeholder="Please give us the feedback regarding this website!"></textarea>
            <br><br>
          </div>
        </div>
        <button class="btn1" type="submit">SUBMIT</button>
      </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>