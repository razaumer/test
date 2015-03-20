<?php

include('config.php');
session_start();
$email=$_POST['email'];
$name=$_POST['name'];
$pass=$_POST['pass'];

		$query='INSERT INTO client(name,email,password) VALUES("'.$name.'","'.$email.'","'.$pass.'")';
		$result=mysql_query($query);
	
        header('location:pages/examples/login.html');
        ?>