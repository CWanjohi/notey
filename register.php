<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/notey/core/init.php';
  include 'includes/head.php';
?>

<div class="clearfix"></div>
<div class="container" id="login-form">
  <div class="row col-md-offset-3 col-md-6">
    <h2 class="text-center">Sign Up</h2><hr>
    <form class="form-horizontal" method="post" role="form" action="process/process_register.php">
      <div class="form-group">
        <label class="control-label col-md-4" for="firstname">First Name:</label>
        <div class="col-md-8">
          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-4" for="lastname">Last Name:</label>
        <div class="col-md-8">
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
        </div>
      </div>  
      <div class="form-group">
        <label class="control-label col-md-4" for="email">Email:</label>
        <div class="col-md-8">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-4" for="password">Password:</label>
        <div class="col-md-8"> 
          <input type="password" class="form-control" id="password" placeholder="Enter password">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-4" for="password">Confirm Password:</label>
        <div class="col-md-8"> 
          <input type="password" class="form-control" id="confirm" placeholder="Confirm password">
        </div>
      </div>
      <div class="form-group"> 
        <div class="checkbox">
          <label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
        </div>
      </div>
      <div class="form-group pull-right"> 
        <div class="col-md-8">
          <button type="submit" name="register" class="btn btn-default">Sign Up</button>
        </div>
      </div>
    </form>
    <div class="clearfix"></div>
    <div class="form-group clearfix col-md-12">
      <div class="col-md-6"><p class="text-left">Already a Member? <a href="/notey/login.php" alt="register">Log In</a></p></div>
      <div class="col-md-6"><p class="text-right"><a href="/notey/index.php" alt="home">Visit Site</a></p></div>
    </div>
  </div>
</div>

<?php
  include 'includes/footer.php';
?>