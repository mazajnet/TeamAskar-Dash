<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
	
if( isset($_POST['units']) &&
	isset($_POST['height']) &&
	isset($_POST['dob']) &&
	isset($_POST['gender']) &&
	isset($_POST['current_body_weight']) &&
	isset($_POST['current_body_fat']) &&
	isset($_POST['target_body_weight']) &&
	isset($_POST['target_body_fat']) &&
	isset($_POST['is_reminder']) &&
	isset($_POST['is_hormones']) &&
	isset($_POST['customer_id']) 
	){


	$record_id = 0;
	$units = test_inputs($_POST['units']);
	$height = test_inputs($_POST['height']);
	$dob = test_inputs($_POST['dob']);
	$gender = test_inputs($_POST['gender']);
	$current_body_weight = test_inputs($_POST['current_body_weight']);
	$current_body_fat = test_inputs($_POST['current_body_fat']);
	$target_body_weight = test_inputs($_POST['target_body_weight']);
	$target_body_fat = test_inputs($_POST['target_body_fat']);
	$is_reminder = test_inputs($_POST['is_reminder']);
	$is_hormones = test_inputs($_POST['is_hormones']);
	$customer_id = test_inputs($_POST['customer_id']);
	
	

	
	$qu_customers_options_sel = "SELECT * FROM  `customers_options` WHERE `customer_id` = $customer_id";
	$qu_customers_options_EXE = mysqli_query($KONN, $qu_customers_options_sel);
	$customers_options_DATA;
	if(mysqli_num_rows($qu_customers_options_EXE) > 0 ){
			$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "error" => 'ERR- Customer Has Option Already Added' );
			
			echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
			die();

				
		
	} else {
	    

		$qu_customers_options_ins = "INSERT INTO `customers_options` (
							`units`, 
							`height`, 
							`dob`, 
							`gender`, 
							`current_body_weight`, 
							`current_body_fat`, 
							`target_body_weight`, 
							`target_body_fat`, 
							`is_reminder`, 
							`is_hormones`, 
							`customer_id` 
						) VALUES (
							'".$units."', 
							'".$height."', 
							'".$dob."', 
							'".$gender."', 
							'".$current_body_weight."', 
							'".$current_body_fat."', 
							'".$target_body_weight."', 
							'".$target_body_fat."', 
							'".$is_reminder."', 
							'".$is_hormones."', 
							'".$customer_id."' 
						);";

		if(mysqli_query($KONN, $qu_customers_options_ins)){
			$record_id = mysqli_insert_id($KONN);
			if( $record_id != 0 ){
				$IAM_ARRAY['success'] = true;
				$IAM_ARRAY['result'] = array( "customer_id" => $customer_id, "result" => '1' );
			}
		} else {
			$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "error" => mysqli_error( $KONN ), "result" => '0' );
		}
	    
	    
	    
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

} else {
	$IAM_ARRAY['success'] = false;
	$IAM_ARRAY['result'] = array(   "result" => 'ERR- NO valid request'	);
}
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();


?>
