<?php 
  session_start();
  $user_id=$_SESSION["user_id"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>LetMeBid </title>
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
  <script src="Scripts/jquery-1.9.1.js"></script>
  
<script type="text/javascript">
  $(document).ready(function(){
  $("#test2").keyup(function() {
      var val = $("#test2").val();
      if (parseInt(val) < 0 || isNaN(val)) {
          alert("Please Enter Only Numeric Values in CVV ");
          $("#test2").val("");
          $("#test2").focus();
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#test3").keyup(function() {
      var val = $("#test3").val();
      if (parseInt(val) < 0 || isNaN(val)) {
          alert("Please Enter Only Numeric Values in Card Number ");
          $("#test3").val("");
          $("#test3").focus();
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#test4").keyup(function() {
      var val = $("#test4").val();
      if (parseInt(val) < 0 || isNaN(val)) {
          alert("Please Enter Only Numeric Values in Amount to Add ");
          $("#test4").val("");
          $("#test4").focus();
      }
    });
  });
</script>
</head>
<body>
  <!-- header -->

<?php 
  if(isset($_SESSION["user_id"])=="")
  {
     header('location:login.php');
  }
  else
  {
     include_once('headerwithlogin.php');
  }
?>
<?php 

if(isset($_POST["btnconfirm"]))
{
  $name=$_POST["txtname"];
  $cvv=$_POST["txtcvv"];
  $cardno=$_POST["txtcardno"];
  $price=$_POST["txtprice"];
 
  $res=$obj->updatepointofuser($price,$user_id);

  if($res==1)
  {
    header('Location:index.php');
  }
  else
  {
    echo '<script>
    alert("Your Wallet has not been Updated");</script>';
  }
}
?>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <center>
          <div class="heading">
                <h1>Confirm Purchase</h1>
          </div>
          <br>
            <form action="payment.php" method="post">
              <div class="col-md-8 col-sm-8">
              <label>Name</label> 
              <input type="text" class="form-control" name="txtname" onblur="return allLetter(txtname);"/>
              </div>

              <div class="col-md-4 col-sm-4">
              <label>CVV</label>          
              <input type="text" id="test2" class="form-control" name="txtcvv" maxlength="3" size=3>
              </div>


              <div class="col-md-12 col-sm-12">
              </br>
                 <div class="form-group">
                <label>Amount</label>
                <input type="text" style="float: center;" class="form-control" name="txtprice" placeholder="Enter Amount to Add in Wallet" id="test4" required/>
              
              </div>
              </div>

              <div class="col-md-12 col-sm-12">
              <label>Card Number</label> 
              <input type="text" class="form-control" name="txtcardno" id="test3" maxlength="16" size="16">
              </div>

              <div class="col-md-5 col-sm-5 form-group">
              <br>
              <label>Expiration Date</label>  
              <br>
              <select class ="form-control" name="month" style="height: 35px; width:50%;float: left">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <div style="margin-left: 50px">
                        <select  class ="form-control" name="year" style="height: 35px; width:50%;">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                      </div>
              </div>

              <div class="col-md-2 col-sm-2">
              
              </div>

              <div class="col-md-5 col-sm-5">
                <br>
                <img src="../image/mastercard.jpg">
                <img src="../image/visa.jpg">
                <img src="../image/amex.jpg">
              </div>

              <div class="col-md-12 col-sm-12">
              
              <div class="col-md-3 col-sm-3">
              </div>
              
              <div class="col-md-6 col-sm-6">
             
              </div>

              <div class="col-md-3 col-sm-3">
              </div>
              </div>

              <div class="col-md-12 col-sm-12">
              <div class="form-group">
                <input type="submit" class="btn btn-info" value="Confirm Payment" name="btnconfirm" />
                
              </div>
              </div>
            </form>
          </center>
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