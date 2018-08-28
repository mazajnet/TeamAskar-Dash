<?php

	$no_sess = true;
	
	require_once('../user_check.php');
	
	
	
	if(!isset($_POST['idd'])){
		die( '0|ERR' );
	}
	
	$member_id = (int) $_POST['idd'];
	
	
	$q = "DELETE FROM `executive_board` WHERE `member_id` = '".$member_id."'";
	
	
	if( mysqli_query($KONN, $q) ){
		die( '1|تم بنجاح' );
	} else {
		die( '0|ERR' );
	}
	
	
	
	
	
?>
