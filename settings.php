<?php
  include("include/header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HydroFlow | Settings</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="./bootstrap-clockpicker/css/bootstrap-material-datetimepicker.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $navbar; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- Calendar -->
          <div class="box box-solid bg-white-gradient">
            <!-- /.box-header -->
            <!-- /.box-body -->
            <!-- About Us Content-->
            <div class="box-footer text-black">
              <!-- Change Password Form -->
              <div class="row">
	            <div class="col-xs-12">
	            	<h4>Change Password</h4>
              	</div>
              </div>
              <!-- Old Password -->
              <div class="row">
              	<div class="col-xs-12">
	            	<h5>Current Password</h5>
              	</div>
              </div>
              <div class="row">
              	<div class="col-md-3 col-xs-10">
              		<input type="Password" class="form-control">
              	</div>
              </div>
              <!-- New Password -->
              <div class="row">
              	<div class="col-xs-12">
	            	<h5>New Password</h5>
              	</div>
              </div>
              <div class="row">
              	<div class="col-md-3 col-xs-10">
              		<input type="Password" class="form-control">
              	</div>
              </div>
              <!-- Confirm Password -->
              <div class="row">
              	<div class="col-xs-12">
	            	<h5>Confirm New Password</h5>
              	</div>
              </div>
              <div class="row">
              	<div class="col-md-3 col-xs-10">
              		<input type="Password" class="form-control">
              	</div>
              </div>
              <!-- Change Password Button -->
              <div class="row">
		        <div class="pull-left">
		          <button type="button" class="btn bg-navy margin" style="font-size: small;">Save Password</button>
		        </div>
		      </div>
		      <br/><br/><br/>

              <!-- Change Email Form -->
              <div class="row">
	            <div class="col-xs-12">
	            	<h4>Change Email Address</h4>
              	</div>
              </div>
              <!-- Change Email -->
              <div class="row">
              	<div class="col-xs-12">
	            	<h5>Email Address</h5>
              	</div>
              </div>
              <div class="row">
              	<div class="col-md-3 col-xs-10">
              		<input type="email" class="form-control">
              	</div>
              </div>
              <!-- Email Verification Button -->
              <div class="row">
		        <div class="pull-left">
		          <button type="button" class="btn bg-navy margin" style="font-size: small;">Send Verification</button>
		        </div>
		      </div>

            </div>
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/jquery.js"></script>
</body>
</html>
