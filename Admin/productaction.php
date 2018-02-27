    <!--  dis blog  -->
                            <?php

                            	require 'database.php';
                            	$product_id=$_REQUEST["product_id"];
                                $obj=new database();
                                $res=$obj->productdisapprove($product_id);
                                 echo '<script langauge="javascript">;
                                    alert("product Dis approved sucessfully");
                                    window.location.href="product_approve.php";
                                    </script>';

                            ?>
