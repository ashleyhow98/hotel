<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?php echo base_url(); ?>room/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add guest in one room report</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Room No: </th>
				    <th> Floor No: </th>
				    <th> First Name</th>
					<th> Last Name </th>
					<th> Phone </th>
					<th> Gender </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
                    if($rooms){
					foreach ($rooms as $rm) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$rm->room_type ?> </td>
				    <td> <?=$rm->min_id ?> </td>
				    <td> <?=$rm->max_id?> </td>
				    <td> <?=($rm->max_id-$rm->min_id+1) ?> </td>
				    <td class="td-actions">
				    	<a href="<?php echo base_url(); ?>room/edit/<?=$rm->room_type?>/<?=$rm->min_id?>/<?=$rm->max_id?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a>
				    	<a href="<?php echo base_url(); ?>room/delete/<?=$rm->min_id?>/<?=$rm->max_id?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
				    </td>
				  </tr>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>