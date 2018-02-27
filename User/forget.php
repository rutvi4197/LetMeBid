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
<form action="mail2.php" method="post">
	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Forget Password</h3>
					<form action="mail2.php" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Enter Email ID" name="txtemail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email ID';}" required="">
							<div class="clearfix"></div>
						</div>
						
						<center><input type="submit" value="Continue" name="btncontinue"></center>
					</form>
				</div>		
		</div>
	</div>
</form>
<!--footer-->

<?php 
	include('footer.php');
?>
<!-- //footer End-->
<!-- smooth scrolling -->
	

</body>
</html>