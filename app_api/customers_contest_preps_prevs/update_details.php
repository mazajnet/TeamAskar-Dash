<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['record_id']) ){

	$record_id = (int) test_inputs($_POST['record_id']);
	$qqq = "";

	$contest_name = "";
	if( isset($_POST['contest_name']) ){
		$contest_name = test_inputs( $_POST['contest_name'] );
		$qqq = $qqq."`contest_name` = '".$contest_name."', ";
	}
	$contest_date = "";
	if( isset($_POST['contest_date']) ){
		$contest_date = test_inputs( $_POST['contest_date'] );
		$qqq = $qqq."`contest_date` = '".$contest_date."', ";
	}
	$contest_category = "";
	if( isset($_POST['contest_category']) ){
		$contest_category = test_inputs( $_POST['contest_category'] );
		$qqq = $qqq."`contest_category` = '".$contest_category."', ";
	}
	$prep_plan_id = "";
	if( isset($_POST['prep_plan_id']) ){
		$prep_plan_id = test_inputs( $_POST['prep_plan_id'] );
		$qqq = $qqq."`prep_plan_id` = '".$prep_plan_id."', ";
	}
	$customer_id = "";
	if( isset($_POST['customer_id']) ){
		$customer_id = test_inputs( $_POST['customer_id'] );
		$qqq = $qqq."`customer_id` = '".$customer_id."', ";
	}

	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_contest_preps_prevs_updt = "		UPDATE  `customers_contest_preps_prevs` SET ".$qqq."  WHERE `record_id` = $record_id;";

		if(mysqli_query($KONN, $qu_customers_contest_preps_prevs_updt)){
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
