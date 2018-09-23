<?php
  include("include/header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HydroFlow | Config</title>
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
        Sensor Configuration
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Calendar -->
      <div class="box box-solid bg-white-gradient">
        <!-- /.box-header -->
        <!-- /.box-body -->
        <!-- Temperature Box-->
        <div class="box-footer text-black">
          <div class="row">
            <div class="col-xs-12">
              <!-- Progress bars -->
              <div class="clearfix">
                <span class="col-md-1 col-xs-4" style="text-align: center">Temperature</span>
                <small class="pull-right">24°C</small>
              </div>
              <div class="row">
                <div class="col-md-1 col-xs-4" style="text-align: center">
                    <span style="padding-left: 25%"></span>
                    <img src="dist\img\temperature.svg" height="40px" width="40px">
                </div>
                <div class="col-md-11 col-xs-8 pull-right">
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: 20%;"></div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-1 col-md-offset-4 col-xs-3 col-xs-offset-1">
                  <input type="text" class="form-control" placeholder="Min°C" style="font-size: small;" data-inputmask='"mask": "99"' data-mask>
                </div>
                <div class="col-md-1 col-xs-3">
                  <input type="text" class="form-control" placeholder="Max°C" style="font-size: small;" data-inputmask='"mask": "99"' data-mask>
                </div>
              </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      
      <!-- Light Hours Box -->
      <div class="box box-solid bg-white-gradient">
        <div class="box-footer text-black">
          <div class="row">
            <div class="col-xs-12">
              <!-- Progress bars -->
              <div class="clearfix">
                <span class="col-md-1 col-xs-4" style="text-align: center">LightHours</span>
                <small class="pull-right">4 Hours</small>
              </div>
              <div class="row">
                <div class="col-md-1 col-xs-4" style="text-align: center">
                    <span style="padding-left: 25%"></span>
                    <img src="dist\img\creativity.svg" width="40px" height="40px">
                </div>
                <div class="col-md-11 col-xs-8 pull-right">
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-yellow" style="width: 50%;"></div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-1 col-md-offset-4 col-xs-3 col-xs-offset-1">
                  <input type="text" id="startTime" class="time form-control floating-label" placeholder="Start" style="font-size: small;">
                </div>
                <div class="col-md-1 col-xs-3">
                  <input type="text" id="endTime" class="time form-control floating-label" placeholder="End" style="font-size: small;">
                </div>
              </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>


      <div class="box box-solid bg-white-gradient">
        <!-- Nutrition PPM Box-->
        <div class="box-footer text-black">
          <div class="row">
            <div class="col-xs-12">
              <!-- Progress bars -->
              <div class="clearfix">
                <span class="col-md-1 col-xs-4" style="text-align: center">Nutrition</span>
                <small class="pull-right">1200ppm</small>
              </div>
              <div class="row">
                <div class="col-md-1 col-xs-4" style="text-align: center">
                    <span style="padding-left: 25%"></span>
                    <img src="dist\img\flask.svg" width="40px" height="40px">
                </div>
                <div class="col-md-11 col-xs-8 pull-right">
                    <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 50%;"></div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-1 col-md-offset-4 col-xs-3 col-xs-offset-1">
                  <input type="text" class="form-control" data-inputmask='"mask": "9999"' data-mask placeholder="Min" style="font-size: small;">
                </div>
                <div class="col-md-1 col-xs-3">
                  <input type="text" class="form-control" data-inputmask='"mask": "9999"' data-mask placeholder="Max" style="font-size: small;">
                </div>
              </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div class="box box-solid">
        <div class="pull-right">
          <button type="button" class="btn bg-navy margin" style="font-size: small;">Save Settings</button>
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
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
	$(function () {
	    //Money Euro
	    $('[data-mask]').inputmask()
	})
</script>

<script src="./bootstrap-clockpicker/js/bootstrap-material-datetimepicker.js"></script>
<script>
	$('.time').bootstrapMaterialDatePicker
	({
		date: false,
		shortTime: false,
		format: 'HH:mm'
	});
</script>
</body>
</html>
