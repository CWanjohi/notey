<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/notey/core/init.php';
  include 'includes/head.php';
?>

<div class="main-title text-center">
  <h3>Log In</h3>
</div>

<div class="container" id="login-form">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <hr>
      <form class="form-horizontal" method="post" role="form" action="process_login.php">
        <div class="form-group">
          <label class="control-label col-md-3" for="email">Email:</label>
          <div class="col-md-9">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3" for="password">Password:</label>
          <div class="col-md-9"> 
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
          </div>
        </div>
        <div class="form-group"> 
          <div class="checkbox">
            <label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
          </div>
        </div>
        <div class="form-group pull-right"> 
          <div class="col-md-9">
            <button type="submit" name="login" class="btn btn-default">Log In</button>
          </div>
        </div>
      </form>
      <div class="clearfix"></div>
      <hr>
  	  <div class="form-group">
        <p class="text-left">New Here? <a href="/notey/register.php" alt="register">Sign Up!</a></p>
  	    <p class="text-right"><a href="/notey/index.php" alt="home">Visit Site</a></p>
  	  </div>
    </div>
	</div>
</div>
<div class="clearfix" id="spacer"></div>

<?php
  include 'includes/footer.php';
?>
