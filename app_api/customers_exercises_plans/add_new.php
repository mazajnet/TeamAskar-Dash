<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['target_weight']) && 
	isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) &&
	isset($_POST['subscription_id']) 
	){

	$exercise_plan_id = 0;
	$target_weight = test_inputs($_POST['target_weight']);
	$captain_comments = "";
	$customer_id = test_inputs($_POST['customer_id']);
	$captain_id = test_inputs($_POST['captain_id']);
	$subscription_id = test_inputs($_POST['subscription_id']);
	$status = "active";

	$qu_customers_exercises_plans_ins = "INSERT INTO `customers_exercises_plans` (
						`target_weight`, 
						`captain_comments`, 
						`customer_id`, 
						`captain_id`, 
						`subscription_id`, 
						`status` 
					) VALUES (
						'".$target_weight."', 
						'".$captain_comments."', 
						'".$customer_id."', 
						'".$captain_id."', 
						'".$subscription_id."', 
						'".$status."' 
					);";

	if(mysqli_query($KONN, $qu_customers_exercises_plans_ins)){
		$exercise_plan_id = mysqli_insert_id($KONN);
		if( $exercise_plan_id != 0 ){
			$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "exercise_plan_id" => $exercise_plan_id, "result" => "1" );
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
