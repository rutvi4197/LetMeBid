    <!--  dis approve user  -->
                            <?php

                            	require 'database.php';
                            	$user_id=$_REQUEST["user_id"];
                                $obj=new database();
                                $res=$obj->userdelete($user_id);
                                 echo '<script langauge="javascript">;
                                    alert("User deleted sucessfully");
                                    window.location.href="user_disapprove.php";
                                    </script>';

                            ?>
