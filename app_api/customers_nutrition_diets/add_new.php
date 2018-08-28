<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['meals_per_day']) &&
	isset($_POST['target_weight']) &&
	isset($_POST['meals_from_us']) && 
	isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) &&
	isset($_POST['likes_meals']) &&
	isset($_POST['not_likes_meals']) &&
	isset($_POST['subscription_id'])
	){

	$nutrition_plan_id = 0;
	$likes_list     = test_inputs($_POST['likes_meals']);
	$not_likes_list = test_inputs($_POST['not_likes_meals']);
	
	$meals_per_day = test_inputs($_POST['meals_per_day']);
	$target_weight = test_inputs($_POST['target_weight']);
	$meals_from_us = test_inputs($_POST['meals_from_us']);
	$captain_comments = "";
	$customer_id = test_inputs($_POST['customer_id']);
	$captain_id = test_inputs($_POST['captain_id']);
	$subscription_id = test_inputs($_POST['subscription_id']);
	$status = "active";

	$qu_customers_nutrition_diets_ins = "INSERT INTO `customers_nutrition_diets` (
						`meals_per_day`, 
						`target_weight`, 
						`meals_from_us`, 
						`captain_comments`, 
						`likes_list`, 
						`not_likes_list`, 
						`customer_id`, 
						`captain_id`, 
						`subscription_id`, 
						`status` 
					) VALUES (
						'".$meals_per_day."', 
						'".$target_weight."', 
						'".$meals_from_us."', 
						'".$captain_comments."', 
						'".$likes_list."', 
						'".$not_likes_list."', 
						'".$customer_id."', 
						'".$captain_id."', 
						'".$subscription_id."', 
						'".$status."' 
					);";

	if(mysqli_query($KONN, $qu_customers_nutrition_diets_ins)){
		$nutrition_plan_id = mysqli_insert_id($KONN);
		if( $nutrition_plan_id != 0 ){

				$IAM_ARRAY['success'] = true;
				$IAM_ARRAY['result'] = array( "nutrition_plan_id" => $nutrition_plan_id, "result" => "1" );
				echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
				die();

			
			
		}
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- ".mysqli_error( $KONN ) );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

} else {
	$IAM_ARRAY['success'] = false;
	$IAM_ARRAY['result'] = array( "result" => "ERR- NO valid request" );
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
}
	
	

?>
