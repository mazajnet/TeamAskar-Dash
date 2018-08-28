<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	$data = "";
	require_once('../user_check.php');
	
	
	if(!isset($_POST["customer_email"]) || !isset($_POST["customer_password"])  ){
		
		$data = 	'{"success": false, "customer_data":{"error":"no request found"}}';
		echo $data;
		die();
	}

	$customer_email = test_inputs( $_POST["customer_email"] );
	$customer_password = md5( test_inputs($_POST['customer_password']) );
	
	$qu_customers_sel = "SELECT * FROM  `customers` WHERE `customer_email` = '$customer_email' AND `customer_password` = '$customer_password' LIMIT 1";
	$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel);

	if(mysqli_num_rows($qu_customers_EXE) == 1){
	
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_EXE);
								
				$data = 	'{"success": true, "customer_data":{"customer_id":"'.$ARRAY_SRC['customer_id'].'",
								"customer_name":"'.$ARRAY_SRC['customer_name'].'",
								"customer_email":"'.$ARRAY_SRC['customer_email'].'",
								"customer_phone":"'.$ARRAY_SRC['customer_phone'].'",
								"country_id":"'.$ARRAY_SRC['country_id'].'",
								"customer_city":"'.$ARRAY_SRC['customer_city'].'",
								"customer_zip_code":"'.$ARRAY_SRC['customer_zip_code'].'",
								"customer_short_about":"'.$ARRAY_SRC['customer_short_about'].'",
								"customer_about":"'.$ARRAY_SRC['customer_about'].'",
								"customer_picture":"'.$ARRAY_SRC['customer_picture'].'",
								"status":"'.$ARRAY_SRC['status'].'",
								"captain_id":"'.$ARRAY_SRC['captain_id'].'"}}';
								
								
								
	
	} else {
		$data = 	'{"success": false, "customer_data":{"error":"no match found"}}';
	}
	
	echo $data;
	die();
	
?>
