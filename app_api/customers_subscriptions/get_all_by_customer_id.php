<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["customer_id"])){
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$customer_id = (int) test_inputs( $_POST["customer_id"] );
	
	$qu_customers_subscriptions_sel = "SELECT * FROM  `customers_subscriptions` WHERE `customer_id` = $customer_id ";
	$qu_customers_subscriptions_EXE = mysqli_query($KONN, $qu_customers_subscriptions_sel);
	
	if( mysqli_num_rows($qu_customers_subscriptions_EXE) > 0 ){
$IAM_ARRAY['success'] = true;
	
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_subscriptions_EXE) ){

			$IAM_ARRAY['result'][] = array(  "subscription_id" => $ARRAY_SRC['subscription_id'], 
									"start_date" => $ARRAY_SRC['start_date'], 
									"end_date" => $ARRAY_SRC['end_date'], 
									"subscription_price" => $ARRAY_SRC['subscription_price'], 
									"plan_type" => $ARRAY_SRC['plan_type'], 
									"added_date" => $ARRAY_SRC['added_date'], 
									"added_by" => $ARRAY_SRC['added_by'], 
									"added_by_id" => $ARRAY_SRC['added_by_id'], 
									"status" => $ARRAY_SRC['status'], 
									"comments" => $ARRAY_SRC['comments'], 
									"customer_id" => $ARRAY_SRC['customer_id'], 
									"captain_id" => $ARRAY_SRC['captain_id'] 
									);

		}
	echo json_encode($IAM_ARRAY);
	die();
	
	} else {
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "ERR- NO DATA" );
	}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	
	
?>
