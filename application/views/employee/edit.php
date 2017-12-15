<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url(); ?>employee/add" method="post">
		
			<h1>Edit Staff Details</h1>		
			
			<div class="add-fields">

				<div class="field">
					<label for="employee_username">Username:</label>
					<input type="text" id="username" name="username" required value="" placeholder="Username"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="text" id="password" name="password" required value="" placeholder="Password"/>
				</div> <!-- /password -->

				<div class="field">
					<label for="employee_firstname">First name:</label>
					<input type="text" id="firstname" name="firstname" required value="" placeholder="Firstname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_lastname">Last name:</label>
					<input type="text" id="lastname" name="lastname" required value="" placeholder="Lastname"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_telephone">Telephone:</label>
					<input type="text" id="telephone" name="telephone" value="" placeholder="Telephone"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_bank_acct_no">Bank Account No:</label>
					<input type="text" id="bca" name="bca" value="" placeholder="Bank Account No"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="employee_type">Duty:</label>
					<input type="text" id="employee_type" name="employee_type" required value="" placeholder="Duty type"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_address">Address:</label>
					<input type="text" id="employee_address" name="employee_address" value="" placeholder="Employee Address"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="employee_date_of_birth">DOB:</label>
					<input type="date" id="employee_date_of_birth" name="employee_date_of_birth" value="" placeholder="DOB"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Save</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>