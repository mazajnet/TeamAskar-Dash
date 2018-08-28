<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['day_id']) ){

	$day_id = (int) test_inputs($_POST['day_id']);
	$qqq = "";

	$body_weight = "";
	if( isset($_POST['body_weight']) ){
		$body_weight = test_inputs( $_POST['body_weight'] );
		$qqq = $qqq."`body_weight` = '".$body_weight."', ";
	}
	$body_fat = "";
	if( isset($_POST['body_fat']) ){
		$body_fat = test_inputs( $_POST['body_fat'] );
		$qqq = $qqq."`body_fat` = '".$body_fat."', ";
	}
	$day_workout = "";
	if( isset($_POST['day_workout']) ){
		$day_workout = test_inputs( $_POST['day_workout'] );
		$qqq = $qqq."`day_workout` = '".$day_workout."', ";
	}
	
	

	$before_picture = "";
	if(isset($_FILES["before_picture"]) && $_FILES["before_picture"]["tmp_name"]){
		$upload_res = upload_picture("before_picture", 8000, "uploads", "../../");
		if($upload_res == true){
			$before_picture = $upload_res;
			$qqq = $qqq."`before_picture` = '".$before_picture."', ";
		}
	}
	
	
	$after_picture = "";
	if(isset($_FILES["after_picture"]) && $_FILES["after_picture"]["tmp_name"]){
		$upload_res = upload_picture("after_picture", 8000, "uploads", "../../");
		if($upload_res == true){
			$after_picture = $upload_res;
			$qqq = $qqq."`after_picture` = '".$after_picture."', ";
		}
	}
	
	
	
	$private_plan_id = "";
	if( isset($_POST['private_plan_id']) ){
		$private_plan_id = test_inputs( $_POST['private_plan_id'] );
		$qqq = $qqq."`private_plan_id` = '".$private_plan_id."', ";
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

	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_private_plans_days_updt = "UPDATE  `customers_private_plans_days` SET ".$qqq."  WHERE `day_id` = $day_id;";

		if(mysqli_query($KONN, $qu_customers_private_plans_days_updt)){
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
