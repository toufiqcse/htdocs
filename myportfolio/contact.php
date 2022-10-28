<?php
$title = ('Contact Us');
include('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center">Contact me</h4>
            <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="staticEmail" placeholder="email@example.com">
            </div>
  </div>
  <!-- <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div> -->
  <div class="mb-3 row">
    <label for="inputMessage" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
      <textarea name="inputMessage" id="inputMessage" cols="131" rows="4"></textarea>
    </div>
  </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 pb-5">
            <input type="button" value="Send" class="btn btn-info">
        </div>
    </div>
</div>

<?php
include('footer.php'); 
?>