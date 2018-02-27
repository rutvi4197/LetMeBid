<?php 
session_start();
$user_id=$_SESSION["user_id"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>LetMeBid </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
</head>
<body>

<?php 
 $page = $_SERVER['PHP_SELF'];
 $sec = "60";
 header("Refresh: $sec; url=index.php");
?>

  <!-- header -->

<?php 
  if(isset($_SESSION["user_id"])=="")
  {
    
     header('Location:login.php');
  }
  else
  {
     include_once('headerwithlogin.php');
  }

?>
        
          <!--video-->
       

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
  <div class="container ">
    
 <div class="product">
 <div class="container">
      <div class="spec ">
        <h3>Unsold history</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
          <?php
            $res=$obj->unsold_his($user_id);
          
             while($row=mysql_fetch_assoc($res))
            {
               $name=$row["product_name"];
                  $len=strlen($name);
                

                    if($len>=15)
                    {
                      $sortcontent=substr($name,0,15).' ...';
                    }
                    else
                    {
                      $sortcontent=substr($name,0,15);
                    }
                    echo '<div class="col-md-3 pro-1">
                      <div class="col-m">
                      <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                          <img src="../image/'.$row["product_photo"].'" class="img-responsive" alt="" style="height:110px;">
                        </a>
                        <div class="mid-1">
                          <div class="women">
                            <h6><a href="index.php">'.$sortcontent.'</a></h6>             
                          </div>
                          <div class="mid-2">
                            <p style="color:black;"><b>RS.'.$row["product_min_bid_price"].'</b></p>
                              
                            <div class="clearfix"></div>
                          </div>
                            <div class="add add-2">
                             
                          </div>
                            </div>
                                </div>
                                    </div>
                                    ';
             }

          ?>
              
             
             
              
             
             
              
            
              <div class="clearfix"></div>
             </div>
    </div>
    <div class="container">
      <div class="spec ">
        <h3>Sold history</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
          <?php
            $res=$obj->sell_his($user_id);
          
             while($row=mysql_fetch_assoc($res))
            {
               $name=$row["product_name"];
                  $len=strlen($name);
                

                    if($len>=15)
                    {
                      $sortcontent=substr($name,0,15).' ...';
                    }
                    else
                    {
                      $sortcontent=substr($name,0,15);
                    }
                    echo '<div class="col-md-3 pro-1">
                      <div class="col-m">
                      <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                          <img src="../image/'.$row["product_photo"].'" class="img-responsive" alt="" style="height:110px;">
                        </a>
                        <div class="mid-1">
                          <div class="women">
                            <h6><a href="index.php">'.$sortcontent.'</a></h6>             
                          </div>
                          <div class="mid-2">
                            <p style="color:black;"><b>RS.'.$row["bid_price"].'</b></p>
                              
                            <div class="clearfix"></div>
                          </div>
                            <div class="add add-2">
                             
                          </div>
                            </div>
                                </div>
                                    </div>
                                    ';
             }

          ?>
              
             
             
              
             
             
              
            
              <div class="clearfix"></div>
             </div>
    </div>
  </div>
  </div>


  
<!--footer-->
<?php 
include_once('footer.php');


 ?>
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
 

                   <div class="clearfix"> </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>