<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>LetMeBid </title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet"> 
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/EduFocus.css">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->

 
  
  <section id="container" class="">
     
      
      
      <!--header end -->
      <?php

      $user_email_id=$_SESSION["user_email_id"];
      include'./header.php';
      //require_once 'database.php';
             //echo json_encode($results['week_number']);
             //echo json_encode($results['total_records']);die;
        
      ?>

      <!--sidebar start-->
      <?php

        include'./sidebar.php';
        //include_once './database.php';


      ?>
      <!--sidebar end-->
      
      <!--main content start-->
        <section id="main-content">
        <section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>                
          </ol>
        </div>
      </div>
              
      <?php 
          
          $obj=new database();
          $res=$obj->getalluser();
          $count=mysql_num_rows($res);
      ?>
            <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-user"></i>
            <div class="count"><?php echo $count; ?></div>
            <div class="title">Users</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <?php 
                
          $res=$obj->getallproducts();
          $count=mysql_num_rows($res);
      ?>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-heart"></i>
            <div class="count"><?php echo $count; ?></div>
            <div class="title">Products</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->  
        
        <?php 
                
          $res=$obj->getallcategory(); 
          $count=mysql_num_rows($res);
        ?>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-align-justify"></i>
            <div class="count"><?php echo $count; ?></div>
            <div class="title">Categories</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <?php 
                
          $res=$obj->getallsubcategory();
          $count=mysql_num_rows($res);
        ?>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-book fa-fw"></i>
            <div class="count"><?php echo $count; ?></div>
            <div class="title">Sub-Categories</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->

        
      </div><!--/.row-->
        <div class="row">
              <!-- chart morris start -->
              <div class="col-lg-12">
                  <section class="panel">
                      
                      <div class="panel-body">
                        <div class="tab-pane" id="chartjs">
                      <div class="row">
                          <!-- Line -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                  Products sold in a Months

                                       <?php

                                       $obj1=new database();
                                $res1=$obj1->confirm_bid_dis();

                                $count=mysql_num_rows($res1);
                                $c1=0;$c2=0;$c3=0;$c4=0;$c5=0;$c6=0;$c7=0;$c8=0;$c9=0;$c10=0;$c11=0;
                                $c12=0;
                                while($row1=mysql_fetch_assoc($res1))
                                {
                                  
                                  $d=$row1["confirm_bid_date"];
                                  $arr=explode("-",$d);
                                  
                                  $a1=(int)$arr[1];
                                  

                                
                                  
                                  if($a1=="01")
                                  {
                                    $c1=$c1+1;;
                                  }
                                  if($a1=="02")
                                  {
                                    $c2=$c2+1;
                                  }
                                  if($a1=="03")
                                  {
                                    $c3=$c3+1;
                                  } 
                                  if($a1=="04")
                                  {
                                    $c4=$c4+1;
                                  }
                                  if($a1=="05")
                                  {
                                    $c5=$c5+1;
                                  } 
                                  if($a1=="06")
                                  {
                                    $c6=$c6+1;
                                  }
                                  if($a1=="07")
                                  {
                                    $c7=$c7+1;
                                  }
                                  if($a1=="08")
                                  {
                                    $c8=$c8+1;
                                  }
                                  if($a1=="09")
                                  {
                                    $c9=$c9+1;
                                  }
                                  if($a1=="10")
                                  {
                                    $c10=$c10+1;
                                  }
                                  if($a1=="11")
                                  {
                                    $c11=$c11+1;
                                  }
                                  if($a1=="12")
                                  {
                                    $c12=$c12+1;
                                  }
                                }
         
                              ?>
                                
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="line" height="300" width="450"></canvas>
                                  </div>
                              </section>
                          </div>                      
                          <!-- Bar -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Products Added in a Months
                              <?php 
                              
                                $obj=new database();
                                $res=$obj->productdisplay3();

                                $count=mysql_num_rows($res);
                                $cnt1=0;$cnt2=0;$cnt3=0;$cnt4=0;$cnt5=0;$cnt6=0;$cnt7=0;$cnt8=0;$cnt9=0;
                                $cnt10=0;$cnt11=0;$cnt12=0;
                                while($row=mysql_fetch_assoc($res))
                                {
                                  
                                  $d=$row["product_date"];
                                  $arr=explode("-",$d);
                                  
                                  $m1=(int)$arr[1];
                                  

                                
                                  
                                  if($m1=="01")
                                  {
                                    $cnt1=$cnt1+1;;
                                  }
                                  if($m1=="02")
                                  {
                                    $cnt2=$cnt2+1;
                                  }
                                  if($m1=="03")
                                  {
                                    $cnt3=$cnt3+1;
                                  } 
                                  if($m1=="04")
                                  {
                                    $cnt4=$cnt4+1;
                                  }
                                  if($m1=="05")
                                  {
                                    $cnt5=$cnt5+1;
                                  } 
                                  if($m1=="06")
                                  {
                                    $cnt6=$cnt6+1;
                                  }
                                  if($m1=="07")
                                  {
                                    $cnt7=$cnt7+1;
                                  }
                                  if($m1=="08")
                                  {
                                    $cnt8=$cnt8+1;
                                  }
                                  if($m1=="09")
                                  {
                                    $cnt9=$cnt9+1;
                                  }
                                  if($m1=="10")
                                  {
                                    $cnt10=$cnt10+1;
                                  }
                                  if($m1=="11")
                                  {
                                    $cnt11=$cnt11+1;
                                  }
                                  if($m1=="12")
                                  {
                                    $cnt12=$cnt12+1;
                                  }
                                }

                                ?>


                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="bar" height="300" width="500"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                      <div class="row" style="visibility:hidden">
                          <!-- Radar -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Radar
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="radar" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                          <!-- Polar Area -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Polar Area
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="polarArea" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                      <div class="row" style="visibility:hidden">
                          
                          <!-- Pie -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Pie
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="pie" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                          <!-- Doughnut -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Doughnut
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="doughnut" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
                      </div>
                      </div>
                    </section>
              </div>
              <!-- chart morris start -->
            </div>
      </section>
      <!--main content end-->
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  
  <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      $(document).ready(function() {


    var doughnutData = [
        {
            value: 30,
            color:"#F7464A"
        },
        {
            value : 50,
            color : "#46BFBD"
        },
        {
            value : 100,
            color : "#FDB45C"
        },
        {
            value : 40,
            color : "#949FB1"
        },
        {
            value : 120,
            color : "#4D5360"
        }

    ];
    var lineChartData = {
        labels : ["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [0,0,0,0,0,0,0]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [<?php echo $c1;?>,<?php echo $c2;?>,<?php echo $c3;?>,<?php echo $c4;?>,<?php echo $c5;?>,<?php echo $c6;?>,<?php echo $c7;?>,<?php echo $c8;?>,<?php echo $c9;?>,<?php echo $c10;?>,<?php echo $c11;?>,<?php echo $c12;?>]
            }
        ]

    };
    var pieData = [
        {
            value: 30,
            color:"#F38630"
        },
        {
            value : 50,
            color : "#E0E4CC"
        },
        {
            value : 100,
            color : "#69D2E7"
        }

    ];
    var barChartData = {
        labels : ["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [<?php echo $cnt1;?>,<?php echo $cnt2;?>,<?php echo $cnt3;?>,<?php echo $cnt4;?>,<?php echo $cnt5;?>,<?php echo $cnt6;?>,<?php echo $cnt7;?>,<?php echo $cnt8;?>,<?php echo $cnt9;?>,<?php echo $cnt10;?>,<?php echo $cnt11;?>,<?php echo $cnt12;?>]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [0,0,0,0,0,0,0,0,0,0,0,0]
            }
        ]

    };
    var chartData = [
        {
            value : Math.random(),
            color: "#D97041"
        },
        {
            value : Math.random(),
            color: "#C7604C"
        },
        {
            value : Math.random(),
            color: "#21323D"
        },
        {
            value : Math.random(),
            color: "#9D9B7F"
        },
        {
            value : Math.random(),
            color: "#7D4F6D"
        },
        {
            value : Math.random(),
            color: "#584A5E"
        }
    ];
    var radarChartData = {
        labels : ["","","","","","",""],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
    new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
    new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
    new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
    new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
    new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);


});

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

  </script>

  </body>
</html>
