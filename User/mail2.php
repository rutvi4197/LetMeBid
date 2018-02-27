<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "../admin/phpmailer/class.phpmailer.php";
require '../admin/phpmailer/PHPMailerAutoload.php';
include 'database.php';
$obj=new database();
$email=$_POST["txtemail"];
 $res=$obj->getpassword($email);
 while($row=mysql_fetch_assoc($res))
 {
 	$password=$row["user_password"];
 	$user_name=$row["user_first_name"];
 }
        

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


	

$message = "<h1>LetMeBid</h1></br><h2>Your Password is ".$password;	
		$mail->addAddress($email,$user_name);
		
	$mail->MsgHTML($message);




try {
    // send mail
	
	
    $mail->Send();
    $msg = "Reminder send successfully";
	echo '<script>alert("'.$msg.'");window.location.href="login.php";</script>';
	
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
	echo $msg.'in 1';
} catch (Exception $e) {
    $msg = $e->getMessage();
	echo $msg.'in 2';
}


?>
