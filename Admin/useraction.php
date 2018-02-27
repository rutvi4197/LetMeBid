    <!--  dis approve user  -->
                            <?php

                            	require 'database.php';
<<<<<<< HEAD
                            	$user_email_id=$_REQUEST["user_email_id"];
=======
                            	$user_id=$_REQUEST["user_id"];
>>>>>>> e3ef28d4da39ebdd97a2626866736c9db5cc95c0
                                $obj=new database();
                                $res=$obj->userdisapprove($user_id);
                                 echo '<script langauge="javascript">;
                                    alert("User deleted sucessfully");
                                    window.location.href="user_disapprove.php";
                                    </script>';

                            ?>
