<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
	
	if(!isset($_POST["customer_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
	}

	$customer_id = (int) test_inputs( $_POST["customer_id"] );
	$qu_customers_sel = "SELECT * FROM  `customers` WHERE `customer_id` = $customer_id";
	$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel);
	$customers_DATA;
	if(mysqli_num_rows($qu_customers_EXE) == 1){
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_EXE);
		$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "customer_id" => $ARRAY_SRC['customer_id'], 
								"customer_name" => $ARRAY_SRC['customer_name'], 
								"customer_username" => $ARRAY_SRC['customer_username'], 
								"customer_email" => $ARRAY_SRC['customer_email'], 
								"customer_phone" => $ARRAY_SRC['customer_phone'], 
								"country_id" => $ARRAY_SRC['country_id'], 
								"customer_city" => $ARRAY_SRC['customer_city'], 
								"customer_zip_code" => $ARRAY_SRC['customer_zip_code'], 
								"customer_short_about" => $ARRAY_SRC['customer_short_about'], 
								"customer_about" => $ARRAY_SRC['customer_about'], 
								"customer_picture" => $ARRAY_SRC['customer_picture'], 
								"status" => $ARRAY_SRC['status'], 
								"captain_id" => $ARRAY_SRC['captain_id'], 
								"added_date" => $ARRAY_SRC['added_date'] 
								);
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	
?>
