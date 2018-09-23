<!DOCTYPE html>
<html>
<?php 
  include("include/header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HydroFlow | Homepage</title>
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
    <header class='main-header'>
            <!-- Logo -->
        <a href='' class='logo'>
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class='logo-mini'><b>H</b>FL</span>
        <!-- logo for regular state and mobile devices -->
        <span class='logo-lg'><b>Hydro</b>Flow</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class='navbar navbar-static-top'>
        </a>
        </nav>
    </header>
  
    <section class="content col-md-7">
    <!-- Horizontal Form -->
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Login</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                <input type="checkbox"> Remember me
                </label>
            </div>
            </div>
        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
    </form>
    </div>
    <!-- /.box -->
    <!-- general form elements disabled -->
    </section>
    </div>
</body>
</html>
