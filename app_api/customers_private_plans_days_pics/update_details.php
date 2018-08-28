<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['picture_id']) ){

	$picture_id = (int) test_inputs($_POST['picture_id']);
	$qqq = "";

	$picture_name = "";
	if( isset($_POST['picture_name']) ){
		$picture_name = test_inputs( $_POST['picture_name'] );
		$qqq = $qqq."`picture_name` = '".$picture_name."', ";
	}
	
	$picture_path = "";
	if(isset($_FILES["picture_path"]) && $_FILES["picture_path"]["tmp_name"]){
		$upload_res = upload_picture("picture_path", 8000, "uploads", "../../");
		if($upload_res == true){
			$picture_path = $upload_res;
			$qqq = $qqq."`picture_path` = '".$picture_path."', ";
		}
	}
	
	$day_id = "";
	if( isset($_POST['day_id']) ){
		$day_id = test_inputs( $_POST['day_id'] );
		$qqq = $qqq."`day_id` = '".$day_id."', ";
	}
	$private_plan_id = "";
	if( isset($_POST['private_plan_id']) ){
		$private_plan_id = test_inputs( $_POST['private_plan_id'] );
		$qqq = $qqq."`private_plan_id` = '".$private_plan_id."', ";
	}
	
	
	$captain_id = "";
	if( isset($_POST['captain_id']) ){
		$captain_id = test_inputs( $_POST['captain_id'] );
		$qqq = $qqq."`captain_id` = '".$captain_id."', ";
	}

	if( $qqq != "" ){
		$qqq =  substr($qqq, 0, -2);
		$qu_customers_private_plans_days_pics_updt = "UPDATE  `customers_private_plans_days_pics` SET ".$qqq."  WHERE `picture_id` = $picture_id;";

		if(mysqli_query($KONN, $qu_customers_private_plans_days_pics_updt)){
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
