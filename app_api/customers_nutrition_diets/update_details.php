<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['nutrition_plan_id']) ){

	$nutrition_plan_id = (int) test_inputs($_POST['nutrition_plan_id']);
	$qqq = "";

	$meals_per_day = "";
	if( isset($_POST['meals_per_day']) ){
		$meals_per_day = test_inputs( $_POST['meals_per_day'] );
		$qqq = $qqq."`meals_per_day` = '".$meals_per_day."', ";
	}
	$target_weight = "";
	if( isset($_POST['target_weight']) ){
		$target_weight = test_inputs( $_POST['target_weight'] );
		$qqq = $qqq."`target_weight` = '".$target_weight."', ";
	}
	$meals_from_us = "";
	if( isset($_POST['meals_from_us']) ){
		$meals_from_us = test_inputs( $_POST['meals_from_us'] );
		$qqq = $qqq."`meals_from_us` = '".$meals_from_us."', ";
	}
	$captain_comments = "";
	if( isset($_POST['captain_comments']) ){
		$captain_comments = test_inputs( $_POST['captain_comments'] );
		$qqq = $qqq."`captain_comments` = '".$captain_comments."', ";
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
	$subscription_id = "";
	if( isset($_POST['subscription_id']) ){
		$subscription_id = test_inputs( $_POST['subscription_id'] );
		$qqq = $qqq."`subscription_id` = '".$subscription_id."', ";
	}
	$status = "";
	if( isset($_POST['status']) ){
		$status = test_inputs( $_POST['status'] );
		$qqq = $qqq."`status` = '".$status."', ";
	}

	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_nutrition_diets_updt = "UPDATE  `customers_nutrition_diets` SET ".$qqq."  WHERE `nutrition_plan_id` = $nutrition_plan_id;";

		if(mysqli_query($KONN, $qu_customers_nutrition_diets_updt)){
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
