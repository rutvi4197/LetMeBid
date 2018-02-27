<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";
require 'phpmailer/PHPMailerAutoload.php';
include 'database.php';
$obj=new database();

 
        

$mail = new PHPMailer(true);


$mail->IsSMTP();


$mail->SMTPDebug = 4;


$mail->SMTPAuth = true;


$mail->SMTPSecure = 'ssl';


$mail->Host = 'smtp.gmail.com';


$mail->Port = 465;


$mail->Username = 'shahritu2111@gmail.com';


$mail->Password = 'ritu4197@';


$mail->Subject = 'Reminder';


$mail->SetFrom('4197ritu@gmail.com', 'shah Ritu');
  date_default_timezone_set("Asia/Kolkata");
$day=date("D");
$res=$obj->getliveproduct($day);

echo mysql_num_rows($res);
while($row=mysql_fetch_assoc($res))
{
	$name=$row["product_name"];
	$price=$row["bid_price"];
	$user_id=$row["fk_user_id"];
	$owner_id=$row["owner_id"];
	
	$update=$obj->updateproductstatus($row["product_id"]);
	$updatepoint=$obj->updatepoint($owner_id,$price);
	if($update==1)
	{
		
	}
	else
	{
		echo '<script>alert("Status not updated sucessfully");</script>';
	}
	

$message = "<h1>LetMeBid</h1></br><h2>Your item Sold sucessfully ";
	$res1=$obj->getuseremail($user_id);
	
	while($row1=mysql_fetch_assoc($res1))
	{
			
		$mail->addAddress($row1["user_email_id"],$row1["user_first_name"]);
		
	}
	$mail->MsgHTML($message);




try {
    // send mail
	
	
    $mail->Send();
    $msg = "Reminder send successfully";
	echo '<script>alert("'.$msg.'");window.location.href="main.php";</script>';
	
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
	echo $msg.'in 1';
} catch (Exception $e) {
    $msg = $e->getMessage();
	echo $msg.'in 2';
}

}
?>
