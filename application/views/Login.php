

<?php $this->load->view('header'); ?>
	<!-- full content section -->
<div class="container" >
<div class="col-lg-offset-1 col-lg-8">
	<div class="panel panel-success">
	<div class="panel-heading">User Login Panel</div>
	<!-- panel body -->
	<div class="panel-body">
		<!-- Login form -->
		<div class="form-group col-lg-8">
			<form class="form-group" method="POST">
			<div class="form-group">
				<label>Enter User name</label>
				<input class="form-control" name="username"  />
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" class="form-control" name="Password"  />
			</div>
			 <input type="reset" class="btn btn-danger" value="Reset input" />
             <input type="submit" class="btn btn-primary" value="sign in" />
				
			</form>
		</div>
	</div>
	<div class="panel-footer">
		
	</div>
	</div>
</div>
</div>
</body>
</html>