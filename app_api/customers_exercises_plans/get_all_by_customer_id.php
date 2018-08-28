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
	
	
	$qu_customers_exercises_plans_sel = "SELECT * FROM  `customers_exercises_plans` WHERE `customer_id` = $customer_id";
	$qu_customers_exercises_plans_EXE = mysqli_query($KONN, $qu_customers_exercises_plans_sel);
	
	if( mysqli_num_rows($qu_customers_exercises_plans_EXE) > 0 ){
	$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_exercises_plans_EXE) ){

			$IAM_ARRAY['result'] = array(  "exercise_plan_id" => $ARRAY_SRC['exercise_plan_id'], 
									"target_weight" => $ARRAY_SRC['target_weight'], 
									"captain_comments" => $ARRAY_SRC['captain_comments'], 
									"customer_id" => $ARRAY_SRC['customer_id'], 
									"captain_id" => $ARRAY_SRC['captain_id'], 
									"subscription_id" => $ARRAY_SRC['subscription_id'], 
									"status" => $ARRAY_SRC['status'] 
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
