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
        <h3>Edit Profile</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
          <center>
    

       <?php 
                  //  include 'database.php';
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
        

       <?php
           
          
           
            if(isset($_POST["editpro"]))
            {

              $user_id=$_SESSION["user_id"];
              $user_email_id=$_POST["user_email_id"];
              $user_first_name=$_POST["user_first_name"];
              $user_last_name=$_POST["user_last_name"];
              $user_contact_no=$_POST["user_contact_no"];
              
              $obj1=new database();
              $res1=$obj1->updateprofile($user_id,$user_email_id,$user_first_name,$user_last_name,$user_contact_no);

                        echo '<script langauge="javascript">;
                                    alert("Updated sucessfully");
                                    window.location.href="viewprofile.php";
                                    </script>';

            
            }
        ?>

        
              
                <div class="entry-widget">
                            <div class="widget-profile">
                                <div class="image"></div>
                                <div class="portfolio text-center col-md-offset-1 col-sm-offset-3">
                                
                                <a onClick="user_photo"><img alt="" height="150px" width="150px" src="<?php echo $user_photo; ?>"></a>

                                 <a href=""><img alt="" height="150px" width="150px" src="../userphoto/<?php echo $user_photo; ?>"></a>

                           
                                    </div>
                                
                          <div class="info">
                        
                               <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                                     
                                     <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" readonly="" name="user_email_id" type="email" value="<?php echo   
                                              $user_email_id;?>" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">First Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control "  value="<?php echo  $user_first_name;?>" id="username" name="user_first_name" type="text" />
                                          </div>
                                      </div>
                                   

                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Last Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control "  value="<?php echo  $user_last_name;?>" id="username" name="user_last_name" type="text" />
                                          </div>
                                      </div>

                                    <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" value="<?php echo  $user_contact_no;?>" name="user_contact_no" type="text" />
                                          </div>
                                      </div>
                                  

                                       
                             <button type="submit" name="editpro" class="btn btn-success text-center">Update</button>
                                  </center>

                                  </form>
 

                             

                          
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