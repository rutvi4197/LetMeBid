<?php
class Database
{
	private static $host='edufocus.db.9462939.hostedresource.com';
	private static $uname='edufocus';
	private static $pwd='Ddrr@9898';
	private static $con=NULL;
	
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('edufocus',self::$con);
		return self::$con;
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
		return $res;
		database::disconnect();
	}
	public function getpassword($email)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$email' ",$con);
		return $res;
		database::disconnect();
	}
	public function getid($email)
	{	
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_email_id='$email'",$con);
		return $res;
		database::disconnect();
	}
	public function getPointsById($user_id)
	{	
		$con=database::connect();
		$res=mysql_query("select * from userpoint_tbl where fk_user_id='$user_id'",$con);
		return $res;
		database::disconnect();
	}
	public function signup($email,$fname,$lname,$mobile,$photo,$pwd,$type,$aadhar,$city,$state)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values(NULL,'$email','$fname','$lname','$mobile','$photo','$pwd','$type','$aadhar','$city','$state')",$con);
		return $res;
		database::disconnect();
	}
	public function getAllCity()
	{		
		$con=database::connect();
		$res=mysql_query("select * from city_tbl ",$con);
		return $res;
		database::disconnect();
	}
	public function getAllState()
	{		
		$con=database::connect();
		$res=mysql_query("select * from state_tbl ",$con);
		return $res;
		database::disconnect();
	}
	public function addproduct($name,$desc,$price,$status,$photo,$tot,$cat,$subcat,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into product_tbl values(NULL,'$name','$desc','$price','$status','$photo','$tot','$cat','$subcat','$user_id')",$con);
		return $res;
		database::disconnect();
	}
	public function updateToWallet($price,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into userpoint_tbl values(NULL,'$price','$user_id')",$con);
		return $res;
		database::disconnect();
	}
	public function getcat()
	{
		$con=database::connect();
		$res=mysql_query("select * from category_tbl",$con);
		return $res;
		database::disconnect();
	}
	public function getAllSubCat()
	{
		$con=database::connect();
		$res=mysql_query("select * from subcategory_tbl",$con);
		return $res;
		database::disconnect();
	}
	public function getsubcat($id)
	{
		$con=database::connect();
		$res=mysql_query("select * from subcategory_tbl where fk_cat_id='$id'",$con);
		return $res;
		database::disconnect();
	}
	public function getliveproduct($day)
	{
		$con=database::connect();
		$res=mysql_query("select pt.* from product_tbl as pt,cattime_tbl as ct,category_tbl as cat
		where ct.cattime_day='$day' and ct.fk_cat_id=cat.cat_id and pt.fk_cat_id=cat.cat_id and product_status=1 limit 8",$con);
		return $res;
		database::disconnect();
	}
	public function getproductbysubcat($subcat_id)
	{
		$con=database::connect();
		$res=mysql_query("select DISTINCT pt.product_id,pt.* from product_tbl as pt,cattime_tbl as ct,category_tbl as cat,subcategory_tbl as sc where  ct.fk_cat_id=cat.cat_id and pt.fk_cat_id=cat.cat_id and product_status=1  and sc.subcat_id='$subcat_id' and pt.fk_subcat_id='$subcat_id' ",$con);
		return $res;
		database::disconnect();
	}
	public function getsubcatday($subcat_id)
	{
		$con=database::connect();
		$res=mysql_query("select ct.* from cattime_tbl as ct,category_tbl as cat,subcategory_tbl as sc  where ct.fk_cat_id=cat.cat_id and  sc.fk_cat_id=cat.cat_id and sc.subcat_id='$subcat_id' ",$con);
		return $res;
		database::disconnect();
	}
	public function getproductbyid($pro_id)
	{
		$con=database::connect();
		$res=mysql_query("select p.*,c.* from product_tbl as p,category_tbl as c where p.product_id='$pro_id' and p.fk_cat_id=c.cat_id",$con);
		return $res;
		database::disconnect();
	}
	public function getpoint($id)
	{
		$con=database::connect();
		$res=mysql_query("select * from userpoint_tbl where fk_user_id='$id'",$con);
		return $res;
		database::disconnect();
	}
	public function getproductbysubid($sub_id,$pro_id)
	{
		$con=database::connect();
		$res=mysql_query("select p.*,s.* from product_tbl as p,subcategory_tbl as s where p.fk_subcat_id=s.subcat_id and s.subcat_id='$sub_id' and p.product_id!='$pro_id'",$con);
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
	public function getsubcatname($subcat_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from subcategory_tbl where subcat_id='$subcat_id'",$con);
		return $res;
		database::disconnect();
	}
	public function getmaxprice($product_id)
	{
		$con=database::connect();
		$res=mysql_query("select b.*,u.* from bid_tbl as b,user_tbl as u where fk_product_id='$product_id' and b.fk_user_id=u.user_id ORDER BY bid_price desc LIMIT 1",$con);
		return $res;
		database::disconnect();
	}
	public function getbestsolditems()
	{
		$con=database::connect();
		$res=mysql_query("select bt.*,pt.* from bidconfirm_tbl as bt,product_tbl as pt,bid_tbl as bid where bt.fk_product_id=pt.product_id and bid.bid_id=bt.fk_bid_id ORDER BY bid.bid_price desc LIMIT 8",$con);
		return $res;
	}
	public function addbid($price,$product_id,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into bid_tbl values(NULL,'$price','$product_id','$user_id')",$con);
		return $res;
		database::disconnect();
	}
	public function getbiddetailsofproduct($product_id,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from bid_tbl where fk_product_id='$product_id' and fk_user_id!='$user_id'",$con);
		return $res;
		database::disconnect();
	}


	public function getbiddetailsofproductofuser($product_id,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from bid_tbl where fk_product_id='$product_id' and fk_user_id='$user_id'",$con);
		return $res;
		database::disconnect();
	}



	public function updatepointofuser($userprice,$user)
	{
		$con=database::connect();
		$res=mysql_query("update userpoint_tbl set point_amount=point_amount+'$userprice' where fk_user_id='$user'",$con);
		return $res;
		database::disconnect();
	}
	public function updatepointofuserforbid($userprice,$user)
	{
		$con=database::connect();
		$res=mysql_query("update userpoint_tbl set point_amount=point_amount-'$userprice' where fk_user_id='$user'",$con);
		return $res;
		database::disconnect();
	}
	public function deletebid($bid_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from bid_tbl where bid_id='$bid_id'",$con);
		return $res;
		database::disconnect();
	}
	public function getcurrent_bid_id($product_id,$user_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from bid_tbl where fk_product_id='$product_id' and fk_user_id='$user_id'",$con);
		return $res;
		database::disconnect();
	}
	public function addconfirmbid($date,$currentbid_id,$product_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into bidconfirm_tbl values(NULL,'$date','$currentbid_id','$product_id')",$con);
		return $res;
		database::disconnect();
	}
	public function purchase_his($user_id)
	{
		$con=database::connect();

		$res=mysql_query("select bt.*,pt.*,ut.*,bit.* from bidconfirm_tbl as bt,product_tbl as pt,user_tbl as ut,bid_tbl as bit where user_id='$user_id' and bt.fk_product_id=pt.product_id and pt.product_status=3 and ut.user_id=bit.fk_user_id and bt.fk_bid_id=bit.bid_id",$con);
			return $res;
			database::disconnect();
	}
	public function add_wallet($user_id)
	{		
		$con=database::connect();
		$res=mysql_query("insert into userpoint_tbl values(null,0,'$user_id') ",$con);
		return $res;
		database::disconnect();
	}
	public function updateconfirmbid($currentbid_id,$product_id)
	{
			$con=database::connect();
			$res=mysql_query("update bidconfirm_tbl set fk_bid_id='$currentbid_id' where fk_product_id='$product_id'",$con);
			return $res;
			database::disconnect();
	}

	public function checksoldout($product_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from bid_tbl where fk_product_id='$product_id'",$con);
		return $res;
		database::disconnect();
	}

		public function sell_his($user_id)
	{
		$con=database::connect();
			$res=mysql_query("select pt.*,ut.*,bt.* from product_tbl as pt,user_tbl as ut,bid_tbl as bt where pt.fk_user_id='$user_id' and  pt.product_status=3 and pt.product_id=bt.fk_product_id and bt.fk_user_id=ut.user_id",$con);
			return $res;
			database::disconnect();
	}
		public function unsold_his($user_id)
	{
		$con=database::connect();
			$res=mysql_query("select * from product_tbl  where fk_user_id='$user_id' and product_status=1",$con);
			return $res;
			database::disconnect();
	}
	public function peruserdisplay($user_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where user_id='$user_id'",$con);

		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updateprofile($user_id,$user_email_id,$user_first_name,$user_last_name,$user_contact_no)
	{
		$res=mysql_query("update user_tbl set user_email_id='$user_email_id',user_first_name='$user_first_name',user_last_name='$user_last_name',user_contact_no='$user_contact_no' where user_id='$user_id'",database::connect());
		return $res;
	}
	public function checkpassword($id,$password)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_id='$id' and user_password='$password'",$con);
			return $res;
			database::disconnect();
	}
	public function changepassword($id,$newpass)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set user_password='$newpass' where user_id='$id' ",$con);
			return $res;
			database::disconnect();
	}

}

?>