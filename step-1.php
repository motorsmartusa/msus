<?php
 header("Access-Control-Allow-Origin: *"); 
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>MSU Solutions | STEP 1 - VEHICLE DETAILS</title>
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
          <li role="presentation"><a class="active" href="#vehicle-details">VEHICLE DETAILS</a></li>
          <li role="presentation"><a href="#manufacture-label">MANUFACTURE LABEL</a></li>
          <li role="presentation"><a href="#recalls">RECALLS</a></li>
          <li role="presentation"><a href="#next-step">NEXT STEP</a></li>
        </ul>
      </div>

      <div class="col-md-8">
          <form name="step-1" method="post" action="step-2.php">
                <section id="vehicle-details">
                  <h2>VEHICLE DETAILS</h2>

                  <div class="sub-heading">Enter your <span class="highlight">VEHICLE DETAILS</span> below</div>

                  <div class="row align-items-end">
                      <div class="col-md-5">
                        <label>VIN*</label>
                        <input type="text" class="form-control vin-input" name="vin" required>
                        <i class="fa fa-check text-success form-control-feedback hidden"></i>
                      </div>

                      <div class="col-md-5">
                        <label>Confirm VIN*</label>
                        <input type="text" class="form-control vin-input" name="confirm_vin" required>
                        <i class="fa fa-check text-success form-control-feedback hidden"></i>
                      </div>
                      <div class="col-md-2">
                        <a role="button" class="btn btn-primary btn-lg vin-decoder" href="javascript:;" id="decodeVin" disabled>DECODE</a>
                      </div>
                  </div>
                  <div class="row align-items-end">
                      <div class="col-md-3">
                        <label>Year*</label>
                        <input type="text" class="form-control" name="year" required>
                      </div>
                      <div class="col-md-3">
                        <label>Make*</label>
                        <input type="text" class="form-control" name="make" required>
                      </div>
                      <div class="col-md-3">
                        <label>Model*</label>
                        <input type="text" class="form-control" name="model" required>
                      </div>
                      <div class="col-md-3">
                        <label>Series/Trim*</label>
                        <select class="form-control" name="series_trim" required>
                          <option value="">--</option>
                        </select>
                      </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Style*</label>
                      <select class="form-control" name="style" required>
                        <option value="">--</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Color*</label>
                      <select class="form-control" name="color" required>
                        <option value="">--</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Mileage*</label>
                      <input type="text" class="form-control" name="mileage" required>
                    </div>
                    <div class="col-md-3">
                      <div class="inside-radio">
                        <input type="radio" value="kms" id="unit_mileage_1" name="unit_mileage">
                        <label for="unit_mileage_1">KMS</label>
                        <input type="radio" value="miles" id="unit_mileage_2" name="unit_mileage">
                        <label for="unit_mileage_2">MILES</label>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Stock Number</label>
                      <input type="text" class="form-control" name="stock_number">
                    </div>
                    <div class="col-md-2">
                      <label>Value*</label>
                      <input type="text" class="form-control" name="value" required>
                    </div>
                    <div class="col-md-3">
                      <div class="inside-radio">
                        <input type="radio" name="currency" id="currency_1" value="cad">
                        <label for="currency_1">CAD</label>
                        <input type="radio" name="currency" id="currency_2" value="usd">
                        <label for="currency_2">USD</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                        <label>Fuel Type*</label>
                        <select class="form-control" name="fuel_type" required>
                          <option value="" selected>--</option>
                        </select>
                        
                    </div>
                    <div class="col-md-2">
                        <label>Displacement*</label>
                        <select class="form-control" name="displacement" required>
                        <option value="">--</option>
                      </select>
                    </div>
                  </div>
                </section>

                <section id="manufacture-label">
                  <h2>MANUFACTURE LABEL</h2>

                  <div class="sub-heading">Upload a picture of the <span class="highlight">MANUFACTURE LABEL</span> and enter the details below</div>
                
                  <div class="row align-items-center">
                    <div class="col-md-3">
                      <div class="btn btn-primary btn-lg">
                      Upload Image
                        <input type="file" class="upload">
                      </div>
                    </div>
                    <div class="col-md-9 align-items-center">

                      <div id="labelImage">
                        <img src="images/dummy-image.jpg">
                        <i class="fa fa-times"></i>
                        <a href="images/dummy-image.jpg" download><i class="fa fa-download"></i></a>
                        <i class="fa fa-search-plus"></i>
                      </div> 
                    </div>
                  </div>
                  <div class="row align-items-end">
                    
                    <div class="col-md-3">
                      <label>Manufactured By*</label>
                      <select class="form-control" name="manu_by" required>
                        <option value="">--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>Build Date (mm/yyyy)*</label>
                      <select name="build_month" class="form-control" required>
                        <option value="" selected>--</option>
                        <option value="01">1 - January</option>
                        <option value="02">2 - February</option>
                        <option value="03">3 - March</option>
                        <option value="04">4 - April</option>
                        <option value="05">5 - May</option>
                        <option value="06">6 - June</option>
                        <option value="07">7 - July</option>
                        <option value="08">8 - August</option>
                        <option value="09">9 - September</option>
                        <option value="10">10 - October</option>
                        <option value="11">11 - November</option>
                        <option value="12">12 - December</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <select name="build_year" class="form-control" required>
                        <option value="" selected>--</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                     </select> 
                    </div>
                    <div class="col-md-3">
                      <label>GVRW*</label>
                      <input type="text" class="form-control" name="gvrw" required>
                    </div>
                    <div class="col-md-2">
                      <div class="inside-radio">
                        <input type="radio" id="gvrw_unit_1" name="gvrw_unit" value="kgs">
                        <label for="gvrw_unit_1">KGS</label>
                        <input type="radio" id="gvrw_unit_2" name="gvrw_unit" value="lbs">
                        <label for="gvrw_unit_2">LBS</label>
                      </div>
                    </div>

                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-2">
                      <label>Front GAWR*</label>
                      <input type="text" class="form-control" name="front_gawr" required>
                    </div>
                    <div class="col-md-2">
                      <div class="inside-radio">
                        <input type="radio" id="front_gawr_unit_1" name="front_gawr_unit" value="kgs">
                        <label for="front_gawr_unit_1">KGS</label>
                        <input type="radio" id="front_gawr_unit_2" name="front_gawr_unit" value="lbs">
                        <label for="front_gawr_unit_2">LBS</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Front Tire Size*</label>
                      <select class="form-control" name="front_tire_size" required>
                        <option value="">--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>FR Rim Diameter*</label>
                      <select name="front_rim_diameter" class="form-control" required>
                        <option value="" selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>FR Rim Width*</label>
                      <select class="form-control" name="front_rim_width" required>
                        <option value="">--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>Front PSI*</label>
                      <select class="form-control" name="front_psi" required>
                        <option value="">--</option>
                      </select>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-2">
                      <label>Rear GAWR*</label>
                      <input type="text" class="form-control" name="rear_gawr" required>
                    </div>
                    <div class="col-md-2">
                      <div class="inside-radio">
                        <input type="radio" id="rear_gawr_unit_1" name="rear_gawr_unit" value="kgs">
                        <label for="rear_gawr_unit_1">KGS</label>
                        <input type="radio" id="rear_gawr_unit_2" name="rear_gawr_unit" value="lbs">
                        <label for="rear_gawr_unit_2">LBS</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Rear Tire Size*</label>
                      <select class="form-control" name="rear_tire_size" required>
                        <option value="">--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>RR Rim Diameter*</label>
                      <select class="form-control" name="rear_rim_diameter" required>
                        <option value="" selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>RR Rim Width*</label>
                      <select class="form-control" name="rear_rim_width" required>
                        <option value="" selected>--</option>
                      </select>

                    </div>
                    <div class="col-md-2">
                      <label>Rear PSI*</label>
                      <select class="form-control" name="rear_psi" required>
                        <option value="" selected>--</option>
                      </select>
                    </div>
                  </div>
                </section>

                <section id="recalls">
                  <h2>RECALLS</h2>

                  <div class="sub-heading">Check to see if there are any <span class="highlight">RECALLS</span> for his vehicles</div>

                  <div class="row">
                    <div class="col-md-4 border-right">
                      <div class="inside-button">
                        <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#recallsModal" data-recall="mfg">MANUFACTURE RECALL</a>
                        <a href="javascript:;" class="btn btn-primary btn-white">VIEW</a>
                      </div>
                      <div class="inside-button">
                        <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#recallsModal" data-recall="safercar">SAFERCAR RECALL</a>
                        <a href="javascript:;" class="btn btn-primary btn-white">VIEW</a>
                      </div>
                      <div class="inside-button">
                        <a href="javascript:;" class="btn btn-primary btn-white">RECALL SATISFACTION</a>
                        <a href="javascript:;" class="btn btn-primary btn-white">VIEW</a>
                      </div>
                    </div>
                    <div class="col-md-8 align-items-center">
                      <div id="pdfImage">
                        <img src="images/pdf-image.jpg" class="img-responsive">
                        <i class="fa fa-times"></i>
                        <i class="fa fa-download"></i>
                        <i class="fa fa-search-plus"></i>
                      </div>
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
          <a class="btn btn-primary btn-dashbrd btn-lg" href="dashboard.php" role="button">DASHBOARD</a>
        </div>
      </div>
    </div>
  </div>

  <?php include dirname(__FILE__)."/preview.php"; ?>
  <?php include dirname(__FILE__)."/recalls.php"; ?>
  <?php include dirname(__FILE__)."/footer.php"; ?>
  <!-- javascript start -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  <script src="css/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="js/script.js">
  </script>
  <script src="js/step-1.js">
  </script> 
  <script src="js/decode.js">
  </script> 
  <!-- javascript end -->
</body>
</html>
