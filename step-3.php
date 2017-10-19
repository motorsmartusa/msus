<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>MSU Solutions | STEP 3 - EXPORT DETAILS</title>
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
          <li role="presentation"><a href="step-2.php">BACK TO STEP 2</a></li>
          <li role="presentation"><a class="active" href="#exp">EXPORTER DETAILS</a></li>
          <li role="presentation"><a href="#dest">DESTINATION DETAILS</a></li>
          <li role="presentation"><a href="#trans">TRANSPORTER DETAILS</a></li>
          <!-- <li role="presentation"><a href="#bill">BILLING DETAILS</a></li> -->
          <li role="presentation"><a href="#title-request">TITLE REQUEST</a></li>
          <li role="presentation"><a href="#title">TITLE DETAILS</a></li>
          <li role="presentation"><a href="#label-details">RI LABEL DETAILS</a></li>
          <li role="presentation"><a href="#courier">ORDER COURIER</a></li>
          <li role="presentation"><a href="#done">SUBMIT</a></li>
        </ul>
      </div>
      <div class="col-md-8">
          <form name="step-3" method="post" action="thankyou.php">
                <section id="exp">
                  <h2>EXPORTER DETAILS</h2>

                  <div class="sub-heading">
                    Tell us who is <span class="highlight">EXPORTING</span> this vehicle
                    <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#exporterModal">ADD NEW</a>
                  </div>
                  
                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Exporter (Shipper)*</label>
                      <input type="text" class="form-control" name="exp_owner" required>
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name*</label>
                      <input type="text" class="form-control" name="exp_contact" required>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone*</label>
                      <input type="tel" class="form-control" name="exp_phone" required>
                    </div>
                    <div class="col-md-3">
                      <label>Fax</label>
                      <input type="tel" class="form-control" name="exp_fax">
                    </div>
                    <div class="col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" name="exp_email">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Unit</label>
                      <input type="text" class="form-control" name="exp_unit" pattern="[a-zA-Z0-9\s]{1,6}" title="Alphanumeric, max 6 digits.">
                    </div>
                    <div class="col-md-9">
                      <label>Address*</label>
                      <input type="text" class="form-control" name="exp_address" required>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>City*</label>
                      <input type="text" class="form-control" name="exp_city" required>
                    </div>
                    <div class="col-md-3">
                      <label>State/Province*</label>
                      <select class="form-control" name="exp_state" required>
                       <?php include dirname(__FILE__)."/states.php"; ?>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Zip/Postal Code*</label>
                      <input type="text" class="form-control" name="exp_postal_code" required>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                </section>
                <section id="dest">
                  <h2>DESTINATION DETAILS</h2>

                  
                  <div class="sub-heading">
                    Where is the <span class="highlight">DESTINATION</span> for the vehicle?
                    <a href="javascript:;"><i class="fa fa-pencil"></i></a>
                    <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#destinationModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Destination Name*</label>
                      <input type="text" class="form-control" name="dest_owner" required>
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name*</label>
                      <input type="text" class="form-control" name="dest_contact" required>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone*</label>
                      <input type="tel" class="form-control" name="dest_phone" required>
                    </div>
                    <div class="col-md-3">
                      <label>Fax</label>
                      <input type="tel" class="form-control" name="dest_fax">
                    </div>
                    <div class="col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" name="dest_email">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Unit</label>
                      <input type="text" class="form-control" name="dest_unit" pattern="[a-zA-Z0-9\s]{1,6}" title="Alphanumeric, max 6 digits.">
                    </div>
                    <div class="col-md-9">
                      <label>Address*</label>
                      <input type="text" class="form-control" name="dest_address" required>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>City*</label>
                      <input type="text" class="form-control" name="dest_city" required>
                    </div>
                    <div class="col-md-3">
                      <label>State/Province*</label>
                      <select class="form-control" name="dest_state" required>
                        <?php include dirname(__FILE__)."/states.php"; ?>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Zip/Postal Code*</label>
                      <input type="text" class="form-control" name="dest_postal_code" required>
                    </div>
                    <div class="col-md-3">
                      <label>Federal Tax ID</label>
                      <input type="text" class="form-control" name="dest_federal_tax_id" pattern="[0-9]{1,}" title="Numeric.">
                    </div>
                  </div>

                </section>
                <section id="trans">
                  <h2>TRANSPORTER DETAILS</h2>

                  <div class="sub-heading">Who is <span class="highlight">TRANSPORTING</span> this vehicle for you? 
                  <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#transporterModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Transporter Name*</label>
                      <input type="text" class="form-control" name="trans_company" required>
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name*</label>
                      <input type="text" class="form-control" name="trans_company_contact" required>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone*</label>
                      <input type="tel" class="form-control" name="trans_company_phone" required>
                    </div>
                    <div class="col-md-3">
                      <label>Fax</label>
                      <input type="tel" class="form-control" name="trans_company_fax">
                    </div>
                    <div class="col-md-6">
                      <label>Email*</label>
                      <input type="email" class="form-control" name="trans_company_email" required>
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-4">
                      <label>Est. Crossing Date* (mm/dd/yyyy)</label>
                      <input type="date" class="form-control" name="trans_estimated_crossing_date" required>
                    </div>
                    <div class="col-md-4">
                      <label>Port of Crossing*</label>
                      <select class="form-control" name="trans_port_of_crossing" required>
                        <option selected>--</option>
                        <option value="706">706 - Aden Wildhorse</option>
                        <option value="3410">3410 - Ambrose</option>
                        <option value="3004">3004 - Blaine</option>
                        <option value="3316">3316 - Chief Mountain</option>
                        <option value="705">705 - Coutts</option>
                        <option value="3322">3322 - Del Bonita</option>
                        <option value="103">103 - Eastport</option>
                        <option value="3417">3417 - Fortuna</option>
                        <option value="3408">3408 - Hannah</option>
                        <option value="3415">3415 - Hansboro</option>
                        <option value="3023">3023 - Lynden</option>
                        <option value="3416">3416 - Maida</option>
                        <option value="3319">3319 - Morgan</option>
                        <option value="3404">3404 - Neche</option>
                        <option value="1111">1111 - New Port - Alberta</option>
                        <option value="3420">3420 - Noonan</option>
                        <option value="3406">3406 - Northgate</option>
                        <option value="3317">3317 - Opheim</option>
                        <option value="3004">3004 - Peace Arch</option>
                        <option value="3401">3401 - Pembina</option>
                        <option value="3316">3316 - Piegan</option>
                        <option value="3017">3017 - Point Roberts</option>
                        <option value="3403">3403 - Portal</option>
                        <option value="3308">3308 - Porthill</option>
                        <option value="3301">3301 - Raymond</option>
                        <option value="3318">3318 - Roosville</option>
                        <option value="3409">3409 - Sarles</option>
                        <option value="3309">3309 - Scobey</option>
                        <option value="3405">3405 - St. John</option>
                        <option value="3009">3009 - Sumas</option>
                        <option value="3310">3310 - Sweet Grass</option>
                        <option value="3306">3306 - Turner</option>
                        <option value="3407">3407 - Walhalla</option>
                        <option value="3321">3321 - Whitlash Aden Wildhorse</option>
                        <option value="3323">3323 - Wild Horse</option>
                        <option value="3325">3325 - Willow Creek</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                    
                    </div>
                  </div>

                </section>
                <!-- <section id="bill">
                  <h2>BILLING DETAILS</h2>

                  <div class="sub-heading">Who should we send the <span class="highlight">INVOICE</span> to?
                  <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#billingModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Name on Invoice</label>
                      <input type="text" class="form-control" name="bill_name">
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name</label>
                      <input type="text" class="form-control" name="bill_contact">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone</label>
                      <input type="tel" class="form-control" name="bill_phone">
                    </div>
                    <div class="col-md-3">
                      <label>Fax</label>
                      <input type="tel" class="form-control" name="bill_fax">
                    </div>
                    <div class="col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" name="bill_email">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Unit</label>
                      <input type="text" class="form-control" name="bill_unit" pattern="[a-zA-Z0-9\s]{1,6}" title="Alphanumeric, max 6 digits.">
                    </div>
                    <div class="col-md-9">
                      <label>Address</label>
                      <input type="text" class="form-control" name="bill_address">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>City</label>
                      <input type="text" class="form-control" name="bill_city">
                    </div>
                    <div class="col-md-3">
                      <label>State/Province</label>
                      <select class="form-control" name="bill_state">
                        <?php /* include dirname(__FILE__)."/states.php"; */ ?>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Zip/Postal Code</label>
                      <input type="text" class="form-control" name="bill_postal_code">
                    </div>
                    <div class="col-md-3">
                      <label>Send Via</label>
                      <input type="text" class="form-control" name="bill_send_via">
                    </div>
                  </div>

                </section> -->
                <section id="title-request">
                  <h2>TITLE REQUEST</h2>

                  <div class="sub-heading">Need us to get a <span class="highlight">TITLE</span> for this vehicle?</div>

                  <div class="row align-items-center">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="radio1" value="request_title" name="title">
                      <label for="radio1">REQUEST A TITLE</label>
                    </div>
                    <div class="col-md-2">
                      <hr class="top" />
                      <span class="highlight">OR</span>
                      <hr class="bottom" />
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="radio2" value="get_own_title" name="title">
                      <label for="radio2">I WILL GET MY OWN</label>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                </section>
                <section id="title">
                  <h2>TITLE DETAILS</h2>

                  <div class="sub-heading">Where are we sending the <span class="highlight">TITLE</span>?
                  <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#titleModal">ADD NEW</a>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12">
                          <label>Title Destination*</label>
                          <input type="text" class="form-control" name="title_sent_to" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Delivery Service*</label>
                          <select class="form-control" name="title_delivery_service" required>
                            <option selected>--</option>
                            <option>Standard</option>
                            <option>Rush</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label>Notes</label>
                      <textarea rows="4" class="form-control" name="title_notes"></textarea>
                    </div>
                  </div>

                </section>
                <section id="label-details">
                  <h2>RI LABEL DETAILS</h2>

                  <div class="sub-heading">Where do you want the <span class="highlight">LABEL</span> sent to?
                    <a role="button" class="btn btn-primary" data-toggle="modal" data-target="#labelModal">ADD NEW</a>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Is the RI Label going to the same address as the Title?*</label>
                        </div>
                        <div class="col-md-6">
                          <div class="inside-radio">
                            <input type="radio" value="yes" id="ri_label_1" name="label_same_as_title" required>
                            <label for="ri_label_1">YES</label>
                            <input type="radio" value="no" id="ri_label_2" name="label_same_as_title">
                            <label for="ri_label_2">NO</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Label Destination*</label>
                          <select class="form-control manual-intercept" name="label_destination" required>
                            <option selected>--</option>
                            <option value="Importers Storage Yard">Importers Storage Yard</option>
                            <option value="!MANUAL">Fill manually..</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Delivery Service*</label>
                          <select class="form-control" name="label_delivery_service" required>
                            <option selected>--</option>
                            <option>Standard</option>
                            <option>Rush</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label>Notes</label>
                      <textarea class="form-control" name="label_notes"></textarea>
                    </div>
                  </div>

                </section>
                <section id="courier">
                  <h2>ORDER COURIER</h2>

                  <div class="sub-heading">Do you want to order <span class="highlight">COURIER</span> services for this vehicle?* <span class="note">(fees apply)</span> </div>
                  
                  <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6 align-center">
                      <div class="inside-radio">
                        <input type="radio" value="yes" id="courier_1" name="order_courier" required>
                        <label for="courier_1">ORDER COURIER</label>
                        <input type="radio" value="no" id="courier_2" name="order_courier">
                        <label for="courier_2">NO THANKS</label>
                      </div>
                    </div>
                    <div class="col-md-3">

                    </div>
                  </div>

                </section>
  
                <section id="done">
                  <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 text-center">
                      <button class="btn btn-primary btn-xl" type="submit">SUBMIT</button>
                    </div>

                    <div class="col-md-2">


                    </div>
                  </div>

                  <div class="sub-heading">Click Submit &amp; You're All <span class="highlight">DONE</span></div>
                </section>

          </form>
      </div>

      <div class="col-md-2">
        <div class="sidebar">
          <a class="btn btn-primary btn-ask" href="#footer" role="button">ASK A QUESTION</a>
          <a class="btn btn-primary btn-dashbrd" href="dashboard.php" role="button">DASHBOARD</a>
        </div>
      </div>
    </div>
  </div>

  <?php include dirname(__FILE__)."/exporter.php"; ?>
  <?php include dirname(__FILE__)."/destination.php"; ?>
  <?php include dirname(__FILE__)."/transporter.php"; ?>
  <?php include dirname(__FILE__)."/title.php"; ?>
  <?php include dirname(__FILE__)."/label.php"; ?>

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
