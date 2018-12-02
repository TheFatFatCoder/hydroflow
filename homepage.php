<?php 
  include("include/header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Kit</title>
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

  <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
  <script src="./functions/firebase/config.js"></script>
  <script src="./functions/firebase/loadStatus.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $navbar; ?>
  <div class="content-wrapper" style="text-align: center;">
    <!-- Sensor Current Data Details -->
    <br/>
    <section class="content" style="text-align: center;">
        <div class="row">
          <!-- Duration Data Detail -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-time"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Last Transmission</span>
                <span id="lastTransmissionInfo" class="info-box-number">---</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Light Data Detail -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-sun-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Light Status</span>
                <span id="lightStatusInfo" class="info-box-number">---</span>
              </div>
            </div>
          </div>
        </div>
      
        <div class="row">
          <!-- Fan Data Detail -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-snowflake-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Fan Status</span>
                <span id="fanStatusInfo" class="info-box-number">---</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Temp Data Detail -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-blue"><i class="fa fa-thermometer"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Temperature (°C)</span>
                <span id="temperatureInfo" class="info-box-number">---</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Water Level Detail -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-tint"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Water Level</span>
                <span id="waterLevelInfo" class="info-box-number">---</span>
            </div>
          </div>
        </div>
      </div>
      </div>
      <br/>

    <!-- Sensor Charts -->  
    <div style="display: none;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Sensor Charts
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Temp Chart -->
        <div class="row">
          <div class="col-md-12">
            <!-- AREA CHART -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Temperature Chart (°C)</h3>
                <!--
                <div class="box-tools pull-right">
                  <small class="label pull-right bg-blue" style="margin-right: 5px;">Temp</small>
                </div>
                -->
              </div>
              <div class="box-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:100px"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Light Chart -->
        <div class="row">
          <div class="col-md-12">
            <!-- AREA CHART -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Light Chart</h3>
              </div>
              <div class="box-body">
                <div class="chart">
                  <canvas id="areaChartII" style="height:100px"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    </div>
    <!-- /. charts -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- Realtime Database Function -->
<script>
  var status = null;
  //writeData();
  fetchAll(document);
  listenAll(document);
</script>

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
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<script>
  $(function () {
    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['00.00', '01.00', '02.00', '03.00', '04.00', '05.00', '06.00', '08.00', '09.00', '10.00', '11.00', '12.00', '13.00', '14.00', '15.00', '16.00', '17.00', '18.00', '19,00', '20.00', '21.00', '22.00', '23.00'],
      datasets: [
        {
          label               : 'Temp',
          fillColor           : 'rgba(0, 115, 183, 0.6)',
          strokeColor         : 'rgba(0 ,115, 183, 1)',
          pointColor          : '#0073b7',
          pointStrokeColor    : 'rgba(0, 115, 183, 1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(0, 115, 183, 1)',
          data                : [20, 21, 24, 23, 20, 22, 19, 20, 19, 19, 20, 21, 21, 21, 20, 19 ,20, 21, 20, 19, 20, 19, 19]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

    //-------------
  })
</script>
<script>
  $(function () {
    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvasII = $('#areaChartII').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChartII       = new Chart(areaChartCanvasII)

    var areaChartDataII = {
      labels  : ['00.00', '01.00', '02.00', '03.00', '04.00', '05.00', '06.00', '08.00', '09.00', '10.00', '11.00', '12.00', '13.00', '14.00', '15.00', '16.00', '17.00', '18.00', '19,00', '20.00', '21.00', '22.00', '23.00'],
      datasets: [
        {
          label               : 'Light',
          fillColor           : 'rgba(255 , 133, 27, 0.6)',
          strokeColor         : 'rgba(255 , 133, 27, 1)',
          pointColor          : '#ff851b',
          pointStrokeColor    : 'rgba(255 , 133, 27, 1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(255 , 133, 27, 1)',
          data                : [0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1]
        }
      ]
    }

    var areaChartOptionsII = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChartII.Line(areaChartDataII, areaChartOptionsII)

    //-------------
  })
</script>
</body>
</html>


