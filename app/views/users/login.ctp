<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->Html->css("login"); ?>
<title>Login</title>
<body>
  
    <form action="" method="post">
        <fieldset>
            <legend>Login</legend>
            <label>Username</label><input type="text" name="username" size="20" /><br />
            <label>Password</label><input type="password" name="password" size="20" />
            <label></label><input type="submit" name="ok" value="Login" />
            <span class="error"><?php echo $error; ?></span>
        </fieldset> 
    </form>
</body>
</html>