<?php

	global $sess_id;
	$sess_id = "bsmellah-2qyt9-SBE-Belting-erp-673t873t-wt78wgt38-askar";
	require_once('../../bootstrap/app_config.php');




	if(!isset($_POST["nutrition_plan_id"])){
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- NO Request ID" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	
	$nutrition_plan_id = (int) test_inputs( $_POST["nutrition_plan_id"] );
	
	
	$qu_customers_nutrition_diets_sel = "SELECT * FROM  `customers_nutrition_diets_hormones` WHERE `nutrition_plan_id` = $nutrition_plan_id";
	$qu_customers_nutrition_diets_EXE = mysqli_query($KONN, $qu_customers_nutrition_diets_sel);
	$customers_nutrition_diets_DATA;
	if(mysqli_num_rows($qu_customers_nutrition_diets_EXE) > 0 ){
	$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_nutrition_diets_EXE) ){

			$IAM_ARRAY['result'][] = array( "hormone_name" => $ARRAY_SRC['hormone_name'], 
											"comments" => $ARRAY_SRC['comments'], 
											"recomended_time" => $ARRAY_SRC['recomended_time'], 
											"added_date" => $ARRAY_SRC['added_date'], 
											"taken_date" => $ARRAY_SRC['taken_date'], 
											"nutrition_plan_id" => $ARRAY_SRC['nutrition_plan_id']
											);
		}
		echo json_encode($IAM_ARRAY);
		die();
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "No Hormones Found" );
		echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
		die();
	}
	

	
?>
