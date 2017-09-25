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
        <ul class="nav nav-pills nav-stacked sidebar">
          <li role="presentation" class="active"><a href="#vehicle-details">VEHICLE DETAILS</a></li>
          <li role="presentation"><a href="#manufacture-label">MANUFACTURE LABEL</a></li>
          <li role="presentation"><a href="#recalls">RECALLS</a></li>
          <li role="presentation"><a href="#next-step">NEXT STEP</a></li>
        </ul>
      </div>

      <div class="col-md-8">
          <form name="step-1" method="post" action="step-2.php">
                <section>
                  <h2><a name="vehicle-details"></a>VEHICLE DETAILS</h2>

                  <div class="sub-heading">Enter your <span class="highlight">VEHICLE DETAILS</span> below</div>

                  <div class="row align-items-end">
                      <div class="col-md-5">
                        <label>VIN*</label>
                        <input type="text" class="form-control" name="vin">
                      </div>

                      <div class="col-md-5">
                        <label>Confirm VIN*</label>
                        <input type="text" class="form-control" name="confirm_vin" >
                      </div>
                      <div class="col-md-2">
                        <a role="button" class="btn btn-primary btn-lg" href="javascript:;" id="decode">DECODE</a>
                      </div>
                  </div>
                  <div class="row align-items-end">
                      <div class="col-md-3">
                        <label>Year*</label>
                        <input type="text" class="form-control" name="year">
                      </div>
                      <div class="col-md-3">
                        <label>Make*</label>
                        <input type="text" class="form-control" name="make">
                      </div>
                      <div class="col-md-3">
                        <label>Model*</label>
                        <input type="text" class="form-control" name="model">
                      </div>
                      <div class="col-md-3">
                        <label>Series/Trim</label>
                        <input type="text" class="form-control" name="series_trim">
                      </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Style*</label>
                      <input type="number"  class="form-control" name="style">
                    </div>
                    <div class="col-md-3">
                      <label>Color</label>
                      <input type="text" class="form-control" name="color">
                    </div>
                    <div class="col-md-3">
                      <label>Mileage*</label>
                      <input type="text" class="form-control" name="mileage">
                    </div>
                    <div class="col-md-3">
                      <div class="inside-radio">
                        <input type="radio" value="kms" id="radio1" name="unit_mileage">
                        <label for="radio1">KMS</label>
                        <input type="radio" value="miles" id="radio2" name="unit_mileage">
                        <label for="radio2">MILES</label>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Stock Number</label>
                      <input type="text" class="form-control" name="stock_number">
                    </div>
                    <div class="col-md-2">
                      <label>Value</label>
                      <input type="text" class="form-control" name="value">
                    </div>
                    <div class="col-md-3">
                      <div class="inside-radio">
                        <input type="radio" name="currency" id="radio3" value="cad">
                        <label for="radio3">CAD</label>
                        <input type="radio" name="currency" id="radio4" value="usd">
                        <label for="radio4">USD</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                        <label>Fuel Type</label>
                        <select class="form-control" name="fuel_type">
                          <option></option>
                          <option>Diesel</option>
                          <option>Gas</option>
                          <option>Propane</option>
                          <option>Electric</option>
                          <option>Hybrid</option>
                        </select>
                        
                    </div>
                    <div class="col-md-2">
                        <label>Displacement</label>
                        <input type="text" class="form-control" name="displacement">
                    </div>
                  </div>
                </section>

                <section>

                  <h2><a name="manufacture-label"></a>MANUFACTURE LABEL</h2>

                  <div class="sub-heading">Upload a picture of the <span class="highlight">MANUFACTURE LABEL</span> and enter the details below</div>
                
                  <div class="row align-items-center">
                    <div class="col-md-3">
                      <div class="file-upload btn btn-primary btn-lg">
                      Upload Image
                        <input type="file" class="upload">
                      </div>
                    </div>
                    <div class="col-md-9 text-center">

                      <div><img src="images/dummy-image.jpg" class="img-responsive"></div> 
                      <!-- TODO: add zoom, delete, and download-->
                    </div>
                  </div>
                  <div class="row align-items-end">
                    
                    <div class="col-md-4">
                      <label>Manufactured By</label>
                      <input type="text" class="form-control" name="manu_by" >
                    </div>
                    <div class="col-md-2">
                      <label>Build Date (mm/yyyy)</label>
                      <select name="build_month" class="form-control">
                        <option></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                    </div>
                    <div class="col-md-1">
                      <!-- <label></label> -->
                      <select name="build_year" class="form-control">
                        <option></option>
                        <option>1980</option>
                        <option>1981</option>
                        <option>1982</option>
                        <option>1983</option>
                        <option>1984</option>
                        <option>1985</option>
                        <option>1986</option>
                        <option>1987</option>
                        <option>1988</option>
                        <option>1989</option>
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                     </select> 
                    </div>
                    <div class="col-md-3">
                      <label>GVRW</label>
                      <input type="text" class="form-control" name="gvrw">
                    </div>
                    <div class="col-md-2">
                      <div class="inside-radio">
                        <input type="radio" id="kgs" name="gvrw_unit" value="kgs">
                        <label for="kgs">KGS</label>
                        <input type="radio" id="lbs" name="gvrw_unit" value="lbs">
                        <label for="lbs">LBS</label>
                      </div>
                    </div>

                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-2">
                      <label>Front GAWR</label>
                      <input type="text" class="form-control" name="front_gawr">
                    </div>
                    <div class="col-md-2">
                      <div class="inside-radio">
                        <input type="radio" id="kgs" name="front_gawr_unit" value="kgs">
                        <label for="kgs">KGS</label>
                        <input type="radio" id="lbs" name="front_gawr_unit" value="lbs">
                        <label for="lbs">LBS</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Front Tire Size</label>
                      <input type="text" class="form-control" name="front_tire_size">
                    </div>
                    <div class="col-md-2">
                      <label>FR Rim Diameter</label>
                      <select name="front_rim_diameter" class="form-control">
                        <option>14"</option>
                        <option>15"</option>
                        <option>16"</option>
                        <option>17"</option>
                        <option>18"</option>
                        <option>19"</option>
                        <option>20"</option>
                        <option>21"</option>
                        <option>22"</option>
                        <option>23"</option>
                        <option>24"</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>FR Rim Width</label>
                      <input type="text" class="form-control" name="front_rim_width">
                    </div>
                    <div class="col-md-2">
                      <label>Front PSI</label>
                      <input type="text" class="form-control" name="front_psi">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-2">
                      <label>Rear GAWR</label>
                      <input type="text" class="form-control" name="rear_gawr">
                    </div>
                    <div class="col-md-2">
                      <div class="inside-radio">
                        <input type="radio" id="kgs" name="rear_gawr_unit" value="kgs">
                        <label for="kgs">KGS</label>
                        <input type="radio" id="lbs" name="rear_gawr_unit" value="lbs">
                        <label for="lbs">LBS</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <label>Rear Tire Size</label>
                      <input type="text" class="form-control" name="rear_tire_size">
                    </div>
                    <div class="col-md-2">
                      <label>RR Rim Diameter</label>
                      <select name="rear_rim_diameter" class="form-control">
                        <option>14"</option>
                        <option>15"</option>
                        <option>16"</option>
                        <option>17"</option>
                        <option>18"</option>
                        <option>19"</option>
                        <option>20"</option>
                        <option>21"</option>
                        <option>22"</option>
                        <option>23"</option>
                        <option>24"</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>RR Rim Width</label>
                      <input type="text" class="form-control" name="rear_rim_width">
                    </div>
                    <div class="col-md-2">
                      <label>Rear PSI</label>
                      <input type="text" class="form-control" name="rear_psi">
                    </div>
                  </div>
                </section>

                <section>

                  <h2><a name="recalls"></a>RECALLS</h2>

                  <div class="sub-heading">Check to see if there are any <span class="highlight">RECALLS</span> for his vehicles</div>

                  <div class="row">
                    <div class="col-md-4 border-right">
                      <div class="inside-button">
                        <a href="javascript:;" class="btn btn-primary">MANUFACTURE RECALL</a>
                        <a href="JavaScript:;" class="btn btn-primary btn-white">VIEW</a>
                      </div>
                      <div class="inside-button">
                        <a href="javascript:;" class="btn btn-primary">SAFECAR RECALL</a>
                        <a href="JavaScript:;" class="btn btn-primary btn-white">VIEW</a>
                      </div>
                      <div class="inside-button">
                        <a href="javascript:;" class="btn btn-primary btn-white">RECALL SATISFACTION</a>
                        <a href="JavaScript:;" class="btn btn-primary btn-white">VIEW</a>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="text-center"><img src="images/pdf-image.jpg" class="img-responsive"></div>
                    </div>
                  </div>

                </section>
  
                <section>
                  <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 text-center">
                      <a name="next-step"></a>
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
