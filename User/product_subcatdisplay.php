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

  <!-- header -->

<?php 
  
     include_once('headerwithlogin.php');
  

?>  


    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>
                        <?php
                            
                           
                            ?>

<!--content-->
<div class="content-top ">
  <div class="container ">
    <div class="spec ">
      <h3><?php  
$subcat_id=$_REQUEST["id"];
                          $obj4=new database();
                                $res5=$obj4->getsubcatname($subcat_id);
                                while($row5=mysql_fetch_assoc($res5))
                                  { 
                                       $name=$row5["subcat_name"];
                              }
                                 echo $name ; ?></h3>
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
                
             
                                $obj4=new database();
                                $res3=$obj4->getsubcatday($subcat_id);
                                 while($row=mysql_fetch_assoc($res3))
                                  { 
                                     $day1=$row["cattime_day"];

                                }

                              if($day1=="Fri")
                                      $day_of_week1=5;
                              if($day1=="Mon")        
                                       $day_of_week1=1;
                              if($day1=="Tue")        
                                       $day_of_week1=2;
                              if($day1=="Wed")        
                                       $day_of_week1=3;
                              if($day1=="Thu")        
                                       $day_of_week1=4;
                              if($day1=="Sat")        
                                       $day_of_week1=6;
                               if($day1=="Sun")        
                                       $day_of_week1=7;      

                $res4=$obj4->getproductbysubcat($subcat_id);
                  $num_rows = mysql_num_rows($res4);
       
                   if($num_rows>0)
                   {
                            $day=date("l");
                            $day_of_week=date('N', strtotime($day));
        $left=abs($day_of_week-$day_of_week1);

//                            if($day_of_week>$day_of_week1)
  //                                $left=$day_of_week-$day_of_week1;
    //                        else
      //                            $left=$day_of_week1-$day_of_week;
                            while($row=mysql_fetch_assoc($res4))
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
                                  <p style="color:black;"><b> Rs.' .$row["product_min_bid_price"].' </b></p>
                                  <p style="float:right;color:#039445"> <b>Remaining Day ::  '.$left.':</b></p>
                                      <div class="clearfix"></div>
                                    </div>
                                    <div class="add">';
                                    echo '</div>
                                      </div>
                                    </div>
                                      </div>';
                       
                              }
                        }
                        else
                            {
                                    echo '<script langauge="javascript">;
                                    alert("No product available");
                                    window.location.href="index.php";
                                    </script>'; 
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