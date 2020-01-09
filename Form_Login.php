<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Login_CSS.css" />
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
</head>

<body class="body">
	<div class="login-box">
    <img src="Login/user-icon-6.png" class="user"/>
    	<h1>Login Here</h1>
        	<form action="index.php" method="post">
            <input type="text" value="login" name="action" hidden="true"/>
            <p>username</p>
            <input type="text" name="login" placeholder="Enter username"/>
            <p>password</p>
            <input type="password" name="password" placeholder="Enter password"/>
            <p style="color:#F00"><?php if(isset($message)) echo $message?></p>
            <input type="submit" value="Login"/>
            </form>
    </div>
    	
</body>
</html>