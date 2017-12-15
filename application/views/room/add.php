<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url(); ?>room/add" method="post">
		
			<h1>Add Room Status Report</h1>		
<?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
<?php } ?>

			<div class="add-fields">

				<div class="field">
					<label for="room_range">Room No:</label>
					<input type="text" id="room_type" name="room_type" required value="" placeholder="Room Type"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="min_id">Floor no:</label>
					<input type="number" min="1" id="min_id" name="min_id" required value="" placeholder="-"/>
					<i icon="icon-dollar"></i>
				</div> <!-- /field -->

				<div class="field">
					<label for="max_id">Room Status::</label>
					<input type="number" min="1" id="max_id" name="max_id" value="" placeholder="-"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Add</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>