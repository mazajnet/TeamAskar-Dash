<?php

	global $sess_id;
	$sess_id = "bsmellah-2qyt9-SBE-Belting-erp-673t873t-wt78wgt38-askar";
	require_once('../../bootstrap/app_config.php');




	
if( isset($_POST['day_id']) &&
	isset($_POST['captain_comments']) ){

	$record_id = 0;
	$day_id = test_inputs($_POST['day_id']);
	$captain_comments = test_inputs($_POST['captain_comments']);
	
	$qu_customers_private_plans_days_updt = "UPDATE  `customers_private_plans_days` SET 
											`captain_comments` = '".$captain_comments."' WHERE `day_id` = $day_id;";

	if(mysqli_query($KONN, $qu_customers_private_plans_days_updt)){
		
			$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "record_id" => $record_id, "result" => "1" );
		
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- ".mysqli_error( $KONN ) );
	}

} else {
	$IAM_ARRAY['success'] = false;
	$IAM_ARRAY['result'] = array( "result" => "ERR- NO valid request" );
}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	

?>
