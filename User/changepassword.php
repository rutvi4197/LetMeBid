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
        <h3>Change Password</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
          <center>
    

       <?php
      if(isset($_POST["btnpassword"]))
      {
        $oldpassword=$_POST["oldpassword"];
        $newpassword=$_POST["newpassword"];
        $cnfrmpassword=$_POST["confirmpassword"];
        $id=$_SESSION["user_id"];
        if($newpassword==$cnfrmpassword)
        {

          $res=$obj->checkpassword($id,$oldpassword);
          $cnt=mysql_num_rows($res);
          if($cnt==1)
          {
            $res1=$obj->changepassword($id,$newpassword);
            if($res1==1)
            {
              header('Location:index.php');
            }
            else
            {
              echo '<script>alert("Not Sucefully done"); </script>';
            }
          }
          else
          {
            echo '<script>alert("Old Password is Wrong ! Try Again"); </script>';
        
          }

        }
        else
        {
          echo '<script>alert("Password doesnt match ! Try Again"); </script>';
        }

      }


    ?>

        
              
                <div class="entry-widget">
                            <div class="widget-profile">
                                

                          <div class="info">
                        
                               <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                                     
                                     <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Old Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="oldpassword" type="password" placeholder="enter old password" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">New Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " placeholder="enter new password" id="username" name="newpassword" type="password" />
                                          </div>
                                      </div>
                                   
                                    <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Reenter New Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" placeholder="Reenter new password" id="address"  name="confirmpassword" type="password" />
                                          </div>
                                      </div>
                                  

                                      
                                       
                                       <center>
                             <button type="submit" name="btnpassword" class="btn btn-success text-center">Update</button>
                                  </center>

                                  </form>
 

                             

                          
                          </div>                            </div>
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