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
   $username=mysql_real_escape_string($_POST['username']);
   $password=mysql_real_escape_string($_POST['password']);
   $query ="SELECT * FROM client where `email` ='$username' && `password` = '$password'";
    $result = mysql_query($query);
    $row  = mysql_fetch_array($result);


if (!empty($row)) {
// Set username session variable
    
$_SESSION['id_user']=$row['id_user'];
$_SESSION['email']=$row['name'];
$_SESSION['loggedin'] = 1;
// Jump to secured page

header('location:index.php');
}
else {	

// Jump to login page
header('location:pages/examples/404.html');
}
?>