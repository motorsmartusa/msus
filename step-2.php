<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>MSU Solutions | STEP 2 - PICTURES</title>
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

  <div class="container-fluid export">
    <div class="row">
      <div class="col-md-2">
        <ul class="sidebar">
          <li role="presentation"><a href="step-1.php">BACK TO STEP 1</a></li>
          <li role="presentation"><a class="active" href="#pictures">PICTURES</a></li>
          <li role="presentation"><a href="#next-step">NEXT STEP</a></li>
        </ul>
      </div>

      <div class="col-md-8">
          <form name="step-2" method="post" action="step-3.php">
                <section id="pictures">
                  <h2>PICTURES</h2>

                  <div class="sub-heading">Choose which <span class="highlight">PICTURE</span> option you would like</div>

                  <div class="row align-items-center" id="pictureOption">
                    <div class="col-md-3">
                      <a class="btn btn-primary btn-lg" href="javscript:;" role="button" id="uploadLnk">UPLOAD PICTURES</a>
                    </div>
                    <div class="col-md-1">
                      <hr class="top" />
                      <span class="highlight">OR</span>
                      <hr class="bottom" />
                    </div>
                    <div class="col-md-3">
                      <input type="radio" id="radio1" value="send_later" name="pictures">
                      <label for="radio1">SEND LATER</label>
                    </div>
                    <div class="col-md-1">
                      <hr class="top" />
                      <span class="highlight">OR</span>
                      <hr class="bottom" />
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="radio2" value="importer_takes" name="pictures">
                      <label for="radio2">IMPORTER TAKES PICTURES</label>
                    </div>
                  </div>

                  <div class="row" id="pictureUpload">
                    <div class="col-md-4 align-items-center">
                      <div class="pictureUploadCont">
                        <i class="fa fa-plus"></i>
                      </div>
                      <select name="photoLocation" class="form-control">
                        <option disabled selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-4 align-items-center">
                      <div class="pictureUploadCont">
                        <i class="fa fa-plus"></i>
                      </div>
                      <select name="photoLocation" class="form-control">
                        <option disabled selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-4 align-items-center">
                      <div class="pictureUploadCont">
                        <i class="fa fa-plus"></i>
                      </div>
                      <select name="photoLocation" class="form-control">
                        <option disabled selected>--</option>
                      </select>
                    </div>
                  </div>

                </section>

  
                <section id="next-step">
                  <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 text-center">
                      <button class="btn btn-primary btn-xl" type="submit">NEXT STEP</button>
                    </div>

                    <div class="col-md-2">


                    </div>
                  </div>

                  <div class="sub-heading">Only a couple more <span class="highlight">STEPS</span> left</div>
                </section>

          </form>
      </div>

      <div class="col-md-2">
        <div class="sidebar">
          <a class="btn btn-primary btn-ask btn-lg" href="#footer" role="button">ASK A QUESTION</a>
          <a class="btn btn-primary btn-dashbrd btn-lg" href="javscript:;" role="button">DASHBOARD</a>

          <div id="pictureUploadInst">
            <span class="highlight">Instructions</span>
            <ol>
              <li>Press <span>+</span> to add a picture</li>
              <li>Browse and select the picture you would like to upload</li>
              <li>Select the location of the picture from the drop down</li>
              <li>Hover over the picture to zoom in, delete it or download it.</li>
            </ol> 
            <span class="highlight">Picture List</span>
            <ol>
              <li>Front/Driver Side</li>
              <li>Rear/Passenger Side</li>
              <li>Passenger Airbag</li>
              <li>VIN Plate</li>
              <li>Steering Airbag</li>
              <li>Cluster with lights on</li>
              <li>Miles</li>
              <li>KMS</li>
              <li>Manufacture Label</li>
              <li>Tire Label</li>
              <li>RI Label</li>
            </ol>
          </div>
        </div>
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
