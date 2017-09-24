<?php
session_start();

if(isset($_POST['submit'])){

$mypic = $_FILES['newupload']['name'];
$temp = $_FILES['newupload']['tmp_name'];
$type = $_FILES['newupload']['type'];

$regnum = $_SESSION['regnum'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newmobile = $_REQUEST['newmobile'];
$newgender = $_REQUEST['newgender'];
$newaddress = $_REQUEST['newaddress'];

if($newname && $newemail && $newmobile && $newgender && $newaddress ){

if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $newemail)){
		
		if(strlen($regnum)>4){
			if(strlen($newmobile)==10){
		
				mysql_connect("localhost", "root", "") or die("Problems with connection!");
				mysql_select_db("vep");

				mysql_query("UPDATE users SET name='$newname', email='$newemail', gender='$newgender', mobile='$newmobile', address='$newaddress' WHERE regnum='$regnum'");
			
			if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
			
				$dir = "profiles/".$_SESSION['regnum']."/images";
				$files = 0;
				$handle = opendir($dir);
				
					while(($file = readdir($handle)) != FALSE){
					
						if($file!="."&&$file!=".."&&$file!="Thumbs.db"){
							unlink($dir."/".$file);
							$files++;
						}
					
					}
					
					closedir($handle);
					sleep(1);
					rename("profiles/".$_SESSION['regnum']."", "profiles/$regnum");
					move_uploaded_file($temp, "profiles/$regnum/images/$mypic");
					
					echo "You values have been updated successfully!";
					header("Refresh:1; url=admin_profile.php");
			
			}else{
			
				echo "The picture has to be a jpeg, jpg o bmp file and have less than 10kb!";
			
			}
		}else{
			echo "Invalid Mobile Number";
		}

}else{

	echo "The password needs to be larger than 4 characters!";
}

}else{

echo "Please type a valid email!";

}

}else{

echo "Please complete the form!";

}

}else{

	echo "Access not allowed!";
	
}

?>