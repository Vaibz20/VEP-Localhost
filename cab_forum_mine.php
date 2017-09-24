<?php 
session_start();
include('session.php');
echo"<hr/>";
?>

<html>
<head>
<style type="text/css">
body{
	color: white;
}
</style>	
<body>
<center>
<h3> My Cabs To Share</h3>
</center>
<hr/>

<?php

if(!isset($_SESSION['regnum'])){
echo "ACCESS DENIED!";

}
else{

	$reg=$_SESSION['regnum'];
	$query= "SELECT * FROM cab_forum where regnum='$reg' ORDER BY cid desc";

	mysql_connect("localhost","root","");
	mysql_select_db("vep");
	$query=mysql_query($query);
	$num=mysql_num_rows($query);

	if($num > 0){
		echo "TOTAL Result(s): $num <br/>
		<p>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>CID</td><td>Regnum </td><td> Name</td><td> Source</td><td> Destination</td><td>Date of Journey</td><td>Time Of journey </td><td>Comment </td><td>Mobile Number </td><td>Email ID</td><td>TimeStamp</td><td>Options(s)</td></tr></b>";
		while($row=mysql_fetch_assoc($query)){
			$cid=$row['cid'];
			$toj=$row['start_time'];
			$comment=$row['comment'];
			$name=$row['name'];
			$tim=$row['tim'];
			$regnum=$row['regnum'];
			$query2=mysql_query("SELECT mobile,email from users where regnum='$regnum'");
			$row2=mysql_fetch_assoc($query2);
			$email=$row2['email'];
			$mobile=$row2['mobile'];
			$source=$row['source'];
			$destination=$row['destination'];
			$doj=$row['doj'];
			
			echo"
			<tr><td>$cid</td><td>$regnum </td><td> $name</td><td> $source</td><td> $destination</td><td>$doj </td><td>$toj </td><td>$comment </td><td>$mobile </td><td>$email</td><td>$tim</td><td><a href='cab_forum_mine_delete.php?cid=$cid'>DELETE</a></td></tr>";


		}

	echo"</table><hr/>";
	}
	else{
		echo "NO Results Found";

	}

	mysql_close();

	}

?>

</body>
<p><a href="enter.php"> Click here to go to your Home Page </a>
</head>
</html>


