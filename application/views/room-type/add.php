<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url(); ?>room-type/add" method="post">
		
			<h1>Add Room Occupancy Report </h1>		
<?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
<?php } ?>
			<div class="add-fields">

				<div class="field">
					<label for="room_type">From To:</label>
					<input type="text" id="type" name="type" required value="<?=$room_type->room_type?>" placeholder="" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="room_price">Room No:</label>
					<input type="number" min="1" id="price" name="price" required value="<?=$room_type->room_price?>" placeholder=""/>
					<i icon="icon-dollar"></i>
				</div> <!-- /field -->

				<div class="field">
					<label for="room_details">Floor No:</label>
					<input type="text" id="details" name="details" value="<?=$room_type->room_details?>" placeholder="Floor"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="room_details">Room Occupancy:</label>
					<input type="text" id="details" name="details" value="<?=$room_type->room_details?>" placeholder="Details of room"/>
				</div> <!-- /field -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Add</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>