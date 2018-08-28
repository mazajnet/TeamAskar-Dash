<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['record_id']) ){

	$record_id = (int) test_inputs($_POST['record_id']);
	$qqq = "";

	$meal_id = "";
	if( isset($_POST['meal_id']) ){
		$meal_id = test_inputs( $_POST['meal_id'] );
		$qqq = $qqq."`meal_id` = '".$meal_id."', ";
	}
	$meal_name = "";
	if( isset($_POST['meal_name']) ){
		$meal_name = test_inputs( $_POST['meal_name'] );
		$qqq = $qqq."`meal_name` = '".$meal_name."', ";
	}
	$comments = "";
	if( isset($_POST['comments']) ){
		$comments = test_inputs( $_POST['comments'] );
		$qqq = $qqq."`comments` = '".$comments."', ";
	}
	$added_date = "";
	if( isset($_POST['added_date']) ){
		$added_date = test_inputs( $_POST['added_date'] );
		$qqq = $qqq."`added_date` = '".$added_date."', ";
	}
	$taken_date = "";
	if( isset($_POST['taken_date']) ){
		$taken_date = test_inputs( $_POST['taken_date'] );
		$qqq = $qqq."`taken_date` = '".$taken_date."', ";
	}
	$nutrition_plan_id = "";
	if( isset($_POST['nutrition_plan_id']) ){
		$nutrition_plan_id = test_inputs( $_POST['nutrition_plan_id'] );
		$qqq = $qqq."`nutrition_plan_id` = '".$nutrition_plan_id."', ";
	}
	$customer_id = "";
	if( isset($_POST['customer_id']) ){
		$customer_id = test_inputs( $_POST['customer_id'] );
		$qqq = $qqq."`customer_id` = '".$customer_id."', ";
	}

	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_nutrition_diets_meals_updt = "UPDATE  `customers_nutrition_diets_meals` SET ".$qqq."  WHERE `record_id` = $record_id;";

		if(mysqli_query($KONN, $qu_customers_nutrition_diets_meals_updt)){
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
