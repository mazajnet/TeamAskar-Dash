<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["captain_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$captain_id = (int) test_inputs( $_POST["captain_id"] );
	
	$qu_captains_sel = "SELECT * FROM  `captains` WHERE `captain_id` = $captain_id AND `status` = 'active'";
	$qu_captains_EXE = mysqli_query($KONN, $qu_captains_sel);

	if(mysqli_num_rows($qu_captains_EXE) == 1){
		
		$ARRAY_SRC = mysqli_fetch_assoc($qu_captains_EXE);
		$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "captain_id" => $ARRAY_SRC['captain_id'], 
								"captain_name" => $ARRAY_SRC['captain_name'], 
								"captain_email" => $ARRAY_SRC['captain_email'], 
								"captain_phone" => $ARRAY_SRC['captain_phone'], 
								"country_id" => $ARRAY_SRC['country_id'], 
								"captain_city" => $ARRAY_SRC['captain_city'], 
								"captain_zip_code" => $ARRAY_SRC['captain_zip_code'], 
								"captain_short_about" => $ARRAY_SRC['captain_short_about'], 
								"captain_about" => $ARRAY_SRC['captain_about'], 
								"captain_picture" => $ARRAY_SRC['captain_picture'], 
								"status" => $ARRAY_SRC['status'], 
								"added_date" => $ARRAY_SRC['added_date'] 
								);
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	
?>
