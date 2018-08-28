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
	
	$qu_customers_nutrition_diets_supplement_sel = "SELECT * FROM  `customers_nutrition_diets_supplement` WHERE `customer_id` = $customer_id";
	$qu_customers_nutrition_diets_supplement_EXE = mysqli_query($KONN, $qu_customers_nutrition_diets_supplement_sel);
	
	if( mysqli_num_rows($qu_customers_nutrition_diets_supplement_EXE) > 0 ){
$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_nutrition_diets_supplement_EXE) ){

			$IAM_ARRAY['result'][] = array(  "record_id" => $ARRAY_SRC['record_id'], 
									"supplement_id" => $ARRAY_SRC['supplement_id'], 
									"supplement_name" => $ARRAY_SRC['supplement_name'], 
									"comments" => $ARRAY_SRC['comments'], 
									"added_date" => $ARRAY_SRC['added_date'], 
									"taken_date" => $ARRAY_SRC['taken_date'], 
									"nutrition_plan_id" => $ARRAY_SRC['nutrition_plan_id'], 
									"customer_id" => $ARRAY_SRC['customer_id'] 
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
