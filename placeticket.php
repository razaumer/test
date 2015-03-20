<?php

//ticket form submission....
include('config.php');
//$error;
session_start();
$subject=$_POST['subject'];
$body=$_POST['body'];
$types=$_POST['types'];
$comments=$_POST['comments'];
$date_add=$_POST['date_add'];
//if(validate()=='true')
	$query='INSERT INTO ticket(id_user,subject,body,type,comments,date_add) VALUES('.$_SESSION['id_user'].',"'.$subject.'","'.$body.'","'.$types.'","'.$comments.'","'.date('Y-m-d').'")';
	$result=mysql_query($query);
   //     else
    //    {
    //        $session['error']=validate()
     //               redirect;
     //   }
           
      
        header('location:index.php');
/*function validate()
{
    global $error; 
    if(strlen($_POST['body'])<15)
     return "Body must be of 15 characters or more ";
    
    return 'true'
    
}*/
?>