<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["nutrition_plan_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$nutrition_plan_id = (int) test_inputs( $_POST["nutrition_plan_id"] );
	
	$qu_customers_nutrition_diets_sel = "SELECT * FROM  `customers_nutrition_diets` WHERE `nutrition_plan_id` = $nutrition_plan_id";
	$qu_customers_nutrition_diets_EXE = mysqli_query($KONN, $qu_customers_nutrition_diets_sel);

	if(mysqli_num_rows($qu_customers_nutrition_diets_EXE) == 1){
	$IAM_ARRAY['success'] = true;
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_nutrition_diets_EXE);
		$IAM_ARRAY['result'] = array(  "nutrition_plan_id" => $ARRAY_SRC['nutrition_plan_id'], 
								"meals_per_day" => $ARRAY_SRC['meals_per_day'], 
								"target_weight" => $ARRAY_SRC['target_weight'], 
								"meals_from_us" => $ARRAY_SRC['meals_from_us'], 
								"captain_comments" => $ARRAY_SRC['captain_comments'], 
								"likes_list" => $ARRAY_SRC['likes_list'], 
								"not_likes_list" => $ARRAY_SRC['not_likes_list'], 
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
