
<?php
session_start();
include("session.php");
echo "<hr/>";
mysql_connect("localhost","root","") or die("Problem with connection");
mysql_select_db("vep");
$cid=$_REQUEST['cid'];
$result=mysql_query("DELETE FROM cab_forum WHERE cid='$cid'");

echo "<br/>The Cab Details has been deleted successfully";
header("refresh:1, url=cab_forum_mine.php");
mysql_close();

?>
