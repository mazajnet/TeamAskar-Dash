<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	if(!isset($_POST["nutrition_plan_id"])){
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}

	$nutrition_plan_id = (int) test_inputs( $_POST["nutrition_plan_id"] );
	
	$qu_customers_nutrition_diets_not_likes_sel = "SELECT * FROM  `customers_nutrition_diets_not_likes` WHERE `nutrition_plan_id` = $nutrition_plan_id";
	$qu_customers_nutrition_diets_not_likes_EXE = mysqli_query($KONN, $qu_customers_nutrition_diets_not_likes_sel);
	
	if( mysqli_num_rows($qu_customers_nutrition_diets_not_likes_EXE) > 0 ){
$IAM_ARRAY['success'] = true;
	
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_nutrition_diets_not_likes_EXE) ){

			$IAM_ARRAY['result'] = array(  "record_id" => $ARRAY_SRC['record_id'], 
									"item_name" => $ARRAY_SRC['item_name'], 
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
