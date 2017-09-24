<?php 
session_start();

if(!($_SESSION['regnum']=='admin@vep' && isset($_SESSION['regnum']))){
echo "ACCESS DENIED!";

}
else{
include('session.php');
echo"<hr/>";
echo "
<html>
<head>
	
<body>
<center>
<h3> Please Fill The Following Form To Search Cab.</h3>

<form method='GET' action='admin_cab_search.php'>

<table>
<tr><td>Source (lower case)*: </td><td><input type='text' name='source' style='text-transform:lowercase' /></td></tr>
<tr><td>Destination (lower case)*: </td><td><input type='text' name='destination' style='text-transform:lowercase'/></td></tr>
<tr><td>Date Of jounery*: </td><td><input type='date' name='doj'/></td></tr>
<tr><td><br/></td></tr>
<tr><td><input type='submit' name='submit' value='search'></td></tr>


</table>

</form>
<p>Note: Fields Marked with * are Mandatory.
</center>
<hr/>
";





if(isset($_REQUEST['source']) && isset($_REQUEST['destination']) && isset($_REQUEST['doj']))
{

	$source=$_GET['source'];
	$destination=$_GET['destination'];
	$doj=$_GET['doj'];
	

	$query= "SELECT * FROM cab_forum WHERE source='$source' and destination='$destination' and doj='$doj' ORDER BY cid desc";

	mysql_connect("localhost","root","");
	mysql_select_db("vep");
	$query=mysql_query($query);
	$num=mysql_num_rows($query);

	if($num > 0){
		echo "$num Result(s) found for Source: \"$source\" || Destination: \"$destination\" || Date Of Journey: \"$doj\"<br/>
		<p>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>Regnum </td><td> Name</td><td>Time Of journey </td><td>Comment </td><td>Mobile Number </td><td>Email ID</td></tr></b>";
		while($row=mysql_fetch_assoc($query)){
			
			$toj=$row['start_time'];
			$comment=$row['comment'];
			$name=$row['name'];
			$regnum=$row['regnum'];
			$query2=mysql_query("SELECT mobile,email from users where regnum='$regnum'");
			$row2=mysql_fetch_assoc($query2);
			$email=$row2['email'];
			$mobile=$row2['mobile'];
			
			echo"
			
			<tr><td>$regnum </td><td> $name</td><td>$toj </td><td>$comment </td><td>$mobile </td><td>$email</td></tr>";


		}}
	else{
		echo "NO Results Found";

	}

	mysql_close();

	}


else
{echo "No Search Value can be empty";}
echo"</table><hr/><center><h3>";


echo "</h3></center>";
}
?>

</body>

</head>
<a href="admin_enter.php"> Click here to go to your Home Page </a>
</html>
