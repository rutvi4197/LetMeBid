<?php

                            	require 'database.php';
                            	$cat_id=$_REQUEST["cat_id"];
                                $obj=new database();
                                $res=$obj->categorydelete($cat_id);
                                 echo '<script langauge="javascript">;
                                    alert("Category deleted sucessfully");
                                    window.location.href="category.php";
                                    </script>';

                            ?>