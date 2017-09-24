<html>
<head>
<title> VIT EXCHANGE PORTAL </title>
<style type="text/css">
<!--- <link rel="stylesheet" type="text/css" href="style.css" /> --->
 h2 {color: white;
 background-color: black;
 border: 3px solid white;}
  body {background-color: #1B4F72;
 
color: white;
font-family: Georgia;
font-size: 25px;
}
 a:link {font-size:20px;
 text-decoration: none;}
 a:visited {color: white;}
 a:hover {color: blue;
 text-decoration: underline;
 font-size: 30px;}
 
 span { font-size: 30px;
 color: red;}
 
body {
    position: relative;
    background-image: url("tt1.png");
    background-repeat:no-repeat;
    background-size:100% 100vh;

}
 
 
#r{
margin:auto;
centered content;
width: 35%;
align: center;
border: 3px solid white;
font-weight:bold;}

#footer{
height: 40px;
border-top: 15px solid grey;
text-align: center;
font-size: 20px;
color: white;
}

#l{
	text-align: center;
}
 
 
 td{
	 padding: 5px;
 }
 
</style>
</head>
<body>
<h2> <center> Registration Form  </h2> <br />
<div id="r">
<form enctype="multipart/form-data" method="post" action="insert.php">


<table > 
<b>
<tr><td>Reg Number:  </td><td><input type="text" name="regnum" maxlength="9" /></td></tr>
<tr><td>Name: </td><td><input type="text" name="name"  maxlength="20"/></td></tr>
<tr><td>Gender:  </td><td>
<input type="radio" name="gender" value="male" /> Male 
<input type="radio" name="gender" value="female" /> Female </td></tr>
<tr><td>Address: </td><td><input type="text" name="address"  maxlength="100"/></td></tr>
<tr><td>Email: </td><td><input type="text" name="email"  maxlength="50"/></td></tr>
<tr><td>Mobile Number: </td><td><input type="text" name="mobile"  maxlength="10"/></td></tr>
<tr><td>Password: </td><td><input type="password" name="password" maxlength="15" /></td></tr>
<tr><td>Confirm Password: </td><td><input type="password" name="confirmpassword" maxlength="15" /></td></tr><br/>
</table>
<table >
<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
<tr><td>Choose your picture: <input type="file" name="upload"></td></tr> </b>
<tr><td><p></td></tr>
<tr><td><input type="submit" value="Submit"/> </td></tr>
<tr><td><input type="reset" name="reset" /> </td></tr>
</table></b>
</form>
</div>
<div id="l">
<a href="index.php"> Click here to go to Homepage </a>
</div>



</body>
</html>