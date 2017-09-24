<?php

session_start();
include("session.php");
echo "<hr/>";

if(!isset($_SESSION['regnum']) && !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$subject=$_POST['subject'];
$feedback=$_POST['feedback'];
	
	if($subject && $feedback)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s');

mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from users where regnum='$regnum'");
$row=mysql_fetch_assoc($query);

$name=$row['name'];
mysql_query("INSERT INTO feedback(regnum,name,subject,comment,tim) values('$regnum','$name','$subject','$feedback','$tim')");

echo "Your Feedback Has Been Posted Successfully. <br/> Thank You for Showing Your Interest in Us.";
header("refresh:1, url=enter.php");

}
else
{
	echo "No Fields Can Be Empty";
}

}
?>