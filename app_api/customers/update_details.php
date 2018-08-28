<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
if( isset($_POST['customer_id']) ){

	$customer_id = (int) test_inputs($_POST['customer_id']);
	$qqq = "";
	$customer_name = "";
	if( isset($_POST['customer_name']) ){
		$customer_name = test_inputs( $_POST['customer_name'] );
		$qqq = $qqq."`customer_name` = '".$customer_name."', ";
	}
	
	$customer_password = "";
	if( isset($_POST['customer_password']) ){
		$customer_password = test_inputs( $_POST['customer_password'] );
		$qqq = $qqq."`customer_password` = '".$customer_password."', ";
	}
	$customer_phone = "";
	if( isset($_POST['customer_phone']) ){
		$customer_phone = test_inputs( $_POST['customer_phone'] );
		$qqq = $qqq."`customer_phone` = '".$customer_phone."', ";
	}
	$country_id = "";
	if( isset($_POST['country_id']) ){
		$country_id = test_inputs( $_POST['country_id'] );
		$qqq = $qqq."`country_id` = '".$country_id."', ";
	}
	$customer_city = "";
	if( isset($_POST['customer_city']) ){
		$customer_city = test_inputs( $_POST['customer_city'] );
		$qqq = $qqq."`customer_city` = '".$customer_city."', ";
	}
	$customer_zip_code = "";
	if( isset($_POST['customer_zip_code']) ){
		$customer_zip_code = test_inputs( $_POST['customer_zip_code'] );
		$qqq = $qqq."`customer_zip_code` = '".$customer_zip_code."', ";
	}
	$customer_short_about = "";
	if( isset($_POST['customer_short_about']) ){
		$customer_short_about = test_inputs( $_POST['customer_short_about'] );
		$qqq = $qqq."`customer_short_about` = '".$customer_short_about."', ";
	}
	$customer_about = "";
	if( isset($_POST['customer_about']) ){
		$customer_about = test_inputs( $_POST['customer_about'] );
		$qqq = $qqq."`customer_about` = '".$customer_about."', ";
	}
	
	

	$customer_picture = "";
	

	if(isset($_FILES['customer_picture']) && $_FILES['customer_picture']["tmp_name"]){
		$upload_res = upload_picture('customer_picture', 8000, 'uploads', '../../');
		if($upload_res == true){
			$customer_picture = $upload_res;
			$qqq = $qqq."`customer_picture` = '".$customer_picture."', ";
		}
	}
	
	
	
	
	
	
	
	
	
	$status = "";
	if( isset($_POST['status']) ){
		$status = test_inputs( $_POST['status'] );
		$qqq = $qqq."`status` = '".$status."', ";
	}
	$captain_id = "";
	if( isset($_POST['captain_id']) ){
		$captain_id = test_inputs( $_POST['captain_id'] );
		$qqq = $qqq."`captain_id` = '".$captain_id."', ";
	}
	

	
	
	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_updt = "UPDATE  `customers` SET ".$qqq." WHERE `customer_id` = $customer_id;";

		if(mysqli_query($KONN, $qu_customers_updt)){
			$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "updated" => "1" );
		} else {
			$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "result" => "ERR- ".mysqli_error( $KONN ) );
		}

	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR-NO REQUEST DATA" );
	}
	

} else {
	$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "result" => "ERR- NO REQUEST ID" );
}

	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();

?>
