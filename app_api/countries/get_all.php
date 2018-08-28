<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	
	
	$qu_countries_sel = "SELECT * FROM  `countries` ";
	$qu_countries_EXE = mysqli_query($KONN, $qu_countries_sel);
	
	if( mysqli_num_rows($qu_countries_EXE) > 0 ){
		$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_countries_EXE) ){

			$IAM_ARRAY['result'][] = array(  "country_id" => $ARRAY_SRC['country_id'], 
									"iso" => $ARRAY_SRC['iso'], 
									"country_name" => $ARRAY_SRC['country_name'], 
									"phonecode" => $ARRAY_SRC['phonecode'] 
									);

		}
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "ERR- NO DATA" );
	}
	
	echo json_encode($IAM_ARRAY);
	die();
	
	
?>
