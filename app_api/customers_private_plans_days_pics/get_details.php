<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["picture_id"])){
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$picture_id = (int) test_inputs( $_POST["picture_id"] );
	
	$qu_customers_private_plans_days_pics_sel = "SELECT * FROM  `customers_private_plans_days_pics` WHERE `picture_id` = $picture_id";
	$qu_customers_private_plans_days_pics_EXE = mysqli_query($KONN, $qu_customers_private_plans_days_pics_sel);

	if(mysqli_num_rows($qu_customers_private_plans_days_pics_EXE) == 1){
	
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_private_plans_days_pics_EXE);
$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "picture_id" => $ARRAY_SRC['picture_id'], 
								"picture_name" => $ARRAY_SRC['picture_name'], 
								"picture_path" => $ARRAY_SRC['picture_path'], 
								"uploaded_date" => $ARRAY_SRC['uploaded_date'], 
								"day_id" => $ARRAY_SRC['day_id'], 
								"private_plan_id" => $ARRAY_SRC['private_plan_id'], 
								"customer_id" => $ARRAY_SRC['customer_id'], 
								"captain_id" => $ARRAY_SRC['captain_id'] 
								);
	
	} else {
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
?>
