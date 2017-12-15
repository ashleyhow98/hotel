<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?php echo base_url('employee/add'); ?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Staff</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Username </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
					foreach ($employers as $emp) {
						// $emp->username
						//var_dump($emp);
				?>
				  <tr>
				    <td> <?=$emp->employer_username; ?> </td>
				    <td class="td-actions"><a href="<?php echo base_url(); ?>employer/edit/<?=$emp->employer_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?php echo base_url(); ?>employer/delete/<?=$emp->employer_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
				  </tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>