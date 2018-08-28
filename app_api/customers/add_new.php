<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
if( isset($_POST['customer_name']) &&
	isset($_POST['customer_username']) &&
	isset($_POST['customer_email']) &&
	isset($_POST['customer_password']) &&
	isset($_POST['customer_phone']) &&
	isset($_POST['country_id']) &&
	isset($_POST['customer_city']) &&
	isset($_POST['customer_zip_code']) &&
	isset($_POST['customer_short_about']) &&
	isset($_POST['customer_about'])
	){

	$customer_id = 0;
	$customer_name = test_inputs($_POST['customer_name']);
	$customer_email = test_inputs($_POST['customer_email']);
	$customer_username = test_inputs($_POST['customer_username']);
	$customer_password = md5( test_inputs($_POST['customer_password']) );
	$customer_phone = test_inputs($_POST['customer_phone']);
	$country_id = test_inputs($_POST['country_id']);
	$customer_city = test_inputs($_POST['customer_city']);
	$customer_zip_code = test_inputs($_POST['customer_zip_code']);
	$customer_short_about = test_inputs($_POST['customer_short_about']);
	$customer_about = test_inputs($_POST['customer_about']);
	$customer_picture = 'no-pic.jpg';
	
	if(isset($_FILES['customer_picture']) && $_FILES['customer_picture']["tmp_name"]){
		$upload_res = upload_picture('customer_picture', 8000, 'uploads', '../../');
		if($upload_res == true){
			$customer_picture = $upload_res;
		} else {
			$customer_picture = 'no-pic.jpg';
		}
	}
	
	

	$qu_customers_sel = "SELECT * FROM  `customers` WHERE `customer_email` = '$customer_email' OR `customer_username` = '$customer_username'";
	$qu_customers_EXE = mysqli_query($KONN, $qu_customers_sel);

	if(mysqli_num_rows($qu_customers_EXE) > 0){
	    $IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- email or username is already registered" );
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	}
	
	
	
	
	
	
	
	$status = 'active';
	$captain_id = 0;
	$added_date = date( 'Y-m-d H:i:00' );

	$qu_customers_ins = "INSERT INTO `customers` (
						`customer_name`, 
						`customer_username`, 
						`customer_email`, 
						`customer_password`, 
						`customer_phone`, 
						`country_id`, 
						`customer_city`, 
						`customer_zip_code`, 
						`customer_short_about`, 
						`customer_about`, 
						`customer_picture`, 
						`status`, 
						`captain_id`, 
						`added_date` 
					) VALUES (
						'".$customer_name."', 
						'".$customer_username."', 
						'".$customer_email."', 
						'".$customer_password."', 
						'".$customer_phone."', 
						'".$country_id."', 
						'".$customer_city."', 
						'".$customer_zip_code."', 
						'".$customer_short_about."', 
						'".$customer_about."', 
						'".$customer_picture."', 
						'".$status."', 
						'".$captain_id."', 
						'".$added_date."' 
					);";

	if(mysqli_query($KONN, $qu_customers_ins)){
		$customer_id = mysqli_insert_id($KONN);
		if( $customer_id != 0 ){
		    
	    $IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array( "customer_id" => $customer_id, "result" => '1' );
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
