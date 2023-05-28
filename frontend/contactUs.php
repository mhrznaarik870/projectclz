<?php include('header.php') ?>

<div>
  <div class="container">
    <div class="banner-content1">
      <font size="6"><u>Contact our Officials!!</u></font><br><br>
      <div class="banner-content2">For any enquiries, Please E-mail us from the form below and also give us the
        feedback regarding this website!!
      </div><br>
      <form action="/action_page.php" class="submit">
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
            <textarea class="col-md-6 form-control"
              placeholder="Please give us the feedback regarding this website!"> </textarea>
            <br><br>
          </div>
        </div>
        <button class="btn1" type="submit">SUBMIT</button>
    </div>
  </div>
</div>

<?php include('footer.php') ?>