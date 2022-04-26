<?php

function echoPost($name)
{
    if (isset($_POST[$name]))
    echo htmlspecialchars($_POST[$name]);
}

function echoSession($name) 
{
    if (isset($_SESSION[$name]))
    echo htmlspecialchars($_SESSION[$name]);
}

function checkcredentials($group="None Specificed")
{
    if ( !isset( $_SESSION['username'] ) )
    {
    header("Location: login.php");
    }
}

function logout_processing()
{
    session_destroy();

}



?>
