<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	$qu_captains_sel = "SELECT * FROM  `captains` WHERE `status` = 'active' ";
	$qu_captains_EXE = mysqli_query($KONN, $qu_captains_sel);
	
	if( mysqli_num_rows($qu_captains_EXE) > 0 ){
		$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_captains_EXE) ){
			
			$IAM_ARRAY['result'][] = array(  "captain_id" => $ARRAY_SRC['captain_id'], 
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

		}
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "ERR- NO DATA" );
	}
	
	echo json_encode($IAM_ARRAY);
	die();
	
?>
