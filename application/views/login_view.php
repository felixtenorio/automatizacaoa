<?php $this->load->view('includes/header');?>
<div class="container">
<h1>Acesso Restrito!</h1>
<?php echo validation_errors('<p class="alert alert-danger">','</p>'); ?>
<?php echo form_open('verifylogin',array('role'=>'form')); ?>
<div class="form-group">
	<label for="username">Username:</label>
	<input type="text" class="form-control" id="username" name="username"/>
</div>
<div class="form-group">	
	<label for="password">Password:</label>
	<input type="password" class="form-control" id="passoword" name="password"/>
</div>
<input type="submit" class="btn btn-default" value="Login"/>
</form>
</div>  
<?php $this->load->view('includes/footer');?>