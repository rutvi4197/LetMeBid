<?php 

session_start();
	if(isset($_SESSION["user_id"])=="")
 	{
    	header('Location:login.php');
  	}

	require 'database.php';
	$obj=new database();
	$product_id=$_REQUEST["id"];
	$price=(int)$_POST["amount"];
	$user_id=$_SESSION["user_id"];

	$res1=$obj->getbiddetailsofproductofuser($product_id,$user_id);
	if($res1>0)
	{
		header('Location:single.php?id='.$product_id);
	}

	

	$res=$obj->getpoint($user_id);
	while($row=mysql_fetch_assoc($res))
	{
		$point=$row["point_amount"];
	}
	if($point>=$price)
	{
		//add bid to bid tbl
	$res=$obj->addbid($price,$product_id,$user_id);
	if($res==1)
	{

			$minuspoint=$obj->updatepointofuserforbid($price,$user_id);
			if($minuspoint==1)
			{

			}
			else
			{
				echo "not minus user point";
			}

	
			$currentbid=$obj->getcurrent_bid_id($product_id,$user_id);
			while($row=mysql_fetch_assoc($currentbid))
			{
				$currentbid_id=$row["bid_id"];
			}



		$res1=$obj->getbiddetailsofproduct($product_id,$user_id);
		if(mysql_num_rows($res1)>0)
		{
			while($row=mysql_fetch_assoc($res1))
			{
				$userprice=$row["bid_price"];
				$user=$row["fk_user_id"];
				$bid_id=$row["bid_id"];
				$res2=$obj->updatepointofuser($userprice,$user);
				if($res2==1)
				{
					$res3=$obj->deletebid($bid_id);
					if($res3==1)
					{
									$update=$obj->updateconfirmbid($currentbid_id,$product_id);
									if($update==1)
									{
										header('Location:single.php?id='.$product_id);
									}
									else
									{
										echo "Not update confirm sucessfully";
									}
			
					}
					else
					{
						echo 'Not delete Sucessfully';
					}
				}
				else
				{
					echo "Not updated sucessfully";
				}
			}
		
		}
		else
		{

			$date=date('Y-m-d');
			$add=$obj->addconfirmbid($date,$currentbid_id,$product_id);
			if($add==1)
			{
				header('Location:single.php?id='.$product_id);
			}
			else
			{
				echo "Not add confirm sucessfully";
			}
			
		}
	}
		else
		{
			echo "Error in query";
		}

	}
	else
	{
		echo '<script>alert("You have not enough point to buy this product");
				window.location.href="payment.php";
				</script>';
	}

?>