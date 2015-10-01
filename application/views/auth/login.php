<!DOCTYPE html>
<html lang="en">
	<head>
  		<title>Ion Auth With Boot Strap</title>
		<meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	</head>
	<body>
		<div class="container">
  			<h1><?php echo lang('login_heading');?></h1>
			<p><?php echo lang('login_subheading');?></p>
            <?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>
  			<form class="form-horizontal" role="form" action="login" method="post">
    			<div class="form-group">
      				<label class="control-label col-sm-2" for="email">Email:</label>
      				<div class="col-sm-10">
        				<input type="email" class="form-control"  name="identity" id="identity" placeholder="Enter email">
      				</div>
    			</div>
    			<div class="form-group">
      				<label class="control-label col-sm-2" for="pwd">Password:</label>
      				<div class="col-sm-10">          
        				<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
     				</div>
    			</div>
    			<div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
        				<div class="checkbox">
          					<label><input type="checkbox" name="remember" id="remember"> Remember me</label>
        				</div>
      				</div>
    			</div>
    			<div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
        				<?php echo form_submit(array('class' => 'btn btn-primary btn-large', 'name' => 'login', 'value' => 'Login')); ?>
      				</div>
    			</div>
  			</form>
            <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>













<?
/*
<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
*/?>