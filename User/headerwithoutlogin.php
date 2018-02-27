<?php 
	
	require 'database.php';
	$obj=new database();
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="LetMeBid" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate -->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<a href="index.php"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">
    <div class="container">
      
      <div class="logo">
       <h1 ><a href="index.php">LetMeBid<span>The Best Choice For Bidding</span></a></h1>
      </div>
      <div class="head-t">
        <ul class="card">
          <li><a href="login.php" ><i class="fa fa-heart" aria-hidden="true"></i>Login</a></li>
          <li><a href="register.php"><i class="fa fa-user" aria-hidden="true"></i>Register</a></li>

          <li><a href="sellproduct.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Sell Your Product</a></li>

          <li><a href="login.php" ><i class="fa fa-file-history" aria-hidden="true"></i>Purchase History</a></li>
        
        </ul> 
      </div>
      
      <div class="header-ri">
        <ul class="social-top">
          <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
        </ul> 
      </div>
 </div>
</div>
<!-- category -->
<div class="nav-top">
          <nav class="navbar navbar-default">
          
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            

          </div> 
          
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav ">
              <li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>  
                <?php 
                $res=$obj->getcat();
                
              while($row=mysql_fetch_assoc($res))
              {

              	echo '<li class="dropdown ">
                <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>'.$row["cat_name"].'<b class="caret"></b></span></a>
                <ul class="dropdown-menu multi">
                  <div class="row">
                    <div class="col-sm-3">
                    
                      <ul class="multi-column-dropdown">';
                        $res1=$obj->getsubcat($row["cat_id"]);
                        while($row1=mysql_fetch_assoc($res1))
                        {

                        echo '
                        <li><a href="product_subcatdisplay.php?id='.$row1["subcat_id"].'"><i class="fa fa-angle-right" aria-hidden="true"></i>'.$row1["subcat_name"].' </a></li>';
                   		 }
                       
                     echo'
                      </ul>
                    
                    </div>
                    
                    <div class="clearfix"></div>
                  </div>  
                </ul>
              </li>';

              }

                ?>
    
            </ul>
          </div>
          </nav>
         
          <div class="clearfix"></div>
        </div>

	
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  