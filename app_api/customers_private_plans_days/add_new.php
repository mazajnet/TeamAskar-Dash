<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['body_weight']) &&
	isset($_POST['body_fat']) &&
	isset($_POST['day_workout']) &&
	isset($_POST['private_plan_id']) &&
	isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) 
	){

	$day_id = 0;
	$body_weight = test_inputs($_POST['body_weight']);
	$body_fat = test_inputs($_POST['body_fat']);
	$day_workout = test_inputs($_POST['day_workout']);
	
	$before_picture = "no-pic.jpg";
	if(isset($_FILES["before_picture"]) && $_FILES["before_picture"]["tmp_name"]){
		$upload_res = upload_picture("before_picture", 8000, "uploads", "../../");
		if($upload_res == true){
			$before_picture = $upload_res;
		}
	}
	
	
	$after_picture = "no-pic.jpg";
	if(isset($_FILES["after_picture"]) && $_FILES["after_picture"]["tmp_name"]){
		$upload_res = upload_picture("after_picture", 8000, "uploads", "../../");
		if($upload_res == true){
			$after_picture = $upload_res;
		}
	}
	
	$arms_pic = "no-pic.jpg";
	if(isset($_FILES["arms_pic"]) && $_FILES["arms_pic"]["tmp_name"]){
		$upload_res = upload_picture("arms_pic", 8000, "uploads", "../../");
		if($upload_res == true){
			$arms_pic = $upload_res;
		}
	}
	
	$chest_pic = "no-pic.jpg";
	if(isset($_FILES["chest_pic"]) && $_FILES["chest_pic"]["tmp_name"]){
		$upload_res = upload_picture("chest_pic", 8000, "uploads", "../../");
		if($upload_res == true){
			$chest_pic = $upload_res;
		}
	}
	
	$waste_pic = "no-pic.jpg";
	if(isset($_FILES["waste_pic"]) && $_FILES["waste_pic"]["tmp_name"]){
		$upload_res = upload_picture("waste_pic", 8000, "uploads", "../../");
		if($upload_res == true){
			$waste_pic = $upload_res;
		}
	}
	
	$thighs_pic = "no-pic.jpg";
	if(isset($_FILES["thighs_pic"]) && $_FILES["thighs_pic"]["tmp_name"]){
		$upload_res = upload_picture("thighs_pic", 8000, "uploads", "../../");
		if($upload_res == true){
			$thighs_pic = $upload_res;
		}
	}
	
	$glutes_pic = "no-pic.jpg";
	if(isset($_FILES["glutes_pic"]) && $_FILES["glutes_pic"]["tmp_name"]){
		$upload_res = upload_picture("glutes_pic", 8000, "uploads", "../../");
		if($upload_res == true){
			$glutes_pic = $upload_res;
		}
	}
	$calves_pic = "no-pic.jpg";
	if(isset($_FILES["calves_pic"]) && $_FILES["calves_pic"]["tmp_name"]){
		$upload_res = upload_picture("calves_pic", 8000, "uploads", "../../");
		if($upload_res == true){
			$calves_pic = $upload_res;
		}
	}
	
	$private_plan_id = test_inputs($_POST['private_plan_id']);
	$customer_id = test_inputs($_POST['customer_id']);
	$captain_id = test_inputs($_POST['captain_id']);

	$qu_customers_private_plans_days_ins = "INSERT INTO `customers_private_plans_days` (
						`body_weight`, 
						`body_fat`, 
						`day_workout`, 
						`before_picture`, 
						`after_picture`, 
						`arms_pic`, 
						`chest_pic`, 
						`waste_pic`, 
						`thighs_pic`, 
						`glutes_pic`, 
						`calves_pic`, 
						`private_plan_id`, 
						`customer_id`, 
						`captain_id` 
					) VALUES (
						'".$body_weight."', 
						'".$body_fat."', 
						'".$day_workout."', 
						'".$before_picture."', 
						'".$after_picture."', 
						'".$arms_pic."', 
						'".$chest_pic."', 
						'".$waste_pic."', 
						'".$thighs_pic."', 
						'".$glutes_pic."', 
						'".$calves_pic."', 
						'".$private_plan_id."', 
						'".$customer_id."', 
						'".$captain_id."' 
					);";

	if(mysqli_query($KONN, $qu_customers_private_plans_days_ins)){
		$day_id = mysqli_insert_id($KONN);
		if( $day_id != 0 ){
$IAM_ARRAY['success'] = true;
			$IAM_ARRAY['result'] = array( "day_id" => $day_id, "result" => "1" );
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
