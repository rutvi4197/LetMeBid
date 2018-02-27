    <!--  approve blog  -->
                            <?php

                            	require 'database.php';
                            	$product_id=$_REQUEST["product_id"];
                                $obj=new database();
                                
                                $res=$obj->productapprove($product_id);
                            if($res==1)
                            {
        
                                 echo '<script langauge="javascript">;
                                    alert("Product approved sucessfully");
                                    window.location.href="product_approve.php";
                                    </script>';
}
else
{
            echo '<script>alert("Not updated");</script>';
        }
                            ?>
