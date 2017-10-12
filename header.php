  <!-- header start -->
  <!-- dummy variable for logged in session state -->
  <?php 
    if (strtolower(basename($_SERVER["PHP_SELF"])) === 'index.php') {
      $bLoggedIn = false;
    } else {
      $bLoggedIn = true;
    }
  ?>
  <div class="container-fluid fixed-top">
    <div class="row">
      <div class="col-md-2">
        <a href="index.php"><img class="img-responsive" src="images/msu-logo-221x75.png"></a>
      </div>


      <div class="col-md-7">
      </div>


      <div class="col-md-3 align-items-end">
        <div>
          <?php if ($bLoggedIn) { ?>
            <a class="btn btn-primary btn-login btn-login-top logout" href="#" role="button">LOGOUT</a>
          <?php } else { ?>
          <a class="btn btn-primary btn-login btn-login-top" href="#" role="button">LOGIN</a> 
          <a class="btn btn-primary btn-signup" href="#" role="button">SIGN UP</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- header end -->