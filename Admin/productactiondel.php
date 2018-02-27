<!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$product_id=$_REQUEST["product_id"];
                                $obj=new database();
                                $res=$obj->productdelete($product_id);
                                 echo '<script langauge="javascript">;
                                    alert("product deleted sucessfully");
                                    window.location.href="product_disapprove.php";
                                    </script>';

                            ?>
