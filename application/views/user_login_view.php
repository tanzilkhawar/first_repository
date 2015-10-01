<html>
    <head>
        <title>Validating form fields using CodeIgniter</title>
    </head>
    <body>
        <div id="container">
        <?php echo form_open('login/submit_login_form'); ?>
        <h1>Validating form fields using CodeIgniter</h1><hr/> 
        
        <?php echo form_label('User Name :'); ?> <br />
        <?php echo form_input(array('id' => 'user_name', 'name' => 'user_name')); ?><br />


        <?php echo form_label('User Password :'); ?><br />
        <?php echo form_input(array('id' => 'user_password', 'name' => 'user_password')); ?><br />

        <?php echo form_submit(array('id' => 'submit', 'name' => 'submit', 'value' => 'Submit')); ?>

        <?php echo form_close(); ?>
        
        
       </div>
    </body>
</html>
