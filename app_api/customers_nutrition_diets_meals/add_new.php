<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['meal_id']) &&
	isset($_POST['meal_name']) && 
	isset($_POST['nutrition_plan_id']) &&
	isset($_POST['customer_id']) 
	){

	$record_id = 0;
	$meal_id = test_inputs($_POST['meal_id']);
	$meal_name = test_inputs($_POST['meal_name']);
	$comments = test_inputs($_POST['comments']);
	$added_date = date( 'Y-m-d H:i:00' );
	$nutrition_plan_id = test_inputs($_POST['nutrition_plan_id']);
	$customer_id = test_inputs($_POST['customer_id']);

	$qu_customers_nutrition_diets_meals_ins = "INSERT INTO `customers_nutrition_diets_meals` (
						`meal_id`, 
						`meal_name`, 
						`comments`, 
						`added_date`, 
						`nutrition_plan_id`, 
						`customer_id` 
					) VALUES (
						'".$meal_id."', 
						'".$meal_name."', 
						'".$comments."', 
						'".$added_date."', 
						'".$nutrition_plan_id."', 
						'".$customer_id."' 
					);";

	if(mysqli_query($KONN, $qu_customers_nutrition_diets_meals_ins)){
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
