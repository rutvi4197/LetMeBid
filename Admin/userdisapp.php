    <!-- Dis approve blog  -->
                            <?php

                            	require 'database.php';
                            	$user_email_id=$_REQUEST["user_email_id"];
                                $obj=new database();
                                $res1=$obj->userdisplay($user_email_id);
                                while($row=mysql_fetch_assoc($res1))
                            {
          
                                $user_id=$row["user_id"];
                                $user_first_name=$row["user_first_name"];
                                $user_last_name=$row["user_last_name"];
                                $user_contact_no=$row["user_contact_no"];
                                $user_photo=$row["user_photo"];
                                $user_password=$row["user_password"];
                                $user_type=4;
                                $user_aadhar_card_number=$row["user_aadhar_card_number"];
                                $user_address=$row["user_address"];
                                $fk_city_id=$row["fk_city_id"];
                                $fk_state_id=$row["fk_state_id"];
                                
                                $res=$obj->userdisapprove($user_email_id,$user_first_name,$user_last_name,$user_contact_no,$user_photo,$user_password,$user_type,$user_aadhar_card_number,$user_address,$fk_city_id,$fk_state_id);
                            }
                            if($res1==1)
        {
                                 echo '<script langauge="javascript">;
                                    alert("Student approved sucessfully");
                                    window.location.href="user_approve.php";
                                    </script>';
                                }
                                else
        {
            echo '<script>alert("Not updated");</script>';
        }

                            ?>
