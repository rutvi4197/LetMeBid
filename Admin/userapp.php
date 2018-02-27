    <!--  approve blog  -->
                            <?php

                            	require 'database.php';
                            	$user_id=$_REQUEST["user_id"];
                                $obj=new database();
                                
                            $res=$obj->userapprove($user_id);
                            if($res==1)
                          {
                                 echo '<script langauge="javascript">;
                                    alert("User approved sucessfully");
                                    window.location.href="user_approve.php";
                                    </script>';
                                }
                                else
        {
            echo '<script>alert("Not approve");</script>';
        }

                            ?>
