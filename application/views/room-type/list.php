<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?php echo base_url(); ?>room-type/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Room Occupancy Report</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> From TO: </th>
				    <th> Room No: </th>
				    <th> Floor No: </th>
				    <th> Room Occupancy: </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
                                    if(count($room_types) > 0){
					foreach ($room_types as $rt) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$rt->room_type ?> </td>
				    <td> <?=$rt->room_price ?>$ </td>
				    <td> <?=$rt->room_details ?> </td>
				    <td> <?=$rt->room_quantity ?> </td>
				    <td class="td-actions">
                                        <a href="<?php echo base_url(); ?>room-type/edit/<?php echo rawurlencode($rt->room_type); ?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a>
				    	<a href="<?php echo base_url(); ?>room-type/delete/<?php echo rawurlencode($rt->room_type); ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
				    </td>
				  </tr>
				<?php } 
                                }?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>