<?php
include('config.php');
$comments=$_POST['comments'];
$id_user=$_SESSION['id_user'];
$query=mysql_query('INSERT INTO comments(id_ticket,id_user,comment_text,date_add) VALUES("'.$id_user.'",)')

?>

