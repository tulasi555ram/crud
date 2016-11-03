<?php
include('common/header.php');
?>
<h1>Add User Data</h1>
<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Add User <a href="./" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" required/>
                </div>
                <input type="hidden" name="action_type" value="add"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Add User"/>
            </form>
            <div class="result text-center">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready( function(e){
	$('#userForm').on("submit", function(e){
		e.preventDefault();
		$('.result').empty();
		$.ajax({
			type : "POST",
			 url : $(this).attr("action"),
			 data : $(this).serialize(),
			 success : function(response){
			 	if(response){
			 		response = JSON.parse(response);
			 		$('.result').html(response.msg);
			 	}
			 	
			 }
		});
	});
});
</script>
<?php
include('common/footer.php');
?>