<?php
include('common/header.php');
?>

  <div class="row">
	  <div class="col-md-12">
	  	<div class="result">
	  				<?php
	  					if(!empty($_SESSION['statusMsg'])){
							echo '<p>'.$_SESSION['statusMsg'].'</p>';
							unset($_SESSION['statusMsg']);
						}
	  				?>
	  	</div>
	  	<div class="panel panel-info users-content">
	  		<div class="panel-heading">Users <a href="add.php" class="glyphicon glyphicon-plus"></a></div>
			   <table class="table table-striped">
				  <tr>
					  <th width="5%">#</th>
					  <th width="20%">Name</th>
					  <th width="30%">Email</th>
					  <th width="20%">Phone</th>
					  <th width="12%">Created</th>
					  <th width="13%"></th>
				  </tr>
				  <?php
				  $users = $db->getRows('users',array('order_by'=>'id DESC'));
				  if(!empty($users)){ $count = 0; foreach($users as $user){ ?>
				  <tr>
					  <td><?php echo ++$count; ?></td>
					  <td><?php echo $user['name']; ?></td>
					  <td><?php echo $user['email']; ?></td>
					  <td><?php echo $user['phone']; ?></td>
					  <td><?php echo $user['created']; ?></td>
					  <td>
						  <a href="edit.php?id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-edit"></a>
						  <a href="action.php?action_type=delete&id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-trash delete"></a>
					  </td>
				  </tr>
				  <?php } }else{ ?>
				  <tr><td colspan="6">No user(s) found......</td>
				  <?php } ?>
			  </table>
			</div>
		</div>
	  </div>
  </div>
<?php
include('common/footer.php');
?>