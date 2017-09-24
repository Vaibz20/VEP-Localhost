<?php

session_start();

if(!isset($_SESSION['regnum']) && !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$subject=$_POST['subject'];
$message=$_POST['message'];
	
	if($subject && $message)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s');
$attachment="NO";
mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from users where regnum='$regnum'");
$row=mysql_fetch_assoc($query);

	$name=$row['name'];
mysql_query("INSERT INTO discussion_forum(regnum,name,subject,message,tim,attachment) values('$regnum','$name','$subject','$message','$tim','$attachment')");

echo "Your Message Has Been Posted Successfully";
header("refresh:2, url=discussion.php");

}
else
{
	echo "No Fields Can Be Empty";
}

}
?>