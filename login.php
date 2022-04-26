<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
Hunter Brewer
CS155 -->
<html>
<head>
<?php

require('lib/phpfunctions.php');

function checkLogin($user, $pass)
{
    if ($user == 'user' && $pass == 'password')
    return True;  
    else
    return False;
}

session_start(); 

$message = '';
if (isset($_POST['choice'])) 
{
    if ( checkLogin($_POST['loginusername'], $_POST['loginpassword']) )
    {
    header('Location: welcome.php');
    $_SESSION['username'] = $_POST['loginusername'];
    }
    else
    {
    $message = 'Invalid Username or Password';
    }
}
else
{
}
?>
</head>
<body>
<h2>This is a student website - do NOT use real passwords</h2>
<form method='POST'>
User: <input type='text' name='loginusername' value='<?php echoPost("loginusername"); ?>' > <br>
Password: <input type='password' name='loginpassword' value='<?php echoPost("loginpassword"); ?>'> <br>
<input type='submit' name='choice' value='Log In'>
</form>
<h2><?php echo $message;?></h2>
<p>The username is <b>user</b> and the password is <b>password</b></p>
</body>
</html>
