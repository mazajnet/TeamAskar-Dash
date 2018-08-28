

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; <?=date('Y'); ?>. <a href="#">TeamAsker CP</a> by <a href="http://www.mazajnet.com/" target="_blank">MazajNet</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



<!-- Modal -->
<div id="view-frm-customer" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:90%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-primary"><?=lang('View_Customer_Details', 'AAA'); ?></h4>
      </div>
      <div class="modal-body">
      <div class="row">

<div class="col-xs-12">

<div class="col-lg-2 col_class"></div>
<div class="col-lg-10 col_class">
	<div class="col-lg-3 text-right">
		<img class="img-rounded" id="viewcust-customer_picture" alt="No Picture Available" src="uploads/no-pic.jpg" style="width: 100%;border: 1px solid;height: auto;max-height:200px;object-fit: contain;;">
	</div>
	<div class="col-lg-9 text-left">
		<h1 id="viewcust-customer_name" class="text-primary" style="margin: 0;">Name</h1>
		<h2 id="viewcust-customer_email" style="margin: 0;">Email</h2>
		<h4 id="viewcust-customer_phone" style="margin: 0;">Phone</h4>
		<h5 style="margin: 0;"><span id="viewcust-country_name">Country</span> - <span id="viewcust-customer_city">City</span></h5>
	</div>
	
</div>
<div class="col-lg-12 col_class"><hr></div>



<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Customer Short About', 'ARR', 1); ?></label>
		<input name="customer_short_about" id="viewcust-customer_short_about" type="text" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Customer About', 'ARR', 1); ?></label>
		<textarea name="customer_about" id="viewcust-customer_about" class="form-control" readonly></textarea>
	</div>
</div>


<div class="col-lg-12 col_class">
	<hr>
</div>

<div class="col-lg-4">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Units', 'ARR', 1); ?></label>
		<select name="units" id="viewcust-units" class="form-control" readonly disabled>
			<option value="imperial"><?=lang('Imperial', 'ARR', 1); ?></option>
			<option value="metric"><?=lang('Metric', 'ARR', 1); ?></option>
		</select>
	</div>
</div>

<div class="col-lg-4">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Mobile Notifications', 'ARR', 1); ?></label>
		<select name="is_reminder" id="viewcust-is_reminder" class="form-control" readonly disabled>
			<option value="1"><?=lang('Yes', 'ARR', 1); ?></option>
			<option value="0"><?=lang('No', 'ARR', 1); ?></option>
		</select>
	</div>
</div>

<div class="col-lg-4">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Is Consume Hormones', 'ARR', 1); ?> ?</label>
		<select name="is_hormones" id="viewcust-is_hormones" class="form-control" readonly disabled>
			<option value="1"><?=lang('Yes', 'ARR', 1); ?></option>
			<option value="0"><?=lang('No', 'ARR', 1); ?></option>
		</select>
	</div>
</div>

<div class="col-lg-4">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Dob', 'ARR', 1); ?></label>
		<input name="dob" id="viewcust-dob" type="text" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-4">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Gender', 'ARR', 1); ?></label>
		<select name="gender" id="viewcust-gender" class="form-control" readonly disabled>
			<option value="male"><?=lang('Male', 'ARR', 1); ?></option>
			<option value="female"><?=lang('Female', 'ARR', 1); ?></option>
		</select>
	</div>
</div>

<div class="col-lg-4">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Height', 'ARR', 1); ?> ( cm )</label>
		<input name="height" id="viewcust-height" type="text" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-3">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Current Body Weight', 'ARR', 1); ?> ( Kg )</label>
		<input name="current_body_weight" id="viewcust-current_body_weight" type="text" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-3">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Curerent Body Fat', 'ARR', 1); ?> ( % )</label>
		<input name="current_body_fat" id="viewcust-current_body_fat" type="text" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-3">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Target Body Weight', 'ARR', 1); ?> ( Kg )</label>
		<input name="target_body_weight" id="viewcust-target_body_weight" type="text" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-3">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Target Body Fat', 'ARR', 1); ?> ( % )</label>
		<input name="target_body_fat" id="viewcust-target_body_fat" type="text" class="form-control" readonly>
	</div>
</div>
	<div class="col-sm-12 text-right">
		<hr>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>


</div>

      </div>
      </div>
    </div>

  </div>
</div>





<div id="view-nutri-details" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nutritions Plan Details</h4>
      </div>
      <div class="modal-body">
<div class="row">




<form method="post" class="col-xs-12" >


<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Customer', 'ARR', 1); ?></label>
		<input type="text" name="customer_name" id="viewnutrition-customer_name" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Captain', 'ARR', 1); ?></label>
		<select name="captain_id" id="viewnutrition-captain_id" class="form-control" readonly disabled>
<?php
	$qu_sel = "SELECT `captain_id`, `captain_name` FROM  `captains` WHERE `status` = 'active'";
	$qu_s_EXE = mysqli_query($KONN, $qu_sel);
	if(mysqli_num_rows($qu_s_EXE)){
		while($DT_REC = mysqli_fetch_array($qu_s_EXE)){
		?>
		
		<option value="<?=$DT_REC[0]; ?>"><?=$DT_REC[1]; ?></option>
		<?php
		}
	}
?>
		</select>
	</div>
</div>

<div class="col-lg-4 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('meals_per_day', 'ARR', 1); ?></label>
		<select name="meals_per_day" id="viewnutrition-meals_per_day" class="form-control" readonly disabled>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
		</select>
	</div>
</div>

<div class="col-lg-4 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Targeted_Weight', 'ARR', 1); ?></label>
		<select name="target_weight" id="viewnutrition-target_weight" type="text" class="form-control" readonly disabled>
			<option value="gain"><?=lang('Gain Weight', 'ARR', 1); ?></option>
			<option value="loss"><?=lang('Loss_Weight', 'ARR', 1); ?></option>
		</select>
	</div>
</div>

<div class="col-lg-4 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('buy_meals_from_us ?', 'ARR', 1); ?></label>
		<select name="meals_from_us" id="viewnutrition-meals_from_us" type="text" class="form-control" readonly disabled>
			<option value="1"><?=lang('Yes', 'ARR', 1); ?></option>
			<option value="0"><?=lang('NO', 'ARR', 1); ?></option>
		</select>
	</div>
</div>

<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Likes_List', 'ARR', 1); ?></label>
		<textarea name="likes_list" rows="6" id="viewnutrition-likes_list" class="form-control" readonly></textarea>
	</div>
</div>

<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Dont_Likes_List', 'ARR', 1); ?></label>
		<textarea name="not_likes_list" rows="6" id="viewnutrition-not_likes_list" class="form-control" readonly></textarea>
	</div>
</div>



<br>


</form>

</div>
      </div>
      <div class="modal-footer">
        <hr>
      </div>
    </div>

  </div>
</div>





<div id="view-exercise-details" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Exercise Plan Details</h4>
      </div>
      <div class="modal-body">
<div class="row">




<form method="post" class="col-xs-12" >


<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Customer', 'ARR', 1); ?></label>
		<input type="text" name="customer_name" id="viewexercise-customer_name" class="form-control" readonly>
	</div>
</div>

<div class="col-lg-6 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Captain', 'ARR', 1); ?></label>
		<select name="captain_id" id="viewexercise-captain_id" class="form-control" readonly disabled>
<?php
	$qu_sel = "SELECT `captain_id`, `captain_name` FROM  `captains` WHERE `status` = 'active'";
	$qu_s_EXE = mysqli_query($KONN, $qu_sel);
	if(mysqli_num_rows($qu_s_EXE)){
		while($DT_REC = mysqli_fetch_array($qu_s_EXE)){
		?>
		
		<option value="<?=$DT_REC[0]; ?>"><?=$DT_REC[1]; ?></option>
		<?php
		}
	}
?>
		</select>
	</div>
</div>


<div class="col-lg-4 col_class">
	<div class="form-group">
		<label class="lbl_class"><?=lang('Targeted_Weight', 'ARR', 1); ?></label>
		<select name="target_weight" id="viewexercise-target_weight" type="text" class="form-control" readonly disabled>
			<option value="gain"><?=lang('Gain Weight', 'ARR', 1); ?></option>
			<option value="loss"><?=lang('Loss_Weight', 'ARR', 1); ?></option>
		</select>
	</div>
</div>




<br>


</form>

</div>
      </div>
      <div class="modal-footer">
        <hr>
      </div>
    </div>

  </div>
</div>


<script>
function view_exercise_details( exercise_plan_id ){
	exercise_plan_id = parseInt( exercise_plan_id );
	
	if( exercise_plan_id != 0 ){
		
		// alert(exercise_plan_id);
		//send ajax
			$('.added_subs').each( function(){
				$(this).remove();
			} );
			start_loader();
			$.ajax({
				url      :"app_api/helpers/get_exercise_plan_details.php",
				data     :{ 'exercise_plan_id': exercise_plan_id },
				dataType :"JSON",
				type     :'POST',
				success  :function(response){
					var res = response['success'];
					var result = response['result'];
					// alert( res );
					end_loader();
					if( res == true ){
						// alert( 'TRUE' );
						//bend data
						// alert( result['country_name'] );
						
						$('#viewexercise-customer_name').val(result['customer_name']);
						$('#viewexercise-exercise_plan_id').val(result['exercise_plan_id']);
						$('#viewexercise-meals_per_day').val(result['meals_per_day']);
						$('#viewexercise-target_weight').val(result['target_weight']);
						$('#viewexercise-meals_from_us').val(result['meals_from_us']);
						$('#viewexercise-likes_list').val(result['likes_list']);
						$('#viewexercise-not_likes_list').val(result['not_likes_list']);
						$('#viewexercise-captain_comments').val(result['captain_comments']);
						$('#viewexercise-customer_id').val(result['customer_id']);
						$('#viewexercise-captain_id').val(result['captain_id']);
						//show modal
						$('#view-exercise-details').modal('show');
						
						
					} else {
						alert( 'General ERROR-984454' );
					}
					
				},
				error    :function(){
					end_loader();
					alert('Code Not Applied');
				},
			});
	}
}



function view_nutri_details( nutrition_plan_id ){
	nutrition_plan_id = parseInt( nutrition_plan_id );
	
	if( nutrition_plan_id != 0 ){
		
		// alert(nutrition_plan_id);
		//send ajax
			$('.added_subs').each( function(){
				$(this).remove();
			} );
			start_loader();
			$.ajax({
				url      :"app_api/helpers/get_nutri_plan_details.php",
				data     :{ 'nutrition_plan_id': nutrition_plan_id },
				dataType :"JSON",
				type     :'POST',
				success  :function(response){
					var res = response['success'];
					var result = response['result'];
					// alert( res );
					end_loader();
					if( res == true ){
						// alert( 'TRUE' );
						//bend data
						// alert( result['country_name'] );
						
						$('#viewnutrition-customer_name').val(result['customer_name']);
						$('#viewnutrition-nutrition_plan_id').val(result['nutrition_plan_id']);
						$('#viewnutrition-meals_per_day').val(result['meals_per_day']);
						$('#viewnutrition-target_weight').val(result['target_weight']);
						$('#viewnutrition-meals_from_us').val(result['meals_from_us']);
						$('#viewnutrition-likes_list').val(result['likes_list']);
						$('#viewnutrition-not_likes_list').val(result['not_likes_list']);
						$('#viewnutrition-captain_comments').val(result['captain_comments']);
						$('#viewnutrition-customer_id').val(result['customer_id']);
						$('#viewnutrition-captain_id').val(result['captain_id']);
						
						
						
						//show modal
						$('#view-nutri-details').modal('show');
						
						
					} else {
						alert( 'General ERROR-984454' );
					}
					
				},
				error    :function(){
					end_loader();
					alert('Code Not Applied');
				},
			});
	}
}


function view_customer_details( customer_id ){
	customer_id = parseInt( customer_id );
	if( customer_id != 0 ){
		
		// alert(customer_id);
		//send ajax
			$('.added_subs').each( function(){
				$(this).remove();
			} );
			start_loader();
			$.ajax({
				url      :"app_api/helpers/get_customer_details.php",
				data     :{ 'customer_id': customer_id },
				dataType :"JSON",
				type     :'POST',
				success  :function(response){
					var res = response['success'];
					var result = response['result'];
					// alert( res );
					end_loader();
					if( res == true ){
						// alert( 'TRUE' );
						//bend data
						// alert( result['country_name'] );
						
						$('#viewcust-customer_name').html(result['customer_name']);
						$('#viewcust-customer_email').html(result['customer_email']);
						$('#viewcust-customer_phone').html(result['customer_phone']);
						$('#viewcust-country_name').html(result['country_name']);
						$('#viewcust-customer_city').html(result['customer_city']);
						
						$('#viewcust-customer_zip_code').val(result['customer_zip_code']);
						$('#viewcust-customer_short_about').val(result['customer_short_about']);
						$('#viewcust-customer_about').val(result['customer_about']);
						$('#viewcust-customer_picture').attr('src', 'uploads/' + result['customer_picture']);
						$('#viewcust-units').val(result['units']);
						$('#viewcust-height').val(result['height']);
						$('#viewcust-dob').val(result['dob']);
						$('#viewcust-gender').val(result['gender']);
						$('#viewcust-current_body_weight').val(result['current_body_weight']);
						$('#viewcust-current_body_fat').val(result['current_body_fat']);
						$('#viewcust-target_body_weight').val(result['target_body_weight']);
						$('#viewcust-target_body_fat').val(result['target_body_fat']);
						$('#viewcust-is_reminder').val(result['is_reminder']);
						$('#viewcust-is_hormones').val(result['is_hormones']);



						
						
						
						
						
						
						
						
						
						
						//show modal
						$('#view-frm-customer').modal('show');
						
						
					} else {
						alert( 'General ERROR-984454' );
					}
					
				},
				error    :function(){
					end_loader();
					alert('Code Not Applied');
				},
			});
		
		
		
		
	
	}
		
}



function load_subs( customer_id, typo, tar ){
	customer_id = parseInt( customer_id );
	if( customer_id != 0 ){
		// alert(customer_id);
		//send ajax
			$('.added_subs').each( function(){
				$(this).remove();
			} );
			start_loader();
			$.ajax({
				url      :"app_api/helpers/get_customer_subs.php",
				data     :{ 'customer_id': customer_id, 'type': typo },
				dataType :"JSON",
				type     :'POST',
				success  :function(response){
					var res = response['success'];
					var result = response['result'];
					// alert( res );
					end_loader();
					if( res == true ){
						// alert( 'TRUE' );
						$('#' + tar + '').val(0);
						for( var key in result ){
							var ths = result[key];
							
							var subscription_id = ths['subscription_id'];
							var subscription_ref = ths['subscription_ref'];
							var end_date = ths['end_date'];
							var plan_type = ths['plan_type'];
							
							var ths_name = subscription_ref + '-' + plan_type + ', Ends AT:' + end_date;
							
							var opt = '<option class="added_subs" value="' + subscription_id + '">' + ths_name + '</option>';
							
							$('#' + tar + '').append( opt );
							
							// console.log( ths_name );
						}
						
						
					} else {
						// alert( 'FFF' );
						if( result['result'] == 'No Active Subscriptions Found' ){
							alert( result['result'] );
							$('#' + tar + '').val('new_sub');
						} else {
							alert( 'General ERROR-64189478' );
						}
							
					}
					// var ss = parseInt(response[0].success);
					// $().html( response );
						
				},
				error    :function(){
					end_loader();
					alert('Code Not Applied');
				},
			});
		
		
		
		
	}
}

</script>

<!-- Modal -->
<div id="edit-frm" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:90%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-primary"><?=lang('View_Details', 'AAA'); ?></h4>
      </div>
      <div class="modal-body">
      <div class="row">
	  
<div id="added_details"></div>


	<div class="col-sm-12 text-right">
		<hr>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
	
      </div>
      </div>
    </div>

  </div>
</div>



<div id="ghost"></div>
<div id="loader"><img src="assets/images/loader.gif" alt="loading"></div>

<script>


function start_loader(){
	show_ghost('');
	$('#loader').addClass('showed-loader');
}

function end_loader(){
	$('#loader').removeClass('showed-loader');
	hide_ghost();
}

/* -- GHOST FUNCTIONS -- */
function show_ghost(tar){
	if(tar != ''){
		$('#ghost').attr('onclick', tar + ';');
	}
	$('#ghost').addClass('showed-ghost');
}
function hide_ghost(){
	$('#ghost').removeClass('showed-ghost');
	$('#ghost').attr('onclick', '');
}
/* -- -- -- -- -- */


function delete_ths(idd, typo){
	
	var aa = confirm('Are You Sure, this Cannot be Reversed ?');
	if(aa==true){
		//go delete
		$.ajax({
			url      :"../app_api/helpers/rem_it.php",
			data     :{'id': idd, 'op': typo},
			dataType :"html",
			type     :'POST',
			success  :function(data){
				
				var dd_ar = data.split('|');
				var res = parseInt(dd_ar[0]);
				
				if(res == 1){
					$('#tr-' + idd).remove();
				} else {
					alert('ERROR : 5656');
				}
				
				},
			error    :function(){
				alert('Code Not Applied');
				},
			});
		
		
	}
}
</script>