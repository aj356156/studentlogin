<?php
include('connection.php');
SESSION_start();
SESSION_unset();
SESSION_destroy();
SESSION_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
header("location:signup.php");
?>