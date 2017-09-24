<?php

session_start();

if(!isset($_SESSION['regnum']) && !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$source=$_POST['source'];
$destination=$_POST['destination'];
$toj=$_POST['toj'];
$doj=$_POST['doj'];
$comment=$_POST['comment'];

	
	if($source && $destination && $toj && $doj &&$comment)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s');

mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from users where regnum='$regnum'");
$row=mysql_fetch_assoc($query);

	$name=$row['name'];
mysql_query("INSERT INTO cab_forum(regnum,name,source,destination,start_time,doj,comment,tim) values('$regnum','$name','$source','$destination','$toj','$doj','$comment','$tim')");

echo "Your Cab Details Have Been Posted Successfully";
header("refresh:1, url=forums.html");

}
else if($source && $destination && $toj && $doj)
{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s');

mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from users where regnum='$regnum'");
$row=mysql_fetch_assoc($query);

	$name=$row['name'];
mysql_query("INSERT INTO cab_forum(regnum,name,source,destination,start_time,doj,comment,tim) values('$regnum','$name','$source','$destination','$toj','$doj','','$tim')");

echo "Your Cab Details Have Been Posted Successfully";
header("refresh:1, url=forums.php");
}
else
{
	echo "Fields Marked with * Can't Be Empty";
}

}
?>