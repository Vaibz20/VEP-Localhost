<?php
session_start();
include("session.php");
echo "<hr/>";
mysql_connect("localhost","root","") or die("Problem with connection");
mysql_select_db("vep");
$mid=$_REQUEST['mid'];
$result=mysql_query("DELETE FROM discussion_forum WHERE mid='$mid'");

echo "<br/>The Message has been deleted successfully";
header("refresh:1, url=admin_view_discussion.php");
mysql_close();

?>
