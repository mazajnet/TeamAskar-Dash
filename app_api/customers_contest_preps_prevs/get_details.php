<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["record_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$record_id = (int) test_inputs( $_POST["record_id"] );
	
	$qu_customers_contest_preps_prevs_sel = "SELECT * FROM  `customers_contest_preps_prevs` WHERE `record_id` = $record_id";
	$qu_customers_contest_preps_prevs_EXE = mysqli_query($KONN, $qu_customers_contest_preps_prevs_sel);

	if(mysqli_num_rows($qu_customers_contest_preps_prevs_EXE) == 1){
		$IAM_ARRAY['success'] = true;
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_contest_preps_prevs_EXE);
		$IAM_ARRAY['result'][] = array(  "record_id" => $ARRAY_SRC['record_id'], 
								"contest_name" => $ARRAY_SRC['contest_name'], 
								"contest_date" => $ARRAY_SRC['contest_date'], 
								"contest_category" => $ARRAY_SRC['contest_category'], 
								"prep_plan_id" => $ARRAY_SRC['prep_plan_id'], 
								"customer_id" => $ARRAY_SRC['customer_id'] 
								);
	echo json_encode($IAM_ARRAY);
	die();
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	
?>
