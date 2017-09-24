<?php

session_start();
include("session.php");
echo "<hr/>";
if(!isset($_SESSION['regnum']) or !isset($_POST['submit']))
{
	echo "ACCESS DENIED!";
}
else{

$place=$_POST['place'];
$rating = $_POST['rating'];
$comment=$_POST['comment'];
$attachment='NO';

	
	if($place && $rating &&$comment)
	{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s',time()+(3.5*3600));

mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from users where regnum='$regnum'");
$row=mysql_fetch_assoc($query);

	$name=$row['name'];
mysql_query("INSERT INTO review_exchange(regnum,name,place,rating,comment,tim,attachment) values('$regnum','$name','$place','$rating','$comment','$tim','$attachment')");

echo "Your Reviews About \"".$place."\" Have Been Posted Successfully";
header("refresh:1, url=reviewsexc.php");

}
else if($place && $rating)
{
$regnum=$_SESSION['regnum'];
$tim=date('Y-m-d H:i:s',time()+(3.5*3600));

mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from users where regnum='$regnum'");
$row=mysql_fetch_assoc($query);

	$name=$row['name'];

mysql_query("INSERT INTO review_exchange(regnum,name,place,rating,tim,attachment) values('$regnum','$name','$place','$rating','$tim','$attachment')");

echo "Your Reviews About \"".$place."\" Have Been Posted Successfully";
header("refresh:1, url=reviewsexc.php");
}
else
{
	echo "Fields Marked with * Can't Be Empty";
}

}

mysql_close();
?>