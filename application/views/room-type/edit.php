<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
            <form action="<?php echo base_url(); ?>room-type/edit/<?php echo ($room_type->room_type); ?>" method="post">
		
			<h1>Update Room Occupancy Report</h1>		
			
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
					<input type="text" id="details" name="details" value="<?=$room_type->room_details?>" placeholder=""/>
				</div> <!-- /field -->

				<div class="field">
					<label for="room_details">Room Occupancy:</label>
					<input type="text" id="details" name="details" value="<?=$room_type->room_details?>" placeholder="Details of room"/>
				</div> <!-- /field -->
				
				<!--div class="field">
					<label for="room_quantity">Quantity:</label>
					<input type="number" min="1" id="quantity" name="quantity" value="<?=$room_type->room_quantity?>" placeholder="Quantity"/>
				</div--> <!-- /field -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Save</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>
