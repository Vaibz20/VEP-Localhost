<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title> VIT EXCHANGE PORTAL </title>
<style type="text/css">


#body{
padding: 0px;
width: 100%;
height: 100%;

font-family: Georgia;
}


#header{
width: 100%;
height: 200px;
background: #1B4F72;
}

#header img {
position:absolute;
top:65px;

}

h1 {color: white;
 background-color: black;
 border: 3px solid white;}
 body {background-color: #1B4F72;
 font-family: "Georgia";
 color: "white";}
 
#wrapper{
width: auto;
height: auto;
margin: 100px auto;
}

#main{
height: 300px;
}

#footer{
height: 40px;
border-top: 15px solid grey;
text-align: center;
font-size: 20px;
color: white;
}

#wrapper #main img{
border: 1px solid gray;
height: auto;
margin-top: -90px;
width: auto;
float: left;
overflow: hidden;
position: relative;
}

#header #form{
margin-left: 550px;
margin-top:-50px;
color:white;
font-family:"Georgia";
font-size: 18px;
}


#header #nav{
margin-top: -10px;
margin-left: 500px;
}


#header #nav ul li{
list-style-type: none;
display: inline;
padding: 3px 8px 3px 8px;
background-color: black;
font-size: 21px;
font-family: "Georgia";
}

#header #nav a{
text-decoration: none;
color: white;
}

#header #nav ul li a:link{
color: white;
}


#header #nav ul li a:hover{
color: orange;
}

#header #nav ul li a:active{
color: red;
}



#wrapper #table1{
width: 700px;
height: 250px;
table-layout: fixed;
}

#wrapper #table1 td{
background: #D8D8D8;
font-size: 14px;
padding: 10px;
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-radius: 10px;
box-shadow: 0px 0px 10px #000;
-moz-box-shadow: 0px 0px 10px #000;
-webkit-box-shadow: 0px 0px 10px #000;
}

#wrapper #table1 td h3{
text-align: center;
font-family: "Georgia";
font-size: 20px;
}


 
</style>
</head>
<body>

<div id="header"> 
<h1> <center> WELCOME TO VIT EXCHANGE PORTAL!  </h1> 
<a href="index.php"> <img src="logo.jpg"> </a>
<div id="nav">
 <ul> 
	<li> <a href="forums.html" target="_blank"> Forums </a> </li>
	<li> <a href="about.html" target="_blank">  About Us </a> </li> 
	<li> <a href="help.html" target="_blank">  Help </a> </li>
	<li> <a href="contact.html" target="_blank">    Contact Us  </a> </li> <br />
	</ul>

<div id="form">
<form method="post" action="login.php">


<table>
<tr><td>Registration Number:  </td><td><input type="text" name="regnum" maxlength="20" /> </td></tr>
<tr><td>Password: </td><td><input type="password" name="password" maxlength="15" /> </td></tr>
<tr><td><p></td></tr>
<tr><td><input type="submit" name="submit" value="Login"/> </td></tr>
<tr><td><input type="reset" name="reset" /> </td></tr>
</table>
</form>
<p>
Not Registered Yet? <br />

<a href="reg.php">
   <input type="button" value="Register Here" />
</a> <br />
</div>
</div>
</div>	

<div id="wrapper">
<div id="main"> <img src="bac.png"/> </div>


<div id="footer"> &copy; VEP 2017 | All Rights Reserved </div>
</div>
</body>
</html>