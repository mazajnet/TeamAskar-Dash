<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
if( isset($_POST['customer_id']) &&
	isset($_POST['captain_id']) &&
	isset($_POST['message_content'])
	){

	$message_id = 0;
	$customer_id = (int) test_inputs($_POST['customer_id']);
	$captain_id = (int) test_inputs($_POST['captain_id']);
	$message_content = test_inputs($_POST['message_content']);
	$sent_date = date( 'Y-m-d H:i:00' );;
	$customer_seen_at = test_inputs($_POST['customer_seen_at']);
	$captain_seen_at = 0;

	$qu_customers_captains_messages_ins = "INSERT INTO `customers_captains_messages` (
						`customer_id`, 
						`captain_id`, 
						`message_content`, 
						`sent_date`
					) VALUES (
						'".$customer_id."', 
						'".$captain_id."', 
						'".$message_content."', 
						'".$sent_date."'
					);";

	if(mysqli_query($KONN, $qu_customers_captains_messages_ins)){
		$message_id = mysqli_insert_id($KONN);
		if( $message_id != 0 ){
			$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "message_id" => $message_id, "result" => "1" );
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
