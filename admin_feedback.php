<?php 
session_start();

if(!($_SESSION['regnum']=='admin@vep' && isset($_SESSION['regnum']))){
echo "ACCESS DENIED!";

}
else
{
include('session.php');
echo"<hr/>";


	$query= "SELECT * FROM  feedback ORDER BY fid desc";

	mysql_connect("localhost","root","");
	mysql_select_db("vep");
	$query=mysql_query($query);
	$num=mysql_num_rows($query);
	
		echo "<center><h2>ALL FEEDBACKS</h2></center><p>TOTAL Feedback(s): $num<br/>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>fid</td><td>Regnum </td><td> Name</td><td>Subject </td><td>Feedback </td><td>Time</td></tr></b><p>";
		while($row=mysql_fetch_array($query)){
			$fid=$row['fid'];
			$regnum1=$row['regnum'];
			$name=$row['name'];
			$subject=$row['subject'];
			$comment=$row['comment'];
			$time= $row['tim'];

			echo "<tr><td>$fid</td><td>$regnum1 </td><td> $name</td><td>$subject</td><td>$comment </td><td>$time</td></tr>";
		}
		echo "</table><p>";
	
}

?>

<a href="admin_enter.php"> Click here to go to your Home Page </a>
</body>

</head>
</html>