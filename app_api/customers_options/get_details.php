<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
	
	if(!isset($_POST['customer_id'])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(   "result" => 'ERR- NO valid request' );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	
	$customer_id = (int) test_inputs( $_POST['customer_id'] );
	
	$IAM_ARRAY;
	$ARRAY_SRC;
	
	$qu_customers_sel = "SELECT * FROM  `customers_options` WHERE `customer_id` = $customer_id";
	$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel) or die('Wrong ID - 132');
	if(mysqli_num_rows($qu_customers_EXE) == 1 ){
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_EXE);
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(   "result" => 'ERR- NO Customer Found' );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	
$IAM_ARRAY['success'] = true;
$IAM_ARRAY['result'] = array(  "record_id" => $ARRAY_SRC['record_id'], 
						"units" => $ARRAY_SRC['units'], 
						"height" => $ARRAY_SRC['height'], 
						"dob" => $ARRAY_SRC['dob'], 
						"gender" => $ARRAY_SRC['gender'], 
						"current_body_weight" => $ARRAY_SRC['current_body_weight'], 
						"current_body_fat" => $ARRAY_SRC['current_body_fat'], 
						"target_body_weight" => $ARRAY_SRC['target_body_weight'], 
						"target_body_fat" => $ARRAY_SRC['target_body_fat'], 
						"is_reminder" => $ARRAY_SRC['is_reminder'], 
						"is_hormones" => $ARRAY_SRC['is_hormones'], 
						"customer_id" => $ARRAY_SRC['customer_id'] 
						);


	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	
	
	
?>
