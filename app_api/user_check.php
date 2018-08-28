<?php

	
$KONN;
$Running_Environment = "server";
$timeZone = "Asia/Kuwait";
$connect_db = true;

	require_once('app_functions.php');
	require_once('app_db.php');
	
	
	if( !isset($_POST['user']) || !isset($_POST['pass']) ){
$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array(   "error" => 'NO User and Pass Request'
									);
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	
	$user = test_inputs( $_POST['user'] );
	$pass = test_inputs( $_POST['pass'] );
	
	if( $user != 'api_mazajnet' || $pass != 'api_123' ){
            $IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "error" => 'User Or Pass Wrong' );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
									
	}
	
	
?>
