
<?php
session_start();
include("session.php");
echo "<hr/>";
mysql_connect("localhost","root","") or die("Problem with connection");
mysql_select_db("vep");
$rid=$_REQUEST['rid'];
$result=mysql_query("DELETE FROM review_exchange WHERE rid='$rid'");

echo "<br/>The Review has been deleted successfully";
header("refresh:1, url=review_forum_mine.php");
mysql_close();

?>
