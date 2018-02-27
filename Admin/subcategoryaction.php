<?php

                            	require 'database.php';
                            	$subcat_id=$_REQUEST["subcat_id"];
                                $obj=new database();
                                $res=$obj->subcategorydelete($subcat_id);
                                 echo '<script langauge="javascript">;
                                    alert("Sub-Category deleted sucessfully");
                                    window.location.href="subcategory.php";
                                    </script>';

                            ?>