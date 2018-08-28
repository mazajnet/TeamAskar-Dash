<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['subscription_id']) ){

	$subscription_id = (int) test_inputs($_POST['subscription_id']);
	$qqq = "";

	$start_date = "";
	if( isset($_POST['start_date']) ){
		$start_date = test_inputs( $_POST['start_date'] );
		$qqq = $qqq."`start_date` = '".$start_date."', ";
	}
	$end_date = "";
	if( isset($_POST['end_date']) ){
		$end_date = test_inputs( $_POST['end_date'] );
		$qqq = $qqq."`end_date` = '".$end_date."', ";
	}
	$subscription_price = "";
	if( isset($_POST['subscription_price']) ){
		$subscription_price = test_inputs( $_POST['subscription_price'] );
		$qqq = $qqq."`subscription_price` = '".$subscription_price."', ";
	}
	$plan_type = "";
	if( isset($_POST['plan_type']) ){
		$plan_type = test_inputs( $_POST['plan_type'] );
		$qqq = $qqq."`plan_type` = '".$plan_type."', ";
	}
	$added_date = "";
	if( isset($_POST['added_date']) ){
		$added_date = test_inputs( $_POST['added_date'] );
		$qqq = $qqq."`added_date` = '".$added_date."', ";
	}
	$added_by = "";
	if( isset($_POST['added_by']) ){
		$added_by = test_inputs( $_POST['added_by'] );
		$qqq = $qqq."`added_by` = '".$added_by."', ";
	}
	$added_by_id = "";
	if( isset($_POST['added_by_id']) ){
		$added_by_id = test_inputs( $_POST['added_by_id'] );
		$qqq = $qqq."`added_by_id` = '".$added_by_id."', ";
	}
	$status = "";
	if( isset($_POST['status']) ){
		$status = test_inputs( $_POST['status'] );
		$qqq = $qqq."`status` = '".$status."', ";
	}
	$comments = "";
	if( isset($_POST['comments']) ){
		$comments = test_inputs( $_POST['comments'] );
		$qqq = $qqq."`comments` = '".$comments."', ";
	}
	$customer_id = "";
	if( isset($_POST['customer_id']) ){
		$customer_id = test_inputs( $_POST['customer_id'] );
		$qqq = $qqq."`customer_id` = '".$customer_id."', ";
	}
	$captain_id = "";
	if( isset($_POST['captain_id']) ){
		$captain_id = test_inputs( $_POST['captain_id'] );
		$qqq = $qqq."`captain_id` = '".$captain_id."', ";
	}

	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_subscriptions_updt = "UPDATE  `customers_subscriptions` SET ".$qqq."  WHERE `subscription_id` = $subscription_id;";

		if(mysqli_query($KONN, $qu_customers_subscriptions_updt)){
$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "result" => "1" );
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
