<?php 
	session_start();
	if(isset($_SESSION["user_id"])=="")
 	{
    	header('Location:login.php');
  	}
  	else
 	{
    	include_once('headerwithlogin.php');
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LetMeBid</title>
	<script src="Scripts/jquery-1.9.1.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
	$("#test5").keyup(function() {
	    var val = $("#test5").val();
	    if (parseInt(val) < 0 || isNaN(val)) {
	        alert("Please Enter Only Numeric Values in Product Price");
	        $("#test5").val("");
	        $("#test5").focus();
	    }
		});
	});
	</script>

</head>
<body>

<?php 

if(isset($_POST["btnadd"]))
{
	$name=$_POST["txtname"];
	$price=$_POST["txtprice"];
	$year=(int)date("Y");
	$month=(int)date("m");
	$day=(int)date("d");
	$cat=$_POST["category"];
	$subcat=$_POST["subcat"];
	$desc=$_POST["txtdesc"];
	$status=0;

	$tot=$year."-".$month."-".$day;
	
	$photo="../image/".basename($_FILES["txtphoto"]["name"]);
	$photo1=basename($_FILES["txtphoto"]["name"]);
	$ext=pathinfo($photo,PATHINFO_EXTENSION);
		
	if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
	{
		if(move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$photo))
		{					
			$res=$obj->addproduct($name,$desc,$price,$status,$photo1,$tot,$cat,$subcat,$user_id);
			if($res==1)
			{
				//$_SESSION["email"]=$email;					
				//header('Location:index.php');
				echo '<script>alert("Your Product has been submited");
				window.location.href="index.php";
				</script>';
			}
			else
			{
				echo '<script>
				alert("Your Product has not been submited");
				</script>';
			}	
		}
	}
}
?>  <!---->

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Sell Your Product</h3>
		<h4><a href="index.html">Home</a><label>/</label>Sell Your Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->
	<div class="container">
		<div class="row">
			<center><h1><br>Add Your Products here</h1></center><br>
				<form action="sellproduct.php" method="post" enctype="multipart/form-data">
					
				<div class="col-md-6">
					<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Name" name="txtname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Name';}" required="true">
							<div class="clearfix"></div>
					</div>
					<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Price" id="test5" name="txtprice" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Price';}" required="true" maxlength="30">
							<div class="clearfix"></div>
					</div>
					<div class="key">
							<i class="fa fa-photo" aria-hidden="true"></i>
							<input  type="file"  name="txtphoto" required/>
							<div class="clearfix"></div>
					</div>
					<div class="key">
								<select name="category" class="form-control">
									<?php
									$obj=new database();
									$res=$obj->getcat();
									while($row=mysql_fetch_array($res,MYSQL_ASSOC))
									{
										echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
									}
									?>		
								</select>
							<div class="clearfix"></div>
					</div>
				</div>

				<div class="col-md-6">
					
					<div class="key">
								<select name="subcat" class="form-control">
									<?php
									$obj=new database();
									$res=$obj->getAllSubCat();
									while($row=mysql_fetch_array($res,MYSQL_ASSOC))
									{
										echo '<option value="'.$row["subcat_id"].'">'.$row["subcat_name"].'</option>';
									}
									?>		
								</select>
							<div class="clearfix"></div>
					</div>
					<div class="key">
						<label><font color="black" size=3 style="color:gray;"> Product Description : </font></label>
					<textarea rows="7" cols="65" name="txtdesc">
						
					</textarea>			

					<div class="clearfix"></div>
					</div>
				</div>

				<center><input type="submit" value="Add Product" style="font-size:30px; border-radius: 10px" name="btnadd" class="btn-success"></center><br>
				</form>
		</div>	
	</div>

		<?php 
			include('footer.php');
		?>
<!--footer-->
<!-- //footer-->
<!-- smooth scrolling -->
	

</body>
</html>