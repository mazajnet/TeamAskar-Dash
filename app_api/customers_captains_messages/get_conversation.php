<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	if(!isset($_POST["customer_id"]) || !isset($_POST["captain_id"]) ){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	$customer_id = (int) test_inputs($_POST['customer_id']);
	$captain_id = (int) test_inputs($_POST['captain_id']);
	
	
	$qu_customers_captains_messages_sel = "SELECT * FROM  `customers_captains_messages` WHERE `customer_id` = '$customer_id' AND `captain_id` = '$captain_id' ORDER BY `sent_date` ASC";
	$qu_customers_captains_messages_EXE = mysqli_query($KONN, $qu_customers_captains_messages_sel);
	
	if( mysqli_num_rows($qu_customers_captains_messages_EXE) > 0 ){
		$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_captains_messages_EXE) ){

			$IAM_ARRAY['result'][] = array(  "message_id" => $ARRAY_SRC['message_id'], 
									"customer_id" => $ARRAY_SRC['customer_id'], 
									"captain_id" => $ARRAY_SRC['captain_id'], 
									"message_content" => $ARRAY_SRC['message_content'], 
									"sent_date" => $ARRAY_SRC['sent_date'], 
									"customer_seen_at" => $ARRAY_SRC['customer_seen_at'], 
									"captain_seen_at" => $ARRAY_SRC['captain_seen_at'] 
									);

		}
	
		echo json_encode($IAM_ARRAY);
		die();
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "ERR- NO DATA" );
	}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	
?>
