<?php

	global $sess_id;
	$sess_id = "bsmellah-2qyt9-SBE-Belting-erp-673t873t-wt78wgt38-askar";
	require_once('../../bootstrap/app_config.php');




	if(!isset($_POST["day_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	
	$day_id = (int) test_inputs( $_POST["day_id"] );
	
	
	$qu_days_sel = "SELECT * FROM  `customers_private_plans_days` WHERE `day_id` = $day_id";
	$qu_days_EXE = mysqli_query($KONN, $qu_days_sel);
	$days_DATA;
	if(mysqli_num_rows($qu_days_EXE) > 0 ){
	$IAM_ARRAY['success'] = true;
		$ARRAY_SRC = mysqli_fetch_assoc($qu_days_EXE);

		$IAM_ARRAY['result'] = array( "body_weight" => $ARRAY_SRC['body_weight'], 
										"body_fat" => $ARRAY_SRC['body_fat'], 
										"day_workout" => $ARRAY_SRC['day_workout'], 
										"before_picture" => $ARRAY_SRC['before_picture'], 
										"after_picture" => $ARRAY_SRC['after_picture'], 
										"arms_pic" => $ARRAY_SRC['arms_pic'], 
										"chest_pic" => $ARRAY_SRC['chest_pic'], 
										"waste_pic" => $ARRAY_SRC['waste_pic'], 
										"thighs_pic" => $ARRAY_SRC['thighs_pic'], 
										"glutes_pic" => $ARRAY_SRC['glutes_pic'], 
										"calves_pic" => $ARRAY_SRC['calves_pic'], 
										"private_plan_id" => $ARRAY_SRC['private_plan_id'], 
										"customer_id" => $ARRAY_SRC['customer_id'], 
										"captain_id" => $ARRAY_SRC['captain_id'], 
										"captain_comments" => $ARRAY_SRC['captain_comments'] 
										);
		
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "No Meals Found" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	

	
?>
