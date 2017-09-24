<?php
session_start();

if(!isset($_SESSION['regnum']))
{
	echo "ACCESS DENIED!";
}
else{

$mid=$_REQUEST['mid'];

mysql_connect("localhost","root","");
mysql_select_db("vep");

$query=mysql_query("SELECT * from discussion_forum where mid='$mid'");
$row=mysql_fetch_assoc($query);
$name=$row['name'];
$subject=$row['subject'];
$message=$row['message'];
$tim=$row['tim'];
$attachment=$row['attachment'];

echo"

<form  method=\"post\" action=\"discussion_forum_edit_message_mine_script.php\"> 
<table border='0' width='25%'>
<tr><td >Subject: </td> <td><textarea type='text' name='newsubject' cols='30' rows='1' />".$subject."</textarea></td></tr>
<tr><td >Message: </td> <td><textarea type='text' name='newmessage' cols='30' rows='3' >".$message."</textarea></td></tr>
</table><p>

<input type='submit' name='submit' value='Save & Post'/>
<input type='hidden' name='mid' value='".$mid."'/>
</form>
";



}


?>