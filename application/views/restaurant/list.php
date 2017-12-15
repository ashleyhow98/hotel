<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<hr>
			<a href="<?php echo base_url(); ?>restaurant/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add HouseKeeping</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Room ID </th>
				    <th> Room No </th>
				    <th> Room Status </th>
					
				    <th class="td-actions", width="100"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
                                    if($restaurants){
					foreach ($restaurants as $rest) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$rest->Room_ID?> </td>
				    <td> <?=$rest->Room_No?> </td>
				    <td> <?=$rest->Room_status?> </td>
					
				    <td class="td-actions"><a href="<?php echo base_url(); ?>restaurant/edit/<?=$rest->Room_ID?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a><a href="<?php echo base_url(); ?>restaurant/delete/<?=$rest->Room_ID?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
				  </tr>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>