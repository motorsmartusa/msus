<?php
 header("Access-Control-Allow-Origin: *"); 
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>MSU Solutions | DASHBOARD</title>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- bootstrap css -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap/css/datatables.bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- custom css -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php include dirname(__FILE__)."/header.php"; ?>

  <div class="container-fluid dashboard">
    <div class="row">
      <div class="col-md-2">
        <h2>DASHBOARD</h2>
      </div>

      <div class="col-md-8">
        <div class="sub-heading">Here is what <span class="highlight">YOU</span> have going on</div>
        <div class="flex-container">
          <div>
            8
            <a role="button" class="btn btn-primary" href="javascript:;">NEW</a>
          </div> 
          <div>
            26
             <a role="button" class="btn btn-primary" href="javascript:;">PICTURES REQUIRED</a>
          </div> 
          <div>
            35
             <a role="button" class="btn btn-primary" href="javascript:;">SUBMITTED</a>
          </div> 
          <div>
            12
             <a role="button" class="btn btn-primary" href="javascript:;">UNPAID</a>
          </div> 
          <div>
            832
             <a role="button" class="btn btn-primary" href="javascript:;">COMPLETE</a>
          </div> 
        </div>
      </div>

      <div class="col-md-2">
        <a class="btn btn-primary btn-ask btn-lg" href="#footer" role="button">ASK A QUESTION</a>
        <a class="btn btn-primary btn-lg" href="step-1.php" role="button">EXPORT A VEHICLE</a>
        <div class="input-group">
          <input id="searchText" type="text" class="form-control search">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </div>
    </div>

    <table id="dataTable" class="table" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th>STATUS</th>
              <th>LAST ACTIVITY</th>
              <th>STOCK #</th>
              <th>VEHICLE DETAILS</th>
              <th>RI PICTURES</th>
              <th>PICK UP LOCATION</th>
              <th>DESTINATION</th>
              <th>TRANSPORTER</th>
              <th>CROSS DATE</th>
              <th>PORT</th>
              <th>ACTION</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Pictures Required</td>
              <td>1-Sep-16</td>
              <td>4E142903</td>
              <td>2014 Ford F150 XLT 1FTW1257B4E142903</td>
              <td>Required</td>
              <td>MotorSmart USA c/o Adesa Calgary</td>
              <td>Manheim Denver</td>
              <td>Corporate Fleet Express</td>
              <td>19-Sep-2016</td>
              <td>SWEET GRASS</td>
              <td><a href="javascript:;" class="btn btn-primary btn-white">VIEW</a></td>
          </tr>
          <tr>
              <td>Pictures Required</td>
              <td>3-Sep-16</td>
              <td>4E142902</td>
              <td>2014 Ford F150 XLT 1FTW1257B4E142903</td>
              <td>Required</td>
              <td>MotorSmart USA c/o Adesa Calgary</td>
              <td>Manheim Denver</td>
              <td>Corporate Fleet Express</td>
              <td>20-Sep-2016</td>
              <td>SWEET GRASS</td>
              <td><a href="javascript:;" class="btn btn-primary btn-white">VIEW</a></td>
          </tr>
          <tr>
              <td>Pictures Required</td>
              <td>4-Sep-16</td>
              <td>4E142905</td>
              <td>2014 Ford F150 XLT 1FTW1257B4E142903</td>
              <td>Required</td>
              <td>MotorSmart USA c/o Adesa Calgary</td>
              <td>Manheim Denver</td>
              <td>Corporate Fleet Express</td>
              <td>27-Sep-2016</td>
              <td>SWEET GRASS</td>
              <td><a href="javascript:;" class="btn btn-primary btn-white">VIEW</a></td>
          </tr>
          <tr>
              <td>Pictures Required</td>
              <td>5-Sep-16</td>
              <td>4E142907</td>
              <td>2014 Ford F150 XLT 1FTW1257B4E142903</td>
              <td>Required</td>
              <td>MotorSmart USA c/o Adesa Calgary</td>
              <td>Manheim Denver</td>
              <td>Corporate Fleet Express</td>
              <td>18-Sep-2016</td>
              <td>SWEET GRASS</td>
              <td><a href="javascript:;" class="btn btn-primary btn-white">VIEW</a></td>
          </tr>
          <tr>
             <td>Pictures Required</td>
             <td>1-Sep-16</td>
              <td>4E142908</td>
              <td>2014 Ford F150 XLT 1FTW1257B4E142903</td>
              <td>Required</td>
              <td>MotorSmart USA c/o Adesa Calgary</td>
              <td>Manheim Denver</td>
              <td>Corporate Fleet Express</td>
              <td>19-Sep-2016</td>
              <td>SWEET GRASS</td>
              <td><a href="javascript:;" class="btn btn-primary btn-white">VIEW</a></td>
          </tr>
          <tr>
              <td>Pictures Required</td>
              <td>2-Sep-16</td>
              <td>4E142909</td>
              <td>2014 Ford F150 XLT 1FTW1257B4E142903</td>
              <td>Required</td>
              <td>MotorSmart USA c/o Adesa Calgary</td>
              <td>Manheim Denver</td>
              <td>Corporate Fleet Express</td>
              <td>19-Sep-2016</td>
              <td>SWEET GRASS</td>
              <td><a href="javascript:;" class="btn btn-primary btn-white">VIEW</a></td>
          </tr>
      </tbody>
  </table>
  </div>

  <?php include dirname(__FILE__)."/footer.php"; ?>
  <!-- javascript start -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> 
  <script src="js/jquery.datatables.min.js">
  </script>
  <script src="js/datatables.bootstrap.min.js">
  </script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  <script src="css/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="js/script.js">
  </script>
  <script src="js/datatable.js">
  </script>
  <!-- javascript end -->
</body>
</html>
