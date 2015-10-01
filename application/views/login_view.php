<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 
  'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Login Screen | Welcome </title>
</head>
<body>
    
        <form action="<?php echo site_url().'/login/process'?>" method='post' name='process' >
            <h2>User Login</h2>
            <br />            
            <label for='username'>Username</label>
            <input type='text' name='user_name' id='user_name' size='25' /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='user_password' id='user_password' size='25' /><br />                            
        
            <input type='Submit' value='Login' />            
        </form>
   
</body>
</html>