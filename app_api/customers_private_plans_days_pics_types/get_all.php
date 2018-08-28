<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	$qu_customers_private_plans_days_pics_types_sel = "SELECT * FROM  `customers_private_plans_days_pics_types` ";
	$qu_customers_private_plans_days_pics_types_EXE = mysqli_query($KONN, $qu_customers_private_plans_days_pics_types_sel);
	
	if( mysqli_num_rows($qu_customers_private_plans_days_pics_types_EXE) > 0 ){
$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_customers_private_plans_days_pics_types_EXE) ){

			$IAM_ARRAY['result'][] = array(  "record_id" => $ARRAY_SRC['record_id'], 
									"picture_name" => $ARRAY_SRC['picture_name'], 
									"silhoutte_picture" => $ARRAY_SRC['silhoutte_picture'], 
									"last_updated" => $ARRAY_SRC['last_updated'] 
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
