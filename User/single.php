<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>LetMeBid</title>
<!-- for-mobile-apps -->

</head>
<body>


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
<?php 
	$pro_id=$_REQUEST["id"];
	
 	$page = $_SERVER['PHP_SELF'];
 	$sec = "20";
 	header("Refresh: $sec; url=single.php?id=".$pro_id);

	$res=$obj->getproductbyid($pro_id);
    $cnt=mysql_num_rows($res);
	if($cnt==1)
	{
		while($row=mysql_fetch_assoc($res))
		{
			$product_id=$row["product_id"];
			$product_name=$row["product_name"];
			$product_description=$row["product_description"];
			$price=$row["product_min_bid_price"];
			$product_photo=$row["product_photo"];
			$cat_name=$row["cat_name"];
			$subcat_id=$row["fk_subcat_id"];
			$fk_user_id=$row["fk_user_id"];				
		}
	}
	
	$day=date("D");
	$res1=$obj->gettimeofday($day);
                while($row1=mysql_fetch_assoc($res1))
                {
                  $starttime=$row1["cattime_starttime"];
                  $starttime=substr($starttime,0,2);
                  $endtime=$row1["cattime_endtime"];
                  $endtime=substr($endtime,0,2);
                }
                date_default_timezone_set("Asia/Kolkata");
                $hour=date("H");

                $min=date("i");
                if($hour>=$starttime && $hour<$endtime)
                {
                  $left=00;
                  $leftmin=00;
                }
                else
                {

                  $left=abs($starttime-$hour);
                  
                  $leftmin=abs(60-$min);
                 
                }
         $maxprice=$obj->getmaxprice($product_id);
         $cnt=mysql_num_rows($maxprice);
         if($cnt>0)
         {
         	while($row=mysql_fetch_assoc($maxprice))
         	{
         		$price=$row["bid_price"];
         		$username=$row["user_first_name"];
         	}
         }

	
?>  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 ><?php echo $cat_name ?></h3>
		<h4><a href="index.php">Home</a><label>/</label>Single</h4>
		<div class="clearfix"> </div>
	</div>
</div>
		<div class="single">
			<div class="container">
						<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
							
<div id="picture-frame">
			<img src="../image/<?php echo $product_photo;?>" data-src="../image/<?php echo $product_photo;?>" alt="" class="img-responsive"/>
		</div>
										<script src="js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		
		
		
			</div>
			</div>
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3><?php echo $product_name;?></h3>
				<form action="dobid.php?id=<?php echo $product_id; ?>" method="post">
					
				 <div class="pr-single">
				  <p class="reduced " style="font-size: 30px;">Price : Rs. <?php echo $price; ?>
				  <?php
				  	 if($cnt>0)
				  	 {
				  	 	echo '<span style="float:right;font-size: 25px;color:black">Current Winner:'.$username.'</p>';
				  	 }


				   ?>
				</div>
				<div>
					<table class="table">
						<span class="bid-now-button">
							<tr>
								<td><h3 class="reduced"><font color="green">Place Your Bid here </font></h3> </td>
								<td>
									<select style="height:50px; width:100px; border-radius:10px; font-size:20px;" name="amount" class="form-control">
									
										<?php  
											$tot=$price;
											for ($x = 0; $x < 10; $x++) 
											{
												
												$inc=$price*0.05;
												$tot+=(int)$inc;
											  echo '<option value="'.$tot.'">'. $tot.' </option>';
											}
										?>										
									</select>

								</td>
								<?php 
								 if($left==00 && $leftmin==00)
								 {
									echo '<td><input style="height:50px; width:200px; border-radius:10px; font-size:20px;" type="submit" id="BidNow" value="Bid Now" title="Bid Now" class="btn-success" title="Click to Place BID"></td>';
								}
								else
								{
									$check=$obj->checksoldout($product_id);
			                            $cnt1=mysql_num_rows($check);
			                            if($cnt1>0)
			                            {
			                                	echo '<td><input style="height:50px; width:200px; border-radius:10px; font-size:20px;" type="button" id="comming Soon" value="Sold out" 	title="Sold Out" class="btn-success" title="Sold Out"></td>';
			                            }
			                            else
			                            {
												echo '<td><input style="height:50px; width:200px; border-radius:10px; font-size:20px;" type="button" id="Somming Soon" value="Comming Soon" 	title="Comming soon" class="btn-success" title="Comming Soon"></td>';
									}
								}
							?>
							</tr>
						</span>
					</table>

				</div>
				<h1><center><b>Description</b></center></h1>
				<p class="in-pa"> <?php echo $product_description?> </p>
			   	
					
				 
			   
			<div class="clearfix"> </div>
			</div>
		 

			</div>
		   <div class="clearfix"> </div>
	   </div>	
				 
				
	</div>
</div>
</form>
		<!---->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>Related Categories </h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
						
<?php 
	
	$res=$obj->getproductbysubid($subcat_id,$product_id);


                
    
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
			echo '<div class=" con-w3l wthree-of">							
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="single.php?id='.$subcat_id.'" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="../image/'.$row["product_photo"].'" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.php?id='.$row["product_id"].'">'.$sortcontent.'</a></h6>							
										</div>
										<div class="mid-2">
											<p style="color:black;">Rs. '.$row["product_min_bid_price"].'</p>
												<div class="clearfix"></div>
										</div>
										<div class="add">';
										 if($left==00 && $leftmin==00)
                          				  {
					                           echo ' <a href="single.php?id='.$row["product_id"].'"> <button class="btn btn-danger my-cart-btn my-cart-b" >Bid Now</button></a>';
					                      }
					                      else
					                      {
					                           echo '<a href="single.php?id='.$row["product_id"].'"><button class="btn btn-danger my-cart-btn my-cart-b" >Comming Soon</button></a>';
					                    	}
										echo '
									</div>
								</div>
							</div>
						</div>';
		}
	
	
?>
						
							
						<div class="clearfix"></div>
					</div>
				</div>
				
<!--footer-->
<?php 

	include_once("footer.php");
?>
<!-- //footer-->

<!-- smooth scrolling -->
	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
</body>
</html>