<?php

	$no_session = false;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
	
if( isset($_POST['customer_id']) ){

	$customer_id = (int) test_inputs($_POST['customer_id']);
	
	
	$customer_picture = 'no-pic.jpg';
	
	if(isset($_FILES['customer_picture']) && $_FILES['customer_picture']["tmp_name"] && $customer_id != 0 ){
		$upload_res = upload_picture('customer_picture', 8000, 'uploads', '../../');
		if($upload_res == true){
			$customer_picture = $upload_res;
			
			$qu_customers_updt = "UPDATE  `customers` SET `customer_picture` = '".$customer_picture."'  WHERE `customer_id` = $customer_id;";
			
			
			
			
			if(mysqli_query($KONN, $qu_customers_updt)){
				$IAM_ARRAY['success'] = true;
				$IAM_ARRAY['result'] = array( "uploaded" => "http://www.teamaskar.com/dashboard/uploads/".$customer_picture );
				echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
				die();
			} else {
				$IAM_ARRAY['success'] = false;
				$IAM_ARRAY['result'] = array( "result" => "ERR- ".mysqli_error( $KONN ) );
				echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
				die();
			}
			
		} else {
			$IAM_ARRAY['success'] = false;
			$IAM_ARRAY['result'] = array( "result" => "ERR- Upload file Error" );
			echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
			die();
		}
	
		
		
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO REQUEST Data or customer_id is ZERO" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	

} else {
	$IAM_ARRAY['success'] = false;
	$IAM_ARRAY['result'] = array( "result" => "ERR- NO REQUEST ID" );
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
}


?>


test