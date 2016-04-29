<?php $this->load->view('includes/header');?>
<div class="container">
<h1>Simple Login with CodeIgniter</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin'); ?>
<label for="username">Username:</label>
<input type="text" size="20" id="username" name="username"/>
<br/>
<label for="password">Password:</label>
<input type="password" size="20" id="passoword" name="password"/>
<br/>
<input type="submit" value="Login"/>
</form>
</div>  
<?php $this->load->view('includes/footer');?>