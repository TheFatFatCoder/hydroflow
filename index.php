<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HydroFlow</title>
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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="./bootstrap-clockpicker/css/bootstrap-material-datetimepicker.css">

  <!-- Header Section -->
  <!-- Banner Extra Space -->
  <link rel="stylesheet" href="dist/css/header.css">

  <!-- Scroll Section-->
  <link rel="stylesheet" href="scroll/scroll.css">

  <!-- Banner Extra Space -->
  <link rel="stylesheet" href="dist/css/banner.css">

  <!-- Marketing Video Content -->
  <link rel="stylesheet" href="dist/css/markvid.css">

  <!-- Contact Us Section -->
  <link rel="stylesheet" href="dist/css/contactus.css">

</head>

<body>

<!-- Header with Scroll-->
<header>
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<img src="dist/img/plantHead.jpg" class="col-xs-12" id="imghead">
			<div id="connectButton" class="Connect">
				<a href="homepage.php" class="btn" id="headerbtn">Connect To Plant</a>
			</div>
			<div id="scrollHeader" class="ScrollDown">
				<a href="#banner" id="scrollButton"><span></span></a>
			</div>
		</div>
	</div>
</header>

  <!-- Hydroponic Essentials Content -->
<!--
  <section id="content">
    <div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="col-md-offset-2" style="padding: 40px">
				<h2>
    				Input Title Here
	    		</h2>
			</div>
		</div>
		<img src="dist/img/blacksolid.jpg" class="col-md-6 col-xs-12" style="left: 0; padding: 0;">
    </div>
    <div class="row">
		<div class="col-md-7 col-xs-12">
			<div class="col-md-offset-4 col-xs-offset-2" style="padding: 40px">
				<h2>
    				Input Title Here
	    		</h2>
			</div>
			<div class="col-md-offset-2 col-xs-offset-1">
				<p>
	    			Input Paragraph Here
	    		</p>
			</div>
		</div>
		<img src="dist/img/blacksolid.jpg" class="col-md-5 col-xs-12" style="right: 0; padding: 0;">
    </div>
  </section>
-->

  <!-- Extra Space Content -->
  <section id="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-text text-center">
              <h1 id="fontHeader">"Great yield comes with great technology"</h1>
              <p>-Hydroflow 2018</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Content -->
  <section id="about">
    <div class="col-xs-12">
      <h1>
        About  
      </h1>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
        <span>
          In HydroFlow, we believe that every person should be given a chance to plant their own healthy vegetation for a greener household. By providing a simple and affordable vegetation kit, every person now could be a little gardener in their own house.
        </span>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0">
        <br class="visible-xs" />
        <span>
          With the presence of technology, we see an opportunity to integrate technology to produce high maintained vegetation. We provide much more than a surveillance assistant and ensure accurate information are up to date.
        </span>
      </div>
    </div>
    <!-- Marketing Video -->
    <div class="row">
      <div class="col-xs-12" id="box">
        <img src="dist/img/vidimage.png" id="vidlayout">
      </div>
    </div>
    <div class="row" id="brspc">
    </div>
  </section>

  <!-- Contact Us Section -->
  <section>
    <div class="col-xs-12" id="bg-color">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="fontheader">
            Get In Touch With Us
          </h1>
        </div>
      </div>
      <div class="row">
        <!-- Name Box -->
        <div class="row">
          <div class="input-group col-md-3 col-md-offset-2 col-xs-10 col-xs-offset-1" id="infoheader">
            <input type="text" class="form-control" placeholder="Your Name*" id="info-content">
          </div>
        <!-- Email Box -->
          <div class="input-group col-md-3 col-md-offset-2 col-xs-10 col-xs-offset-1" id="mailheader">
              <input type="email" class="form-control" placeholder="Your Email*" id="info-content">
          </div>
        </div>
        <br/>
        <br/>
        <!-- Subject Box -->
        <div class="row">
          <div class="input-group col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <input type="text" class="form-control" placeholder="Your Message" id="info-content">
          </div>
        </div>
        <br/><br/>

        <!-- Send Button-->
        <div class="row" id="sendheader">
          <div class="col-xs-12">
            <button type="button" class="btn" id="sendbtn">Get In Touch</button>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Scroll Flow -->
<script src="scroll/scroll.js"></script>
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
