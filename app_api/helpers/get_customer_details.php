<?php

	global $sess_id;
	$sess_id = "bsmellah-2qyt9-SBE-Belting-erp-673t873t-wt78wgt38-askar";
	require_once('../../bootstrap/app_config.php');




	if(!isset($_POST["customer_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$customer_id = (int) test_inputs( $_POST["customer_id"] );
	$qu_customers_sel = "SELECT * FROM  `customers` WHERE `customer_id` = $customer_id";
	$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel);
	$customers_DATA;
	if(mysqli_num_rows($qu_customers_EXE) == 1){
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_EXE);
		$country_id = $ARRAY_SRC['country_id'];
		
		$qu_countries_sel = "SELECT `country_name` FROM  `countries` WHERE `country_id` = $country_id";
		$qu_countries_EXE = mysqli_query($KONN, $qu_countries_sel);
		$countries_DATA;
		$country_name = "NA";
		if(mysqli_num_rows($qu_countries_EXE)){
			$countries_DATA = mysqli_fetch_assoc($qu_countries_EXE);
			$country_name = $countries_DATA['country_name'];
		}

		$qu_customers_options_sel = "SELECT * FROM  `customers_options` WHERE `customer_id` = $customer_id";
		$qu_customers_options_EXE = mysqli_query($KONN, $qu_customers_options_sel);
		$customers_options_DATA;
		if(mysqli_num_rows($qu_customers_options_EXE)){
			$customers_options_DATA = mysqli_fetch_assoc($qu_customers_options_EXE);
		}

		
		$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "customer_id" => $ARRAY_SRC['customer_id'], 
										"customer_name" => $ARRAY_SRC['customer_name'], 
										"customer_username" => $ARRAY_SRC['customer_username'], 
										"customer_email" => $ARRAY_SRC['customer_email'], 
										"customer_phone" => $ARRAY_SRC['customer_phone'], 
										"country_id" => $ARRAY_SRC['country_id'], 
										"country_name" => $country_name, 
										"customer_city" => $ARRAY_SRC['customer_city'], 
										"customer_zip_code" => $ARRAY_SRC['customer_zip_code'], 
										"customer_short_about" => $ARRAY_SRC['customer_short_about'], 
										"customer_about" => $ARRAY_SRC['customer_about'], 
										"customer_picture" => $ARRAY_SRC['customer_picture'], 
										"status" => $ARRAY_SRC['status'], 
										"captain_id" => $ARRAY_SRC['captain_id'], 
										"units" => $customers_options_DATA['units'], 
										"height" => $customers_options_DATA['height'], 
										"dob" => $customers_options_DATA['dob'], 
										"gender" => $customers_options_DATA['gender'], 
										"current_body_weight" => $customers_options_DATA['current_body_weight'], 
										"current_body_fat" => $customers_options_DATA['current_body_fat'], 
										"target_body_weight" => $customers_options_DATA['target_body_weight'], 
										"target_body_fat" => $customers_options_DATA['target_body_fat'], 
										"is_reminder" => $customers_options_DATA['is_reminder'], 
										"is_hormones" => $customers_options_DATA['is_hormones']
										);
										
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
?>
