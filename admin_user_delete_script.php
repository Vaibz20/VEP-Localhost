
<?php
session_start();
include("session.php");
echo "<hr/>";
mysql_connect("localhost","root","") or die("Problem with connection");
mysql_select_db("vep");
$regnum=$_REQUEST['regnum'];
$result=mysql_query("DELETE FROM users WHERE regnum='$regnum'");

echo "<br/>The User has been deleted successfully";
header("refresh:1, url=admin_view_all_users.php");
mysql_close();

?>
