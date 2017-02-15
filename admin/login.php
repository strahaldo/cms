<?php

require '../app/main.php';


session_start();

if(isset($_SESSION['user'])!="")
{
 header("Location: start.php");
}
if(isset($_POST['submit']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM login WHERE username='$username'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['id'];
  header("Location: start.php");
 }
 else
 {
  echo "Wrong";
 }
 
}


require VIEW_ROOT . '/admin/login.php';