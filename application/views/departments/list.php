<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?php echo base_url(); ?>departments/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Check-in</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Guest ID: </th>
				    <th> first name </th>
				    <th> last name: </th>
					<th> Phone No: </th>
					<th> email address: </th>
					<th> home address: </th>
					<th> postal code: </th>
					<th> Country: </th>
					<th> Payment details: </th>
					<th> Credit card no: </th>
					<th> CCV: </th>
					<th> Checkin Date: </th>
					<th> checkin time: </th>
					<th> checkout date: </th>
					<th> checkout time: </th>
					<th> remarks: </th>
					<th> checkout deadline: </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
					foreach ($departments as $dept) {
						// $emp->username
					// 	var_dump($dept);
					// }
						//echo "ASD";
				?>
				  <tr>
				    <td> <?=$dept->department_id; ?> </td>
				    <td> <?=$dept->department_name ?> </td>
				    <td> <?=$dept->department_budget ?> </td>
				    <td class="td-actions"><a href="<?php echo base_url(); ?>departments/edit/<?=$dept->department_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?php echo base_url(); ?>departments/delete/<?=$dept->department_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
				  </tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>