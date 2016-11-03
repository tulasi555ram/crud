<?php
include('common/header.php');
?>

  <div class="row">
	  <div class="col-md-12">
<?php	  	$userData = $db->getRows('users',array('where'=>array('id'=>$_GET['id']),'return_type'=>'single'));
if(!empty($userData)){
?>
<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Edit User <a href="./" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required name="name" value="<?php echo $userData['name']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required name="email" value="<?php echo $userData['email']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required name="phone" value="<?php echo $userData['phone']; ?>"/>
                </div>
                <input type="hidden" name="id" value="<?php echo $userData['id']; ?>"/>
                <input type="hidden" name="action_type" value="edit"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Update User"/>
            </form>
        </div>
    </div>
</div>
<?php } ?>
	  </div>
	  </div>
  </div>
<?php
include('common/footer.php');
?>