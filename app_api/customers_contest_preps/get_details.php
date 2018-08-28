<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["prep_plan_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$prep_plan_id = (int) test_inputs( $_POST["prep_plan_id"] );
	
	$qu_customers_contest_preps_sel = "SELECT * FROM  `customers_contest_preps` WHERE `prep_plan_id` = $prep_plan_id";
	$qu_customers_contest_preps_EXE = mysqli_query($KONN, $qu_customers_contest_preps_sel);

	if(mysqli_num_rows($qu_customers_contest_preps_EXE) == 1){
		
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_contest_preps_EXE);
		$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "prep_plan_id" => $ARRAY_SRC['prep_plan_id'], 
								"nutrition_plan_id" => $ARRAY_SRC['nutrition_plan_id'], 
								"exercise_plan_id" => $ARRAY_SRC['exercise_plan_id'], 
								"private_plan_id" => $ARRAY_SRC['private_plan_id'], 
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
