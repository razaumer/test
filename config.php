<?php
error_reporting(0);
// ------------------------------------- server configuration -------------------------------------
$host ='localhost';
$db = 'project_management';
$user = 'root';
$conn  = mysql_connect($host,$user) or die('server information is not correct');
mysql_select_db($db,$conn) or die('database info not correct');
//=====================================End Server Configuration========================================
session_start();

if($_SESSION['loggedin']!=1 )
{
header('location:/project_management/pages/examples/login.html');
exit();
}


?>