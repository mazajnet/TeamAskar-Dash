<?php

	$no_sess = true;
	$IAM_ARRAY;
	require_once('../user_check.php');
	
	$qu_banners_sel = "SELECT * FROM  `banners` ";
	$qu_banners_EXE = mysqli_query($KONN, $qu_banners_sel);
	
	
	if( mysqli_num_rows($qu_banners_EXE) > 0 ){
	$IAM_ARRAY['success'] = true;
		while( $ARRAY_SRC = mysqli_fetch_assoc($qu_banners_EXE) ){
			
			$IAM_ARRAY['result'][] = array(  "banner_id" => $ARRAY_SRC['banner_id'], 
									"banner_name" => $ARRAY_SRC['banner_name'], 
									"banner_image" => $ARRAY_SRC['banner_image'], 
									"last_updated" => $ARRAY_SRC['last_updated'] 
									);

		}
	echo json_encode($IAM_ARRAY);
	die();
	
	} else {
		$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array(  "result" => "ERR- NO DATA" );
	}
	
	echo json_encode($IAM_ARRAY);
	die();
	
	
?>

test

test2