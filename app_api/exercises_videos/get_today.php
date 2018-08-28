<?php

	$no_sess = true;
	
	$IAM_ARRAY;
	require_once('../user_check.php');
	// $added_date = date( 'Y-m-d H:i:00' );
	
	
	
	$qu_exercises_videos_sel = "SELECT * FROM  `exercises_videos` WHERE `typo` = 'today'";
	$qu_exercises_videos_EXE = mysqli_query($KONN, $qu_exercises_videos_sel);

	if(mysqli_num_rows($qu_exercises_videos_EXE) == 1){
	
		$ARRAY_SRC = mysqli_fetch_assoc($qu_exercises_videos_EXE);
		$IAM_ARRAY['success'] = true;
		$IAM_ARRAY['result'] = array(  "video_id" => $ARRAY_SRC['video_id'], 
								"video_name" => $ARRAY_SRC['video_name'], 
								"video_path" => $ARRAY_SRC['video_path'], 
								"video_thumbnail" => $ARRAY_SRC['video_thumbnail'], 
								"typo" => $ARRAY_SRC['typo'], 
								"added_date" => $ARRAY_SRC['added_date'], 
								"description" => $ARRAY_SRC['description'] 
								);
	
	} else {
$IAM_ARRAY['success'] = false;
		$IAM_ARRAY['result'] = array( "result" => "ERR- Wrong ID - 564" );
	}
	
	echo json_encode($IAM_ARRAY, JSON_FORCE_OBJECT);
	die();
	
?>
