<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['picture_name']) && 
	isset($_POST['day_id']) &&
	isset($_POST['private_plan_id']) &&
	isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) 
	){

	$picture_id = 0;
	$picture_name = test_inputs($_POST['picture_name']);
	
	$picture_path = "no-pic.jpg";
	if(isset($_FILES["picture_path"]) && $_FILES["picture_path"]["tmp_name"]){
		$upload_res = upload_picture("picture_path", 8000, "uploads", "../../");
		if($upload_res == true){
			$picture_path = $upload_res;
		}
	}
	
	$uploaded_date =  date( 'Y-m-d H:i:00' );
	$day_id = test_inputs($_POST['day_id']);
	$private_plan_id = test_inputs($_POST['private_plan_id']);
	$customer_id = test_inputs($_POST['customer_id']);
	$captain_id = test_inputs($_POST['captain_id']);

	$qu_customers_private_plans_days_pics_ins = "INSERT INTO `customers_private_plans_days_pics` (
						`picture_name`, 
						`picture_path`, 
						`uploaded_date`, 
						`day_id`, 
						`private_plan_id`, 
						`customer_id`, 
						`captain_id` 
					) VALUES (
						'".$picture_name."', 
						'".$picture_path."', 
						'".$uploaded_date."', 
						'".$day_id."', 
						'".$private_plan_id."', 
						'".$customer_id."', 
						'".$captain_id."' 
					);";

	if(mysqli_query($KONN, $qu_customers_private_plans_days_pics_ins)){
		$picture_id = mysqli_insert_id($KONN);
		if( $picture_id != 0 ){
$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "picture_id" => $picture_id, "result" => "1" );
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
