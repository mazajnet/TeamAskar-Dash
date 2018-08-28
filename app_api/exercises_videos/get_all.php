<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["customer_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$customer_id = (int) test_inputs( $_POST["customer_id"] );
	
	$qu_customers_subscriptions_sel = "SELECT * FROM  `exercises_videos`";
	$qu_customers_subscriptions_EXE = mysqli_query($KONN, $qu_customers_subscriptions_sel);
	
	if( mysqli_num_rows($qu_customers_subscriptions_EXE) > 0 ){
$IAM_ARRAY['success'] = true;
	
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_subscriptions_EXE) ){
		$IAM_ARRAY['result'][] = array(  "video_id" => $ARRAY_SRC['video_id'], 
								"video_name" => $ARRAY_SRC['video_name'], 
								"video_path" => $ARRAY_SRC['video_path'], 
								"video_thumbnail" => $ARRAY_SRC['video_thumbnail'], 
								"typo" => $ARRAY_SRC['typo'], 
								"added_date" => $ARRAY_SRC['added_date'], 
								"description" => $ARRAY_SRC['description'] 
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
