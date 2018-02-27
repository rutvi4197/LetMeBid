<?php 
session_start();

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

     include_once('headerwithoutlogin.php');
  }
  else
  {
     include_once('headerwithlogin.php');
  }

?>
        
          <!--video-->
       <div data-vide-bg="../video/video" style="height: 350px;">
    <div class="container">
    <div class="banner-info" style="margin-top: 295px;">
      
      
    </div>  
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
  <div class="container ">
    <div class="spec ">
      <h3>Live Auction</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
      <div class="tab-head ">
       
        <div class=" tab-content tab-content-t ">
          <div class="tab-pane active text-style" id="tab1">
            <div class=" con-w3l">
              <?php 
               date_default_timezone_set("Asia/Kolkata");
              $day=date("D");
                $res=$obj->getliveproduct($day);
                
                $res1=$obj->gettimeofday($day);
                while($row1=mysql_fetch_assoc($res1))
                {
                  $starttime=$row1["cattime_starttime"];
                  $starttime=substr($starttime,0,2);
                  $endtime=$row1["cattime_endtime"];
                  $endtime=substr($endtime,0,2);
                }
               
                $hour=date("H");

                $min=date("i");
                if($hour>=$starttime && $hour<$endtime)
                {
                  $left=00;
                  $leftmin=00;
                }
                else
                {

                  $left=abs($starttime-$hour)-1;
                  $leftmin=abs(60-$min);
                 
                }

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
                        echo ' <div class="col-md-3 m-wthree">
                      <div class="col-m" >               
                        <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                          <img src="../image/'.$row["product_photo"].'" class="img-responsive" alt="" style="height:110px;">
                          <div class="offer"><p><span>Offer</span></p></div>
                        </a>
                        <div class="mid-1">
                          <div class="women">
                            <h6><a href="single.php?id='.$row["product_id"].'">'.$sortcontent.'</a></h6>              
                          </div>
                          <div class="mid-2">
                            <p style="color:black;"><b> Rs.' .$row["product_min_bid_price"].' </b></p>';
                             if($left!=00 && $leftmin!=00)
                            {
                            echo' <p style="float:right;color:#039445"> <b>Remaining Time ::  '.$left.':'.$leftmin.'</b></p>';
                          }
                            echo '<div class="clearfix"></div>
                          </div>
                          <div class="add">';

                          if($left==00 && $leftmin==00)
                          {
                           echo ' <a href="single.php?id='.$row["product_id"].'"> <button class="btn btn-danger my-cart-btn my-cart-b" >Bid Now</button></a>';
                          }
                          else
                          {
                            $check=$obj->checksoldout($row["product_id"]);
                            $cnt1=mysql_num_rows($check);
                            if($cnt1>0)
                            {
                                echo '  <button class="btn btn-danger my-cart-btn my-cart-b" >Sold Out</button>';
                            }
                            else
                            {

                            echo '<a href="single.php"><button class="btn btn-danger my-cart-btn my-cart-b" >Comming Soon</button></a>';
                           }
                          }
                           echo '</div>
                        </div>
                      </div>
                     </div>';
                   
                }


              ?>
             
             
             
             
              <div class="clearfix"></div>
             </div>
          </div>
         
  </div>
  </div>
  </div>


  
<!--content-->
  <div class="product">
    <div class="container">
      <div class="spec ">
        <h3>Our Best Sold Items</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
          <?php
            $res=$obj->getbestsolditems();
          
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
                             <button class="btn btn-danger my-cart-btn my-cart-b" >Sold Out</button>
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