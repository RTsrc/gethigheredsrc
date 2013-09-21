<?php session_start();
include 'common.php';
include 'db.php';
dbConnect("higherdb");
$email=$_POST['username'];
$newpw=$_POST['password'];
$_SESSION['newpw']=$newpw;
$_SESSION['sessname']=$email;
function my_openssl_random_pseudo_bytes($n){
    $ret='';
    while($n--)
        $ret.=chr(rand(0,255));
    return $ret;
}
$key=strtr(base64_encode(my_openssl_random_pseudo_bytes(9)),'+/=','-_,');
$urlencode_email=urlencode($_POST['username']);
mail($email,'Password Reset',<<<EOD
Click the link below to reset your password
http://gethighered.ca/pwreset.php?email=$urlencode_email&key=$key
- Highered team
EOD
,"From: Highered team <support@gethighered.ca>\r\nReply-To: Highered team <support@gethighered.ca>\r\n");
?>

<html lang="en"><!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]--><!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]--><!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]--><!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]--><!--[if gt IE 9]><!-->
<head>
<META HTTP-EQUIV=Refresh CONTENT="5; URL=index.php">
</head>
<body bgcolor="#333333">&nbsp;</body>
</html>
<title>Higher - Getting Started</title>
<link href="../favicon.ico" rel="shortcut icon" />
<script src="jquery-1.10.1.js"></script>
<style type="text/css">

#home{
    z-index:-5;
    left: 400px;
	top: -200px;
}

#banner{
background:url("hibanner.png"); 
background-repeat: no-repeat;
float:left; 
width: 18%; 
height: 105%; 
position: fixed; 
top:-1.5%;
left: 9%;
z-index:200;
}

body
{
background-size:100%;
background-position:top;
overflow-x: hidden;
overflow-y: scroll;
}

#header{
	float: left;
	left: 8.5%;
    position: absolute;
    z-index: 2000;
    width: 18%;
    top: 7%;
}

#header h1{
    font-size: 30px;
    font-weight: 400;
    text-transform: uppercase;
    color: rgba(255,255,255,0.9);
    text-shadow: 0px 1px 1px rgba(0,0,0,0.3);
    padding: 20px;
    background: #000;
}
#links {
	position:absolute;
	bottom:5%;
	left:200;
	z-index:20;
	width:1500px;
	}

#navigation {
    margin-top: 20px;
    width: 235px;
    display:block;
    list-style:none;
    z-index:3;
}
#navigation a{
    color: #444;
    display: block;
    background: #fff;
    background: rgba(255,255,255,0.9);
    line-height: 50px;
    text-transform: uppercase;
    margin-bottom: 6px;
    box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    font-size: 14px;
}

#navigation a:hover {
    background: #ddd;
}

a:link {text-decoration:none;}    /* unvisited link */
a:visited {text-decoration:none;} /* visited link */
a:hover {text-decoration:underline;}   /* mouse over link */
a:active {text-decoration:underline;}  /* selected link */
#home:target ~ #header #navigation #link-home,
#portfolio:target ~ #header #navigation #link-portfolio,
#about:target ~ #header #navigation #link-about,
#contact:target ~ #header #navigation #link-contact{
}

/* To change footer */
#footer {
    background: none;
    padding-top: 10px;
    padding-bottom:20px;
	margin-top: 40px;  
    color: #e4cca9;   
    font-size: 12px; 
    font-family: Arial;
    font-weight: normal;
    text-align: center;
    text-decoration: none;
    margin: 30 -100;
    position: absolute;
    bottom: -170px;
    left: 650px;
}

#link {
    text-decoration: none;
    color: #e4cca9;
}

div#footer a {
    font-family: Arial Narrow;
	color: #e4cca8;
}

#notebook {
	background: url("clipboard.png");
	background-size: 100% 100%;
	background-repeat: no-repeat;
	position: absolute;
	float: right;
	right: -5%;
    width: 100%;
	height: 90%;
	top: 3%;
	z-index: -2;
}

#content {
    position: absolute;
    height: 59%;
    width: 45%;
    font-family: Arial;
    font-size: 15px;
    color: #333333;
    overflow: auto;
	overflow-x: hidden;
    top: 22%;
    left: 42%;
    margin-right: 5%;
    z-index: 10;
}


/* Scrollbar */
::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
	background:rgba(255,255,255, 0.8);
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(51,51,51,0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
/*Scroll Bar */


h2 {
	position: absolute;
	font-family: Mission Script;
	font-size: 70px;
    color: #333333;
	float: right;
	margin-top: 4%;
	right: 32%;
	width: 350px;
}

#footer {  
    padding-top: 10px;
    margin-top: 40px;  
    color: #e4cca9;   
    font-size: 12px; 
    font-family: Arial Narrow;
    font-weight: normal;
    text-align: center;
    text-decoration: none;
    margin: 30 -100;
    position: absolute;
    bottom: -16%;
    left: 60%;
}

label {
  float:left;
  clear: left;
  width:150px;
  display: inline-block;
  text-align:right;
  }

fieldset {
	border: 2px solid #333333;
	padding: 10px 30px 10px 20px;
    position: relative;
    bottom: 10px
    top: 10px
}

@font-face{
 font-family: Mission Script;
 src: url('Mission Script.ttf') format('opentype');
}

</style>
<!--Notebook and Title-->
<div id="content1">
	<div id="content">

            <h4>Password Reset!</h4>

            <p id="text1">
            Redirecting you back to the home page...<br>
            Please check your email for a password reset link <br>
            (If you are unable to find it, please check your spam folder.)
            </p>
        </div>
<div id="notebook">&nbsp;</div>

</script>

<!-- Header with Navigation -->

</script>
</html>