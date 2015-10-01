<!DOCTYPE html>
<html lang="en">
	<head>
  		<title>Ion Auth With Boot Strap</title>
		<meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	</head>
    <body>
    	<nav class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#">BootStrapIonAuth</a>
    			</div>
            	<div>
                	<ul class="nav navbar-nav">
                    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
                    	<li><a href="<?php echo base_url('index.php/auth/create_user'); ?>">Create User</a></li>
        				<li><a href="<?php echo base_url('index.php/boot_strap_modal'); ?>">BS Modal</a></li>
                        <li><a href="<?php echo base_url('index.php/auth/data_table_ssp'); ?>">Data Table</a></li>
                    </ul>
                
				</div>
                <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('index.php/auth/logout'); ?>">Log Out</a></p>
            </div>
    	</nav>