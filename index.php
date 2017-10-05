<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>MSU Solutions</title>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- bootstrap css -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- custom css -->
  <link href="css/style.css" rel="stylesheet">
  <!-- carousel css -->
  <link href="css/carousel.css" rel="stylesheet">
</head>

<body>

  <?php include dirname(__FILE__)."/header.php"; ?>
  <!-- login start -->


  <div id="login">
    <div class="l-slide" id="log-t">
      <div class="title-l">
        <div class="container">
          <h2>Login</h2>
        </div>


        <div class="cross-arrow login-top">
          <span class="cls rounded white"></span>
        </div>
      </div>


      <div class="container">
        <div class="f-contain">
          <form id="login-form" method="post" name="login-form" action="dealermain.php">
            <div class="row align-items-end">
              <div class="col-md-5">
                <label>Email*</label> <input class="form-control" name="email" type="email" required>
              </div>


              <div class="col-md-5">
                <label>Password*</label> <input class="form-control" name="password" type="password" required>
              </div>


              <div class="col-md-2">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
              </div>
            </div>


            <div class="row">
              <div class="col-md-10 text-right">
                <a href="#">Forgot Password</a>
              </div>


              <div class="col-md-2">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- login end -->
  <!-- signup start -->


  <div id="signup">
    <div class="l-slide" id="sign-t">
      <div class="title-l">
        <div class="container">
          <h2>Sign Up</h2>
        </div>


        <div class="cross-arrow login-top">
          <span class="cls rounded white"></span>
        </div>
      </div>


      <div class="container">
        <div class="heading">
          Tell us a bit about your <span>Dealership</span>
        </div>


        <div class="f-contain">
          <form method="post" action="index.php" name="signup-form">
            <div class="row align-items-center">
              <div class="col-md-6">
                <label>Dealership Name*</label> <input class="form-control" name="dealer_name" type="text" required>
              </div>


              <div class="col-md-6">
                <label>Contact Name*</label> <input class="form-control" name="dealer_contact" type="text" required>
              </div>
            </div>


            <div class="row align-items-center">
              <div class="col-md-3">
                <label>Phone*</label> <input class="form-control" name="dealer_phone" type="tel" required>
              </div>


              <div class="col-md-3">
                <label>Fax</label> <input class="form-control" name="dealer_fax" type="tel">
              </div>


              <div class="col-md-3">
                <label>Website</label> <input class="form-control" name="dealer_website" type="url">
              </div>


              <div class="col-md-3">
                <label>Email*</label> <input class="form-control" name="dealer_email" type="email" required>
              </div>
            </div>


            <div class="row align-items-center">
              <div class="col-md-1">
                <label>Unit</label> <input class="form-control" name="dealer_unit" type="text">
              </div>


              <div class="col-md-11">
                <label>Address*</label> <input class="form-control" name="dealer_address" type="text" required>
              </div>
            </div>


            <div class="row align-items-center">
              <div class="col-md-3">
                <label>City*</label> <input class="form-control" name="dealer_city" type="text" required>
              </div>


              <div class="col-md-3">
                <label>State/Province*</label> <input class="form-control" name="dealer_state" type="text">
              </div>


              <div class="col-md-3">
                <label>Zip/Postal Code*</label> <input class="form-control" name="dealer_postal_code" type="text" required>
              </div>


              <div class="col-md-3">
                <label>Country*</label> <input class="form-control" name="dealer_country" type="text" required>
              </div>
            </div>


            <div class="row align-items-center">
              <div class="col-md-6">
                <label>Password*</label> <input class="form-control" name="password" type="password" required>
              </div>


              <div class="col-md-6">
                <label>Confirm Password*</label> <input class="form-control" name="confirm_password" type="password" required>
              </div>
            </div>


            <div class="row align-items-center">
              <div class="col-md-4">
                <label>Federal ID</label> <input class="form-control" name="dealer_federalid" type="text">
              </div>


              <div class="col-md-4">
                <label>Dealer Number*</label> <input class="form-control" name="dealer_number" type="text" required>
              </div>


              <div class="col-md-4">
                <label>Payment Method*</label> <select class="form-control" name="dealer_payment_method" required>
                  <option value="">--</option>
                  <option value="Credit Card">Credit Card</option>
                  <option value="Check">Check</option>
                  <option value="Wire">Wire</option>
                </select>
              </div>
            </div>


            <div class="row align-items-center">
              <div class="col-md-10">
              </div>


              <div class="col-md-2 text-right">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- signup end -->
  <!-- banner start -->


  <div class="carousel slide" data-ride="carousel" id="myCarousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img alt="First slide" class="d-block img-fluid" src="images/carousel-1.jpg">
      </div>


      <div class="item"><img alt="Second slide" class="d-block img-fluid" src="images/carousel-2.jpg">
      </div>


      <div class="item"><img alt="Third slide" class="d-block img-fluid" src="images/carousel-3.jpg">
      </div>


      <div class="item"><img alt="Fourth slide" class="d-block img-fluid" src="images/carousel-4.jpg">
      </div>
    </div>
    <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>

    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#myCarousel">
      </li>


      <li data-slide-to="1" data-target="#myCarousel">
      </li>


      <li data-slide-to="2" data-target="#myCarousel">
      </li>


      <li data-slide-to="3" data-target="#myCarousel">
      </li>
    </ol>
  </div>
  <!-- banner end -->
  <!-- service start-->


  <div class="container-fluid section services">
    <div class="row">
      <div class="col-md-12">
        <h2>SERVICES</h2>


        <p class="tagline">Here is a bit about what we offer.</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-2">
      </div>


      <div class="col-md-2">
        <img class="img-responsive" src="images/icon_map.png">

        <div class="service-text">
          <span>Registered Import Services</span>

          <p>The core of our business is being your Registered Importer. We work closely with each of our clients to prepare, review and submit the documentation to import their vehicles. Our tenure, experience, dedicated staff and online platform ensure a smooth process for you, every time.</p>
        </div>
      </div>


      <div class="col-md-2">
        <img class="img-responsive" src="images/icon_odometer.png">

        <div class="service-text">
          <span>Vehicle Conversion</span>

          <p>An integral part of the import process is ensuring your vehicles are converted to meet the requirements of the destination country. At MSU Solutions we have you covered. Our experienced team is equipped with all the resources, tools, overlays, clusters and screens to meet your conversion needs.</p>
        </div>
      </div>


      <div class="col-md-2">
        <img class="img-responsive" src="images/icon_fix.png">

        <div class="service-text">
          <span>Reconditioning</span>

          <p>We offer a wide spectrum of reconditioning services to help you maximize your profits on each vehicle. These services include frame painting, windshield replacement, basic bodywork, minor mechanical repairs, detailing, oil changes, fluid treatments, tire replacement, de-mudding and recall satisfaction.</p>
        </div>
      </div>


      <div class="col-md-2">
        <img class="img-responsive" src="images/icon_title.png">

        <div class="service-text">
          <span>Titling</span>

          <p>Obtaining a title in a timely manner can be critical to your businesses success. We understand its importance and have dedicated a team to work with various qualified title agencies and companies throughout the country to meet your needs. Our team also ensures compliance, and accuracy to minimize any unnecessary delays to you and your business.</p>
        </div>
      </div>


      <div class="col-md-2">
      </div>
    </div>


    <div class="row">
      <div class="col-md-5">
      </div>


      <div class="col-md-2">
        <a class="btn btn-primary btn-signup btn-lg top" href="#sign-t" role="button">REGISTER NOW</a>
      </div>


      <div class="col-md-5">
      </div>
    </div>
  </div>
  <!-- service end -->
  <!-- MSU solutions start -->


  <div class="container-fluid section msu">
    <div class="row">
      <div class="col-md-12">
        <p class="msu-tagline">MSU Solutions; your complete import solution</p>
      </div>
    </div>
  </div>
  <!-- MSU solutions end -->
  <!-- testimonial start -->


  <div class="container-fluid section testimonial">
    <div class="row section-head">
      <div class="col-md-12">
        <h2>TESTIMONIALS</h2>


        <p class="tagline">What our clients have to say...</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-3">
      </div>


      <div class="col-md-6">
        <div class="testimonial-text">
          <p>" Our company has been working with MSU Solutions for over 20 years now, one could say the businesses have grown together. What started off as basic documentation preparation has now grown to be an all inclusive import service. We now enjoy a completely hands off experience from the time the unit is shipped to the time time it is delivered to the sales point. We highly recommend MSU Solutions as a Registered Importer and import service provider "</p><b>- K. Johnson</b>
        </div>
      </div>


      <div class="col-md-3">
      </div>
    </div>


    <div class="row">
      <div class="col-md-3">
      </div>


      <div class="col-md-6">
        <div class="testimonial-text">
          <p>" Working with MSU Solutions has been great. We've been exporting vehicles for a while now and have worked with a few RI companies. Although we got the job done with the others without anything negative to say, we've definitely experienced a significant difference by switching to MSU. Overall it has been a smoother process with less 'issues' to deal with. Recently we started using all the services they offer, which has noticeably increased our efficiency as there are fewer points of contacts through the import/export process. I cannot speak highly enough about MSU and the staff there and would strongly recommend them to anyone looking to make a switch or just getting started in the business. "</p><b>- Mike Olovski</b>
        </div>
      </div>


      <div class="col-md-3">
      </div>
    </div>


    <div class="row">
      <div class="col-md-3">
      </div>


      <div class="col-md-6">
        <div class="testimonial-text">
          <p>" The staff at MSU are awesome to work with. Everyone there is super friendly, knowledgable and always willing to help. The best part is that I can always get a hold of someone. Excellent service. So happy they are my RI. THANKS MSU! "</p><b>- Steve Casmith</b>
        </div>
      </div>


      <div class="col-md-3">
      </div>
    </div>
  </div>
  <!-- testimonial end -->
  <!-- newsletter start -->


  <div class="container-fluid section newsletter">
    <div class="row section-head">
      <div class="col-md-12">
        <h2>NEWSLETTER</h2>


        <p class="tagline">Stay up to-date with industry changes, recall updates and inadmissibility lists.</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-3">
      </div>


      <div class="col-md-6">
        <form action="index.php" id="newsletter-form" method="post" name="newsletter-form">
          <div class="row align-items-center">
            <div class="col-md-4">
              <input class="form-control" name="fullname" placeholder="Name*" type="text" required>
            </div>


            <div class="col-md-4">
              <input class="form-control" name="email" placeholder="Email*" type="email" required>
            </div>


            <div class="col-md-4">
              <button class="btn btn-primary btn-subscribe btn-default" type="submit">SUBSCRIBE</button>
            </div>
          </div>
        </form>
      </div>


      <div class="col-md-3">
      </div>
    </div>
  </div>
  <!-- newsletter end -->
  
  <?php include dirname(__FILE__)."/footer.php"; ?>

  <!-- javascript start -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  <script src="css/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="js/script.js">
  </script> 
  <!-- javascript end -->
</body>
</html>