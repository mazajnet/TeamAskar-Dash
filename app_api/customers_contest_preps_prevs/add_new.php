<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['contest_name']) &&
	isset($_POST['contest_date']) &&
	isset($_POST['contest_category']) &&
	isset($_POST['prep_plan_id']) &&
	isset($_POST['customer_id']) 
	){

	$record_id = 0;
	$contest_name = test_inputs($_POST['contest_name']);
	$contest_date = test_inputs($_POST['contest_date']);
	$contest_category = test_inputs($_POST['contest_category']);
	$prep_plan_id = test_inputs($_POST['prep_plan_id']);
	$customer_id = test_inputs($_POST['customer_id']);

	$qu_customers_contest_preps_prevs_ins = "INSERT INTO `customers_contest_preps_prevs` (
						`contest_name`, 
						`contest_date`, 
						`contest_category`, 
						`prep_plan_id`, 
						`customer_id` 
					) VALUES (
						'".$contest_name."', 
						'".$contest_date."', 
						'".$contest_category."', 
						'".$prep_plan_id."', 
						'".$customer_id."' 
					);";

	if(mysqli_query($KONN, $qu_customers_contest_preps_prevs_ins)){
		$record_id = mysqli_insert_id($KONN);
		if( $record_id != 0 ){
			$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "record_id" => $record_id, "result" => "1" );
		}
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
