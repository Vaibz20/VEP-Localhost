<?php 
session_start();
include('session.php');
echo"<hr/>";
?>

<html>
<head>
	
<body>
<center>
<h3> All Cabs To Share</h3>
</center>
<hr/>

<?php

if(!isset($_SESSION['regnum'])){
echo "ACCESS DENIED!";

}
else{


	$query= "SELECT * FROM cab_forum ORDER BY cid desc";

	mysql_connect("localhost","root","");
	mysql_select_db("vep");
	$query=mysql_query($query);
	$num=mysql_num_rows($query);

	if($num > 0){
		echo "TOTAL Result(s): $num <br/>
		<p>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>CID</td><td>Regnum </td><td> Name</td><td> Source</td><td> Destination</td><td>Time Of journey </td><td>Comment </td><td>Mobile Number </td><td>Email ID</td><td>TimeStamp</td><td>Options(s)</td></tr></b>";
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
			
			echo"
			<tr><td>$cid</td><td>$regnum </td><td> $name</td><td> $source</td><td> $destination</td><td>$toj </td><td>$comment </td><td>$mobile </td><td>$email</td><td>$tim</td><td><a href='admin_cab_delete.php?cid=$cid'>DELETE</a></td></tr>";


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
<a href="admin_enter.php"> Click here to go to your Home Page </a>
</head>
</html>


