<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>LetMeBid</title>
</head>

<body>

<!--Header Start-->
<?php 
	include('headerwithoutlogin.php');
?>
<?php 

if(isset($_POST["btnlogin"]))
{
	$email=$_POST["txtemail"];
	$pwd=$_POST["txtpassword"];
	
	$res=$obj->login($email,$pwd);
	$cnt=mysql_num_rows($res);
	if($cnt==1)
	{
		$_SESSION["email"]=$email;
		$res=$obj->getid($email);
		while($row=mysql_fetch_assoc($res))
		{
			$user_id=$row["user_id"];
		}
		$_SESSION["user_id"]=$user_id;
		header('Location:index.php');
	}
	else
	{
		echo '<script>
		alert("Your Password is Wrong");</script>';
	}
}
?>
  <!-- Header End-->
 
 <!-- banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="index.html">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					<form action="login.php" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email ID" name="txtemail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="txtpassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Login" name="btnlogin">
					</form>
				</div>
				<div class="forg">
					<a href="forget.php" class="forg-left">Forgot Password</a>
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>

<!--footer-->

<?php 
	include('footer.php');
?>
<!-- //footer End-->
<!-- smooth scrolling -->
	

</body>
</html>