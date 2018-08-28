<?php

	global $sess_id;
	$sess_id = "bsmellah-2qyt9-SBE-Belting-erp-673t873t-wt78wgt38-askar";
	require_once('../../bootstrap/app_config.php');




	if(!isset($_POST["exercise_plan_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	
	$exercise_plan_id = (int) test_inputs( $_POST["exercise_plan_id"] );
	
	
	$qu_customers_exercises_plans_sel = "SELECT * FROM  `customers_exercises_plans` WHERE `exercise_plan_id` = $exercise_plan_id";
	$qu_customers_exercises_plans_EXE = mysqli_query($KONN, $qu_customers_exercises_plans_sel);
	$customers_exercises_plans_DATA;
	if(mysqli_num_rows($qu_customers_exercises_plans_EXE) == 1){
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_exercises_plans_EXE);
		$customer_id = $ARRAY_SRC['customer_id'];

		
		$qu_customers_sel = "SELECT `customer_name` FROM  `customers` WHERE `customer_id` = $customer_id";
		$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel);
		$customers_DATA;
		if(mysqli_num_rows($qu_customers_EXE)){
			$customers_DATA = mysqli_fetch_assoc($qu_customers_EXE);
		}

		
		
		
		$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "exercise_plan_id" => $ARRAY_SRC['exercise_plan_id'], 
										"customer_name" => $customers_DATA['customer_name'], 
										"target_weight" => $ARRAY_SRC['target_weight'], 
										"captain_comments" => $ARRAY_SRC['captain_comments'], 
										"customer_id" => $ARRAY_SRC['customer_id'], 
										"captain_id" => $ARRAY_SRC['captain_id'], 
										"subscription_id" => $ARRAY_SRC['subscription_id'], 
										"status" => $ARRAY_SRC['status'] 
										);

										
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
?>
