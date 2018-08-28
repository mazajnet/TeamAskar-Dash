<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['nutrition_plan_id']) && 
	isset($_POST['exercise_plan_id']) &&
	isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) &&
	isset($_POST['subscription_id'])
	){

	$private_plan_id = 0;
	$exercise_plan_id = test_inputs($_POST['exercise_plan_id']);
	$nutrition_plan_id = test_inputs($_POST['nutrition_plan_id']);
	$target_weight = test_inputs($_POST['target_weight']);
	$captain_comments = "";
	$customer_id = test_inputs($_POST['customer_id']);
	$captain_id = test_inputs($_POST['captain_id']);
	$subscription_id = test_inputs($_POST['subscription_id']);
	$status = "active";

	$qu_customers_private_plans_ins = "INSERT INTO `customers_private_plans` (
						`nutrition_plan_id`, 
						`exercise_plan_id`, 
						`captain_comments`, 
						`customer_id`, 
						`captain_id`, 
						`subscription_id`, 
						`status` 
					) VALUES (
						'".$nutrition_plan_id."', 
						'".$exercise_plan_id."', 
						'".$captain_comments."', 
						'".$customer_id."', 
						'".$captain_id."', 
						'".$subscription_id."', 
						'".$status."' 
					);";

	if(mysqli_query($KONN, $qu_customers_private_plans_ins)){
		$private_plan_id = mysqli_insert_id($KONN);
		if( $private_plan_id != 0 ){
$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "private_plan_id" => $private_plan_id, "result" => "1" );
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
