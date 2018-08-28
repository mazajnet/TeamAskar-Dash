<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	$data = "";
	require_once('../user_check.php');
	
	
	if(!isset($_POST["customer_email"]) ){
		
		$data = 	'{"success": false, "customer_data":{"error":"no request found"}}';
		echo $data;
		die();
	}

	$customer_email = test_inputs( $_POST["customer_email"] );
	
	$qu_customers_sel = "SELECT * FROM  `customers` WHERE `customer_email` = '$customer_email' LIMIT 1";
	$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel);

	if(mysqli_num_rows($qu_customers_EXE) == 1){
	
		$ARRAY_SRC = mysqli_fetch_assoc($qu_customers_EXE);
								
				$data = 	'{"success": true, "result":"A password reset link has been sent to your inbox, please check your email"}';
								
								
								
	
	} else {
		$data = 	'{"success": false, "result": ""no match found" }';
	}
	
	echo $data;
	die();
	
?>
