<?php

session_start();

if($_POST)
{
	$_SESSION['regnum'] = $_POST['regnum'];
	$_SESSION['password']=$_POST['password'];
	if($_SESSION['regnum']=="admin@vep")
	{
		header("location: admin_login.php");
	}

	else
	{
		
		$_SESSION['password']=md5($_POST['password']);

		if($_SESSION['regnum'] && $_SESSION['password'])
		{ 

			mysql_connect("localhost","root","");
			mysql_select_db("vep");

			$query=mysql_query("SELECT * from users where regnum='".$_SESSION['regnum']."'");
			$numrows=mysql_num_rows($query);

			if($numrows)
			{
				while($row=mysql_fetch_assoc($query))
				{
					
					$dbname=$row['regnum'];
					$dbpassword=$row['password'];

					if($_SESSION['regnum']==$dbname && $_SESSION['password']==$dbpassword)
					{
						break;
					}

				}
				if($_SESSION['regnum']==$dbname)
				{
					if($_SESSION['password']==$dbpassword)
					{
						
						header("location: enter.php");

					}
					else
					{
						echo "<b>ERROR:<b> Wrong Password!";
					}
				}
				else
				{
					echo "<b>ERROR:<b> Wrong Registration Number!";
				}
			}
			else
			{
				echo "<b>ERROR:<b> User is NOT Registered!";
			}
		}

		else
		{
			echo "<b>ERROR:<b> No Fiels Can be Empty";
		}
	}
}	
else
{
	echo "<b>ERROR:<b> Access Denied!";
	
}
	
?>