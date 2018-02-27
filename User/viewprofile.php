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
<link rel="stylesheet" type="text/css" href="css/EduFocus.css">
</head>
<body>


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
        <h3>View Profile</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
          <center>
    

       <?php 
                    //include 'database.php';
                    $obj=new database();
                    $res=$obj->peruserdisplay($_SESSION["user_id"]);
                    while($row=mysql_fetch_assoc($res))
                    {
                        $user_email_id=$row["user_email_id"];
                        $user_first_name=$row["user_first_name"];
                        $user_last_name=$row["user_last_name"];
                        $user_contact_no=$row["user_contact_no"];
                       
                        $user_photo=$row["user_photo"];
                    }
        ?>
      
                
                <div class="entry-widget">
                            <div class="widget-profile">
                                <div class="image"></div>
                                <div class="portfolio text-center col-md-offset-1 col-sm-offset-3">
                                
                                <img alt="" src="../userphoto/<?php echo $user_photo; ?>">
                           
                                    </div>
                                <div class="info">
                                    <h3>
                                     <label>Email Id:</label>
                                    <?php echo $user_email_id;?>
                                    <br/><br>
                                    <label>First Name:</label>
                                    <?php echo $user_first_name;?>
                                    <br/><br>
                                    <label>Last Name:</label>
                                    <?php echo $user_last_name;?>
                                    <br/><br>
                                    <label>Mobile Number:</label>
                                    <?php echo $user_contact_no;?>
                                    <br/><br>
                                    </h3>


                                   
                                 
                                    
 <a href="editprofile.php"><button type="button" class="btn btn-danger editprofile_btn" aria-haspopup="true" aria-expanded="false" ">
    Edit Profile 
  </button></a>
    


    
  <a href="changepassword.php"><button type="button" class="btn btn-danger" aria-haspopup="true" aria-expanded="false" >
    Change Password 
  </button></a>
        


                                </div>
                            </div>
</center>
              
             
             
              
             
             
              
            
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