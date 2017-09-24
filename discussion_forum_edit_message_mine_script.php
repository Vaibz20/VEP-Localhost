<?php

session_start();
if(!isset($_POST['submit']) || !isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED";
}

else
{
	$subject=$_POST['newsubject'];
	$message=$_POST['newmessage'];
	$mid=$_REQUEST['mid'];
	if($subject && $message)
	{
		mysql_connect("localhost","root","") or die("Problem With Connection");
		mysql_select_db("vep");
		mysql_query("UPDATE discussion_forum set subject='$subject',message='$message' where mid='$mid' ");
		
		echo "Your Message Has Been Updated And Posted Successfully";
		header("refresh:1, url=discussion_forum_mine.php");


	}
	else
	{
		echo "No Fiels Can Be Empty";
	}


}

?>