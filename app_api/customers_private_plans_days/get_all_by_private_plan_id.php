<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["private_plan_id"])){
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$private_plan_id = (int) test_inputs( $_POST["private_plan_id"] );
	
	$qu_customers_private_plans_days_sel = "SELECT * FROM  `customers_private_plans_days` WHERE `private_plan_id` = $private_plan_id";
	$qu_customers_private_plans_days_EXE = mysqli_query($KONN, $qu_customers_private_plans_days_sel);
	
	if( mysqli_num_rows($qu_customers_private_plans_days_EXE) > 0 ){
$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_private_plans_days_EXE) ){

			$IAM_ARRAY['result'][] = array(  "day_id" => $ARRAY_SRC['day_id'], 
									"body_weight" => $ARRAY_SRC['body_weight'], 
									"body_fat" => $ARRAY_SRC['body_fat'], 
									"day_workout" => $ARRAY_SRC['day_workout'], 
									"before_picture" => $ARRAY_SRC['before_picture'], 
									"after_picture" => $ARRAY_SRC['after_picture'], 
									"private_plan_id" => $ARRAY_SRC['private_plan_id'], 
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
