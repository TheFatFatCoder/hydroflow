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
    <div class="box box-info col-md-offset-4">
    <div class="box-header with-border">
        <h3 class="box-title">Register</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputFirstname" class="col-sm-2 control-label">Firstname</label>

              <div class="col-sm-10">
              <input type="text" class="form-control" id="inputFirstname" placeholder="Firstname">
              </div>
          </div>
          <div class="form-group">
            <label for="inputLastname" class="col-sm-2 control-label">Lastname</label>

              <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLastname" placeholder="Lastname">
              </div>
          </div>
          <div class="form-group">
            <label for="inputUsername" class="col-sm-2 control-label">Username</label>

              <div class="col-sm-10">
              <input type="text" class="form-control" id="inputUsername" placeholder="Username" onkeyup="checkValidUsername()">
              </div>
          </div>
          <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">Password</label>

              <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
          </div>
          <div class="form-group">
              <label for="inputConfirmPassword" class="col-sm-2 control-label">Confirm Password</label>

              <div class="col-sm-10">
              <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password" onkeyup="checkValidPassword()">
              </div>
          </div>
          <div class="form-check">
              <label class="col-sm-2 control-label" ID="validationLabel" style="color: red;"></label>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-info pull-right">Register</button>
        </div>
        <!-- /.box-footer -->
    </form>
    </div>
    <!-- /.box -->
    <!-- general form elements disabled -->
    </section>
    </div>
<script>
  //Check Username
  function checkValidUsername() {
    var checkUsername = document.getElementById("inputUsername").value;
    if (checkUsername=="abc") {
      document.getElementById("validationLabel").innerHTML = "Invalid Username";
    }else{
      document.getElementById("validationLabel").innerHTML = "";
    }
  }
    //Check Confirm Password
    function checkValidPassword(){
      var checkPassword = document.getElementById("inputPassword").value
      var checkConfirmPassword = document.getElementById("inputConfirmPassword").value;
      if (checkConfirmPassword==checkPassword) {
        document.getElementById("validationLabel").innerHTML = "";
      }else{
        document.getElementById("validationLabel").innerHTML = "Mismatch Password";
      }
    }
</script>
</body>
</html>
