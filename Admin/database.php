 <?php
class database
{
	private static $host='edufocus.db.9462939.hostedresource.com';
	private static $uname='edufocus';
	private static $pwd='Ddrr@9898';
	private static $con=NULL;
	//static uses one connection throughout whole programme. Hence it is best method to use.
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('edufocus',self::$con);
		return self::$con;
	}
	public function getliveproduct($day)
	{
		$date=date('Y-m-d');
		$con=database::connect();
			$res=mysql_query("select pt.*,b.*,pt.fk_user_id as 'owner_id' from product_tbl as pt,cattime_tbl as ct,category_tbl as cat,bid_tbl as b,bidconfirm_tbl as bidconf where ct.cattime_day='$day' and ct.fk_cat_id=cat.cat_id and pt.fk_cat_id=cat.cat_id and product_status=1 and b.fk_product_id=pt.product_id and bidconf.confirm_bid_date='$date' and bidconf.fk_bid_id=b.bid_id",$con);
			return $res;
			database::disconnect();
	}
	public function getuseremail($id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_id='$id'",$con);
		return $res;
		database::disconnect();
	}
	public static function disconnect()
	{
		mysql_close(self::$con);
		self::$con=NULL;
	}
	public function login($email,$password)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$email' and user_password='$password'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function gettimeofday($day)
	{
		$con=database::connect();
			$res=mysql_query("select * from cattime_tbl where cattime_day='$day'",$con);
			return $res;
			database::disconnect();
	}
	public function getalluser()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
		public function getalladmin()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_type=2",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getallproducts()
	{
		$con=database::connect();
		$res=mysql_query("select * from product_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function getallcategory()
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function getallsubcategory()
	{
		$con=database::connect();
		$res=mysql_query("select * from subcategory_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

public function userdetail($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function approveproducts()
	{

		$con=database::connect();
		$res=mysql_query("select product_name,product_photo from product_tbl where product_status=0",$con);

		return $res;	
	}

	public function productbylimit()
	{

		$con=database::connect();
		$res=mysql_query("select product_name,product_photo from product_tbl where product_status=0 ORDER BY product_id DESC LIMIT 3",$con);

		return $res;	
	}

	public function approveusers()
	{

		$con=database::connect();
		$res=mysql_query("select user_first_name,user_photo from user_tbl where user_type=0 ORDER BY user_id DESC LIMIT 3",$con);

		return $res;	
	}
	public function userdisplaybyid($user_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$user_email_id'",$con);

		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function peruserdisplay($user_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$user_email_id'",$con);

		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updateprofile($user_email_id,$user_first_name,$user_last_name,$user_contact_no)
	{
		$res=mysql_query("update user_tbl set user_first_name='$user_first_name',user_last_name='$user_last_name',user_contact_no='$user_contact_no' where user_email_id='$user_email_id'",
		database::connect());
		return $res;
	}

	public function checkpassword($email,$password)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email_id='$email' and user_password='$password'",$con);
			return $res;
			database::disconnect();
	}
	public function changepassword($email,$newpass)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set user_password='$newpass' where user_email_id='$email' ",$con);
			return $res;
			database::disconnect();
	}

	public function userdetail1($user_id)
	{
		$con=database::connect();
		$res=mysql_query("select  * from user_tbl where user_id='$user_id'",$con);
		return $res;
		database::disconnect();
	}
	public function categorydisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl ",$con);

		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function userdetail2()
	{
		$con=database::connect();
		$res=mysql_query("select  * from user_tbl where user_type=1",$con);
		return $res;
		database::disconnect();
	}
	public function categorydisplaybyid($cat_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl where cat_id=$cat_id ",$con);

		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function insertcategory($cat_name)
	{
		$con=database::connect();
		$res=mysql_query("insert into category_tbl values (null,'$cat_name')",$con);
		return $res;
		database::disconnect();
	}
	public function updatecategory($cat_id,$cat_name)
	{
		$con=database::connect();
		$res=mysql_query("update category_tbl set cat_name='$cat_name' where cat_id='$cat_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function categorydelete($cat_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from category_tbl where cat_id='$cat_id'",$con);
		return $res;
		database::disconnect();
	}

	public function categorymuldel($cat_id)
	{
		$con=database::connect();
		$q="delete from category_tbl where cat_id='$cat_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}	


	public function subcategorydisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from subcategory_tbl as s, category_tbl as c where s.fk_cat_id=c.cat_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function subcategorydisplaybyid($subcat_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from subcategory_tbl as s, category_tbl as c where s.fk_cat_id=c.cat_id and subcat_id=$subcat_id",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updatesubcategory($subcat_id,$subcat_name,$fk_cat_id)
	{
		$con=database::connect();
		$res=mysql_query("update subcategory_tbl set subcat_name='$subcat_name', fk_cat_id='$fk_cat_id' where subcat_id='$subcat_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertsubcategory($subcat_name,$fk_cat_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into subcategory_tbl values (null,'$subcat_name','$fk_cat_id')",$con);
		return $res;
		database::disconnect();
	}
	public function subcategorydelete($subcat_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from subcategory_tbl where subcat_id='$subcat_id'",$con);
		return $res;
		database::disconnect();
	}

	public function subcategorymuldel($subcat_id)
	{
		$con=database::connect();
		$q="delete from subcategory_tbl where subcat_id='$subcat_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}	



	public function usermuldel($u_email_id)
	{
		$con=database::connect();
		$q="delete from user_tbl where user_email_id='$u_email_id'";
		$res=mysql_query($q,$con);
		//echo $q;
	return $res;
	}
	public function userdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_type=0",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	
	public function userdelete($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from user_tbl where user_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}
	public function userapprove($user_id)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set user_type=1  where user_id='$user_id'",$con);
		return $res;
		database::disconnect();
	}
	public function userdisapprove($user_email_id)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set user_type=3  where user_email_id='$user_email_id' ",$con);
		return $res;
		database::disconnect();
	}
	public function productdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from product_tbl where product_status=0",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function productdisplay2()
	{
		$con=database::connect();
		$res=mysql_query("select * from product_tbl where product_status=2",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function productdisplay3()
	{
		$con=database::connect();
		$res=mysql_query("select * from product_tbl where product_status=1",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	
	public function productdisplay1()
	{
		$con=database::connect();
		$res=mysql_query("select DISTINCT fk_user_id from product_tbl where product_status=1",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function productdisplay_sold()
	{
		$con=database::connect();
		$res=mysql_query("select  * from product_tbl where product_status=3",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function productdetail($product_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from product_tbl where product_id='$product_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function productapprove($product_id)
	{
		$con=database::connect();
		$res=mysql_query("update product_tbl set product_status=1 where product_id='$product_id'",$con);
		return $res;
		database::disconnect();
	}
	public function productdisapprove($product_id)
	{
		$con=database::connect();
		$res=mysql_query("update product_tbl set product_status=2 where product_id='$product_id'",$con);
		return $res;
		database::disconnect();
	}
	public function productdelete($product_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from product_tbl where product_id='$product_id'",$con);
		return $res;
		database::disconnect();
	}
	public function confirm_bid_dis()
	{
		$con=database::connect();
		$res=mysql_query("select * from bidconfirm_tbl as c,bid_tbl as b,product_tbl as p where  product_status=3 and c.fk_product_id=p.product_id and c.fk_bid_id=b.bid_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function viewcurrentbidproducts($product_id)
	{
		$con=database::connect();
		$res=mysql_query("select pt.*,bt.*,ut.* from product_tbl as pt,bid_tbl as bt,user_tbl as ut where pt.product_id='$product_id' and pt.product_id=bt.fk_product_id and bt.fk_user_id=ut.user_id ",$con);


		return $res;
		database::disconnect();
	}
	public function productmuldel($product_id)
	{
		$con=database::connect();
		$q="delete from product_tbl where product_id='$product_id'";
		$res=mysql_query($q,$con);
		return $res;
		database::disconnect();
	}
	public function updateproductstatus($product_id)
	{
		$con=database::connect();
		$res=mysql_query("update product_tbl set product_status=3 where product_id='$product_id'",$con);
		return $res;
		database::disconnect();
	}
	public function userdisplay5()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_type=3",$con);
		return $res;
		database::disconnect();
	}

	public function updatepoint($user_id,$price)
	{
		$con=database::connect();
		$res=mysql_query("update userpoint_tbl set point_amount=point_amount+'$price' where fk_user_id='$user_id'",$con);
		return $res;
		database::disconnect();
	}
}

?>