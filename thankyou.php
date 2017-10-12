<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>MSU Solutions | THANK YOU</title>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- bootstrap css -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- custom css -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  
  <?php include dirname(__FILE__)."/header.php"; ?>

  <div class="container-fluid dealer thankyou">
    <div class="row">
      <div class="col-md-2 align-items-start">
      </div>


      <div class="col-md-8">
        <h2>THANK YOU!</h2>
        <span class="tagline">Your vehicle has been submitted. What would you like to do next?</span>

      </div>


      <div class="col-md-2 align-items-end">
      </div>
    </div>


    <div class="row">
      <div class="col-md-2">
      </div>


      <div class="col-md-2 align-items-center">
          <a class="btn btn-primary btn-xl" href="step-1.php" role="button">Export a Vehicle</a>
      </div>


      <div class="col-md-4 align-items-center">
        <hr class="top" />
        <span class="highlight">OR</span>
        <hr class="bottom" />
      </div>


      <div class="col-md-2 align-items-center">
        <a href="dashboard.php">
          <div class="circle">
            VIEW DASHBOARD
          </div>
        </a>
      </div>


      <div class="col-md-2">
      </div>
    </div>


    <div class="row">
      <div class="col-md-4">
      </div>


      <div class="col-md-4 align-items-center">
      </div>


      <div class="col-md-4">
      </div>
    </div>
  </div>
  <?php include dirname(__FILE__)."/footer.php"; ?>
  <!-- javascript start -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  <script src="css/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="js/script.js">
  </script> <!-- javascript end -->
</body>
</html>