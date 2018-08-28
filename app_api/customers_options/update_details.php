<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
if( isset($_POST['customer_id']) ){

	$customer_id = (int) test_inputs($_POST['customer_id']);
	$qqq = "";
	$units = "";
	if( isset($_POST['units']) ){
		$units = test_inputs( $_POST['units'] );
		$qqq = $qqq."`units` = '".$units."', ";
	}
	$height = "";
	if( isset($_POST['height']) ){
		$height = test_inputs( $_POST['height'] );
		$qqq = $qqq."`height` = '".$height."', ";
	}
	$dob = "";
	if( isset($_POST['dob']) ){
		$dob = test_inputs( $_POST['dob'] );
		$qqq = $qqq."`dob` = '".$dob."', ";
	}
	$gender = "";
	if( isset($_POST['gender']) ){
		$gender = test_inputs( $_POST['gender'] );
		$qqq = $qqq."`gender` = '".$gender."', ";
	}
	$current_body_weight = "";
	if( isset($_POST['current_body_weight']) ){
		$current_body_weight = test_inputs( $_POST['current_body_weight'] );
		$qqq = $qqq."`current_body_weight` = '".$current_body_weight."', ";
	}
	$current_body_fat = "";
	if( isset($_POST['current_body_fat']) ){
		$current_body_fat = test_inputs( $_POST['current_body_fat'] );
		$qqq = $qqq."`current_body_fat` = '".$current_body_fat."', ";
	}
	$target_body_weight = "";
	if( isset($_POST['target_body_weight']) ){
		$target_body_weight = test_inputs( $_POST['target_body_weight'] );
		$qqq = $qqq."`target_body_weight` = '".$target_body_weight."', ";
	}
	$target_body_fat = "";
	if( isset($_POST['target_body_fat']) ){
		$target_body_fat = test_inputs( $_POST['target_body_fat'] );
		$qqq = $qqq."`target_body_fat` = '".$target_body_fat."', ";
	}
	$is_reminder = "";
	if( isset($_POST['is_reminder']) ){
		$is_reminder = test_inputs( $_POST['is_reminder'] );
		$qqq = $qqq."`is_reminder` = '".$is_reminder."', ";
	}
	$is_hormones = "";
	if( isset($_POST['is_hormones']) ){
		$is_hormones = test_inputs( $_POST['is_hormones'] );
		$qqq = $qqq."`is_hormones` = '".$is_hormones."', ";
	}
	
		
	if( $qqq != '' ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_options_updt = "UPDATE  `customers_options` SET 
							".$qqq."
							WHERE `customer_id` = $customer_id;";

		if(mysqli_query($KONN, $qu_customers_options_updt)){
			$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array(   "result" => '1' );
		}
	}

} else {
	$IAM_ARRAY['success'] = false;
	$IAM_ARRAY['result'] = array(   "result" => 'ERR- NO valid request' );
}

	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();

?>
