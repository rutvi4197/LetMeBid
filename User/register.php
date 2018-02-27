<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LetMeBid</title>
	<script src="Scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript">


function allLetter(cat_name)
{
  var letters=/^[A-Za-z]+$/;
  if(cat_name.value.match(letters))
  {
      return true;
  }
  else
  {
      
      cat_name.value="";
      cat_name.focus();
      alert(' Name must have Alphabetic characters only');
      return false;
  }
}
</script>

	<script type="text/javascript">
	$(document).ready(function(){
	$("#test").keyup(function() {
	    var val = $("#test").val();
	    if (parseInt(val) < 0 || isNaN(val)) {
	        alert("Please Enter Only Numeric Values in Mobile Number");
	        $("#test").val("");
	        $("#test").focus();
	    }
		});
	});
	</script>
	

	<script type="text/javascript">
	$(document).ready(function(){
	$("#test1").keyup(function() {
	    var val = $("#test1").val();
	    if (parseInt(val) < 0 || isNaN(val)) {
	        alert("Please Enter Only Numeric Values in Aadhar Card Number");
	        $("#test1").val("");
	        $("#test1").focus();
	    }
		});
	});
	</script>

</head>
<body>
<?php 
	include('headerwithoutlogin.php');
?>
<?php 

if(isset($_POST["btnsignup"]))
{
	$fname=$_POST["txtfname"];
	$lname=$_POST["txtlname"];
	$email=$_POST["txtemail"];
	$mobile=$_POST["txtmobile"];
	$pwd=$_POST["txtpassword"];
	$repwd=$_POST["txtrepassword"];
	$type=0;
	$aadhar=$_POST["txtaadhar"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$photo="../userphoto/".basename($_FILES["txtphoto"]["name"]);
	$ext=pathinfo($photo,PATHINFO_EXTENSION);
		
	if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
	{
		if(move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$photo))
		{		
			if($pwd==$repwd)
			{			
				$res=$obj->getid($email);
				$_SESSION["user_id"]=$user_id;

				$res=$obj->signup($email,$fname,$lname,$mobile,$photo,$pwd,$type,$aadhar,$city,$state);
				if($res==1)
				{
					$_SESSION["email"]=$email;
							$res3=$obj->getid($email);
						while($row=mysql_fetch_assoc($res3))
						{
							$user_id=$row["user_id"];
						}
					
					$res1=$obj->add_wallet($user_id);
					header('Location:index.php');
				}
				else
				{
					echo"Something went wrong";
				}
			}
			else
			{
				echo '<script>
				alert("Your Password and Confirm Password is Wrong");
				</script>';
			}		
		}
	}
}
?>  <!---->

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="register.php" method="post" enctype="multipart/form-data">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="First Name" name="txtfname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="true" maxlength="30">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Last Name" name="txtlname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required="true" maxlength="25">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email ID" name="txtemail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email ID';}" required="" maxlength="40">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" id="test" value="Mobile Number" name="txtmobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="true" maxlength="10">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" id="test1" value="Aadhar Card Number" name="txtaadhar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Aadhar Card Number';}" required="true" maxlength="12">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="txtpassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="" maxlength="15" minlength="6">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="txtrepassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="" maxlength="15" minlength="6">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-photo" aria-hidden="true"></i>
							<input  type="file"  name="txtphoto" required/>
							<div class="clearfix"></div>
						</div>
												
						<div class="key">
								<select name="state" class="form-control">
									<?php
									$obj=new database();
									$res=$obj->getAllState();
									while($row=mysql_fetch_array($res,MYSQL_ASSOC))
									{
										echo '<option value="'.$row["pk_state_id"].'">'.$row["state_name"].'</option>';
									}
									?>		
								</select>
							<div class="clearfix"></div>
						</div>
						<div class="key">
								<select name="city" class="form-control">
									<?php
									$obj=new database();
									$res=$obj->getAllCity();
									while($row=mysql_fetch_array($res,MYSQL_ASSOC))
									{
										echo '<option value="'.$row["pk_city_id"].'">'.$row["city_name"].'</option>';
									}
									?>		
								</select>
							<div class="clearfix"></div>
						</div>

						<input type="submit" value="Submit" name="btnsignup">
					</form>
				</div>
				
			</div>
		</div>
<!--footer-->
<!-- //footer-->
<!-- smooth scrolling -->
	
<!-- Priyansh -->
</body>
</html>