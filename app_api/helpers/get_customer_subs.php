<?php

	global $sess_id;
	$sess_id = "bsmellah-2qyt9-SBE-Belting-erp-673t873t-wt78wgt38-askar";
	require_once('../../bootstrap/app_config.php');




	if(!isset($_POST["customer_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY);
		die();
	}
	
	

	if(!isset($_POST["type"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY);
		die();
	}
	
	
	$type = test_inputs( $_POST["type"] );
	$customer_id = (int) test_inputs( $_POST["customer_id"] );
	
	
	
	//TODO : ADD SUB TYPE COND
	
	
	
	
	
	
	
	
	
	
	
	$qu_customers_contest_preps_sel = "SELECT * FROM  `customers_subscriptions`  WHERE `customer_id` = '$customer_id' AND `status` = 'active' ";
	$qu_customers_contest_preps_EXE = mysqli_query($KONN, $qu_customers_contest_preps_sel);
	
	if( mysqli_num_rows($qu_customers_contest_preps_EXE) > 0 ){
	$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_contest_preps_EXE) ){

			$IAM_ARRAY['result'][] = array(  "subscription_id" => $ARRAY_SRC['subscription_id'], 
												"subscription_ref" => $ARRAY_SRC['subscription_ref'], 
												"end_date" => $ARRAY_SRC['end_date'], 
												"plan_type" => $ARRAY_SRC['plan_type']
												);

		}
		echo json_encode($IAM_ARRAY);
		die();
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "No Active Subscriptions Found" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	

	
?>
