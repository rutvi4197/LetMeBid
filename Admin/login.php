<?php

    session_start();

?>
 <?php
 
            $password=$_POST["txtpass"];
            $email=$_POST["txtemail"]; 
            require 'database.php';
            $obj=new database();
            $res=$obj->login($email,$password);
            $cnt=mysql_num_rows($res);
           // echo $email;
           // echo $password;
            if($cnt==1)
            {

            while($row=mysql_fetch_array($res))
            {
                $user_email_id=$row["user_email_id"];
                $_SESSION["user_email_id"]=$user_email_id;
            	  if($row['user_type']==2)
                    {
                        //$_SESSION["u_email_id"]=$email;
                        //$_SESSION["u_email_id"]=$email1;

                    header('location:main.php');
                       //     echo "admin ayo";
                    }
                    else
                    {
                        echo '<script langauge="javascript">;
                                    alert("You are not eligible");
                                    window.location.href="index.php";
                                    </script>';
                    }
               
            }

            }
            else
            {
                echo '<script langauge="javascript">;
                                    alert("Invalid Username Or Password");
                                    window.location.href="index.php";
                                    </script>';
             
            }
            
    
 ?>
