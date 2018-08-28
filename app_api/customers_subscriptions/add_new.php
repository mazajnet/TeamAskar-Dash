<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['start_date']) &&
	isset($_POST['end_date']) &&
	isset($_POST['subscription_price']) &&
	isset($_POST['plan_type']) && 
	isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) 
	){

	$subscription_id = 0;
	$start_date = test_inputs($_POST['start_date']);
	$end_date = test_inputs($_POST['end_date']);
	$subscription_price = test_inputs($_POST['subscription_price']);
	$plan_type = test_inputs($_POST['plan_type']);
	if( $plan_type == ''){
		$plan_type = 'default';
	}
	$added_date = date( 'Y-m-d H:i:00' );
	$added_by = 'customer';
	$added_by_id = test_inputs($_POST['customer_id']);
	$comments = "";
	$customer_id = test_inputs($_POST['customer_id']);
	$captain_id = test_inputs($_POST['captain_id']);

	$qu_customers_subscriptions_ins = "INSERT INTO `customers_subscriptions` (
						`start_date`, 
						`end_date`, 
						`subscription_price`, 
						`plan_type`, 
						`added_date`, 
						`added_by`, 
						`added_by_id`, 
						`comments`, 
						`customer_id`, 
						`captain_id` 
					) VALUES (
						'".$start_date."', 
						'".$end_date."', 
						'".$subscription_price."', 
						'".$plan_type."', 
						'".$added_date."', 
						'".$added_by."', 
						'".$added_by_id."', 
						'".$comments."', 
						'".$customer_id."', 
						'".$captain_id."' 
					);";

	if(mysqli_query($KONN, $qu_customers_subscriptions_ins)){
		$subscription_id = mysqli_insert_id($KONN);
		if( $subscription_id != 0 ){
$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "subscription_id" => $subscription_id, "result" => "1" );
		}
	} else {
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- ".mysqli_error( $KONN ) );
	}

} else {
$IAM_ARRAY['success'] = false;
	$IAM_ARRAY['result'] = array( "result" => "ERR- NO valid request" );
}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	

?>
