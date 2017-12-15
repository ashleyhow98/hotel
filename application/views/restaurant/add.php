<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url(); ?>restaurant/add" method="post">
		
			<h1>Add HouseKeeping</h1>		
			
			<div class="add-fields">

				<div class="field">
					<label for="Room_ID">Room ID :</label>
					<input type="text" id="RoomID" name="restaurantName" required value="" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="Room_No"> Room No :</label>
					<input type="text" id="restaurantOpenTime" name="restaurantOpenTime" required value="" />
				</div> <!-- /password -->

				<div class="field">
					<label for="Room_status">Room Status:</label>
					<input type="text" id="restaurantCloseTime" name="restaurantCloseTime" required value="" />
				</div> <!-- /password -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Add</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>