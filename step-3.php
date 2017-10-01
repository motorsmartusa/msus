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
          <li role="presentation"><a href="#bill">BILLING DETAILS</a></li>
          <li role="presentation"><a href="#title-request">TITLE REQUEST</a></li>
          <li role="presentation"><a href="#title">TITLE DETAILS</a></li>
          <li role="presentation"><a href="#label-details">RI LABEL DETAILS</a></li>
          <li role="presentation"><a href="#courier">ORDER COURIER</a></li>
          <li role="presentation"><a href="#done">SUBMIT</a></li>
        </ul>
      </div>
      <div class="col-md-8">
          <form name="step-3" method="post" action="dealermain.php">
                <section id="exp">
                  <h2>EXPORTER DETAILS</h2>

                  <div class="sub-heading">
                    Tell us who is <span class="highlight">EXPORTING</span> this vehicle
                    <a role="button" class="btn btn-primary btn-med" data-toggle="modal" data-target="#exporterModal">ADD NEW</a>
                  </div>
                  
                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Exporter (Shipper)</label>
                      <input type="text" class="form-control" name="exp_owner">
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name</label>
                      <input type="text" class="form-control" name="exp_contact">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone</label>
                      <input type="tel" class="form-control" name="exp_phone">
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
                      <input type="text" class="form-control" name="exp_unit">
                    </div>
                    <div class="col-md-9">
                      <label>Address</label>
                      <input type="text" class="form-control" name="exp_address">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>City</label>
                      <input type="text" class="form-control" name="exp_city">
                    </div>
                    <div class="col-md-3">
                      <label>State/Province</label>
                      <select class="form-control" name="exp_state">
                        <option selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Zip/Postal Code</label>
                      <input type="text" class="form-control" name="exp_postal_code">
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                </section>
                <section id="dest">
                  <h2>DESTINATION DETAILS</h2>

                  
                  <div class="sub-heading">
                    Where is the <span class="highlight">DESTINATION</span> for the vehicle?
                    <a role="button" class="btn btn-primary btn-med" data-toggle="modal" data-target="#destinationModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Destination Name</label>
                      <input type="text" class="form-control" name="dest_owner">
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name</label>
                      <input type="text" class="form-control" name="dest_contact">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone</label>
                      <input type="tel" class="form-control" name="dest_phone">
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
                      <input type="text" class="form-control" name="dest_unit">
                    </div>
                    <div class="col-md-9">
                      <label>Address</label>
                      <input type="text" class="form-control" name="dest_address">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>City</label>
                      <input type="text" class="form-control" name="dest_city">
                    </div>
                    <div class="col-md-3">
                      <label>State/Province</label>
                      <select class="form-control" name="dest_state">
                        <option selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>Zip/Postal Code</label>
                      <input type="text" class="form-control" name="dest_postal_code">
                    </div>
                    <div class="col-md-3">
                      <label>Federal Tax ID</label>
                      <input type="text" class="form-control" name="dest_federal_tax_id">
                    </div>
                  </div>

                </section>
                <section id="trans">
                  <h2>TRANSPORTER DETAILS</h2>

                  <div class="sub-heading">Who is <span class="highlight">TRANSPORTING</span> this vehicle for you? 
                  <a role="button" class="btn btn-primary btn-med" data-toggle="modal" data-target="#transporterModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <label>Transporter Name</label>
                      <input type="text" class="form-control" name="trans_company">
                    </div>
                    <div class="col-md-6">
                      <label>Contact Name</label>
                      <input type="text" class="form-control" name="trans_company_contact">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-3">
                      <label>Phone</label>
                      <input type="tel" class="form-control" name="trans_company_phone">
                    </div>
                    <div class="col-md-3">
                      <label>Fax</label>
                      <input type="tel" class="form-control" name="trans_company_fax">
                    </div>
                    <div class="col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" name="trans_company_email">
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col-md-4">
                      <label>Est. Crossing Date</label>
                      <input type="date" class="form-control" name="trans_estimated_crossing_date">
                    </div>
                    <div class="col-md-4">
                      <label>Port of Crossing</label>
                      <select class="form-control" name="trans_port_of_crossing">
                        <option selected>--</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <a href="javascript:;" class="btn btn-primary btn-lg" role="button">DECODE</a>
                    </div>
                    <div class="col-md-2">
                      <label>Port Code</label>
                      <input type="text" class="form-control" name="trans_port_code">
                    </div>
                  </div>

                </section>
                <section id="bill">
                  <h2>BILLING DETAILS</h2>

                  <div class="sub-heading">Who should we send the <span class="highlight">INVOICE</span> to?
                  <a role="button" class="btn btn-primary btn-med" data-toggle="modal" data-target="#billingModal">ADD NEW</a>
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
                      <input type="text" class="form-control" name="bill_unit">
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
                        <option selected>--</option>
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

                </section>
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
                  <a role="button" class="btn btn-primary btn-med" data-toggle="modal" data-target="#titleModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12">
                          <label>Title Destination</label>
                          <input type="text" class="form-control" name="title_sent_to">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Delivery Service</label>
                          <select class="form-control" name="title_delivery_service">
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
                    <a role="button" class="btn btn-primary btn-med" data-toggle="modal" data-target="#labelModal">ADD NEW</a>
                  </div>

                  <div class="row align-items-end">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                          <p>Is the RI Label going to the same address as the Title?</p>
                        </div>
                        <div class="col-md-6">
                          <div class="inside-radio">
                            <input type="radio" value="yes" id="radio1" name="label_same_as_title">
                            <label for="radio1">YES</label>
                            <input type="radio" value="no" id="radio2" name="label_same_as_title">
                            <label for="radio2">NO</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Label Destination</label>
                          <input type="text" class="form-control" name="label_destination">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Delivery Service</label>
                          <select class="form-control" name="label_delivery_service">
                            <option selected>--</option>
                            <option>Standard</option>
                            <option>Rush</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label>Notes</label>
                      <textarea rows="7" class="form-control" name="label_notes"></textarea>
                    </div>
                  </div>

                </section>
                <section id="courier">
                  <h2>ORDER COURIER</h2>

                  <div class="sub-heading">Do you want to order <span class="highlight">COURIER</span> services for this vehicle? <span class="note">(fees apply)</span> </div>
                  
                  <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                      <div class="inside-radio">
                        <input type="radio" value="yes" id="radio3" name="order_courier">
                        <label for="radio3">YES</label>
                        <input type="radio" value="no" id="radio4" name="order_courier">
                        <label for="radio4">NO</label>
                      </div>
                    </div>
                    <div class="col-md-4">

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

                  <div class="sub-heading">You're all <span class="highlight">DONE</span></div>
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

  <?php include dirname(__FILE__)."/exporter.php"; ?>
  <?php include dirname(__FILE__)."/destination.php"; ?>
  <?php include dirname(__FILE__)."/transporter.php"; ?>
  <?php include dirname(__FILE__)."/billing.php"; ?>
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
