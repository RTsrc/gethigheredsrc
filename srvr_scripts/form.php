<html>
<head>
<title> Application Form </title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />  
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="jquery.ba-hashchange.min.js"></script>
<script src="formToWizard.js"></script>
<script src="jquery.validate.min.js"></script>
<script src="additional-methods.min.js"></script>
<style>
	/*from jankoatwarpspeed.com*/
	.prev, .next { background-color:#b23; padding:5px 10px; color:#fff; text-decoration:none;}
	.prev:hover, .next:hover { background-color:#000; text-decoration:none;}
	.prev { float:left;}
	.next { float:right;}
	#steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
	#steps li {font-size:24px; float:left; padding:10px; color:#bbb;}
	#steps li span {font-size:11px; display:block;}
	#steps li.current { color:#000;}
</style>
</head>
<body>
<div id="main"> 
	<div class="container">  
 		<div id="header">  
        	<div id="logo"> 
            	<a href="index.html" title="Home Page" id="link-logo">JobMiner</a></div>   
            <div id="tagline">
            </div> 
            <div style="clear:both"></div>  
 		</div><!--end header -->  
 
		<div id="content">  
        
<body>
<form action="genapp2.php" method="post" id="myform">
<fieldset>
<legend>CONTACT INFO</legend>
<div class="input-holder"><label for="lname" class= "left">Last Name:</label>&nbsp;<input type="text" name="lname" id="lname" maxlength="20" required></div>
<div class="input-holder"><label for="mname" class= "left">Middle Name:</label>&nbsp;<input type="text" name="mname" id="mname" maxlength="20"></div>
<div class="input-holder"><label for="fname" class= "left">First Name:</label>&nbsp;<input type="text" name="fname" id="fname"maxlength="20" required></div>
<div class="input-holder"><label for="email" class= "left">Email:</label>&nbsp;<input type="email" name="email" id="email"maxlength="30" required></div>
<div class="input-holder">
	<span class="input-elt"><label for="pnum" class= "left">Home Phone Number:</label>&nbsp;<input type="phoneUS" name="pnum" id="pnum"></span>
	<span class="input-elt"><label for="pnum2" class= "left">Work Phone Number:</label>&nbsp;<input type="phoneUS" name="pnum2" id="pnum2"></span>
</div>
<div class="input-holder"><label for="address" class= "left">Address:</label>&nbsp;<input type="text" name="address" id="address"></div>
<div class="input-holder"><label for="address2" class= "left">Unit/Apartment Number:</label>&nbsp;<input type="text" name="address2" id="address2"><div>
<div class="input-holder"><label for="city" class= "left">City:</label>&nbsp;<input type="text" name="city" id="city"maxlength="20"></div>
<div class="input-holder"><label for="prov" class= "left">Province:</label>&nbsp;<input type="text" name="prov" id="prov" maxlength="2"></div> 
<div class="input-holder"><label for="pcode" class= "left">Postal Code:</label>&nbsp;<input type="zipcodeCA" name="pcode" id="pcode"></div> 
<br/>
<br/>
<strong>Emergency Contact </strong>
<br/>
<br/>
<div class="input-holder"><label for="elname" class= "left">Last Name:</label>&nbsp;<input type="text" name="elname" id="elname" maxlength="20"></div>
<div class="input-holder"><label for="efname" class= "left">First Name:</label>&nbsp;<input type="text" name="efname" id="efname"maxlength="20"></div>
<div class="input-holder"><label for="epnum" class= "left">Phone Number:</label>&nbsp;<input type="phoneUS" name="epnum" id="epnum"></div>
</fieldset>
<br/>
<fieldset>
<legend>WORK EXPERIENCE:</legend>
<strong><br>Job #1: <br></strong>
<div class="input-holder"><label for="company1" class= "left">Worked at:</label>&nbsp;<input type="text" name="company">  &nbsp; from <input type="text" name="yrstart1" class="worked"> &nbsp; to <input type="text" name="yrend1" id="yrend1" class="worked"></div>
<div class="input-holder"><label for="title" class= "left">Job Title:</label>&nbsp;<input type="text" name="title" id="title"></div>
<div class="input-holder"><label for="jduty" class= "left">Job Duties:</label>&nbsp;<input type="text" name="jduty" id="jduty"></div>
<div class="input-holder"><label for="caddr" class= "left">Company address:</label>&nbsp;<input type="text" name="caddr" id="caddr"></div>
<div class="input-holder">
	<span class="input-elt"><label for="boss" class= "left">Name and Title of Supervisor:</label>&nbsp;<input type="text" name="boss" id="boss"></span>
	<span class="input-elt"><label for="bnum" class= "left">Phone #</label>&nbsp;<input type="phoneUS" name="bnum" id="bnum"></span>
</div>
<br/>
<p>May we contact him/her? &nbsp; &nbsp;
<label for="contact1-0">Yes</label><input type="radio" name="contact1" value=0  id="contact1-0"> 
<label for="contact1-1">No</label><input type="radio"  name="contact1"  value=1  id="contact1-1"></p> <br>
<div class="input-holder"><label for="go" class= "left">Reason for Leaving:</label>&nbsp;<input type="text" name="go" id="go"></div>
<div class="input-holder"><label for="pay" class= "left">Earnings (per hour):</label>&nbsp;<input type="text" name="pay" id="pay"></div>
<div class="input-holder"><label for="ctype" class= "left">Type of Business:</label>&nbsp;<input type="text" name="ctype" id="ctype"></div>

<strong><br>Job #2: <br></strong>
<div class="input-holder"><label for="company2" class= "left"> Worked at: </label>&nbsp;<input type="text" name="company2"> &nbsp; from <input type="text" name="yrstart2" class="worked">&nbsp; to <input type="text" name="yrend2" id="yrend2" class="worked"></div>
<div class="input-holder"><label for="title2" class= "left">Job Title:</label>&nbsp;<input type="text" name="title2" id="title2"></div>
<div class="input-holder"><label for="jduty2" class= "left">Job Duties:</label>&nbsp;<input type="text" name="jduty2" id="jduty2"></div>
<div class="input-holder"><label for="caddr2" class= "left">Company address:</label>&nbsp;<input type="text" name="caddr2" id="caddr2"></div>
<div class="input-holder">
	<span class="input-elt"><label for="boss2" class= "left">Name and Title of Supervisor:</label>&nbsp;<input type="text" name="boss2"></span>
	<span class="input-elt"><label for="bnum2" class= "left">Phone #</label>&nbsp;<input type="phoneUS" name="bnum2" id="bnum2"></span>
</div>
<br/>
<br/>
<p>
May we contact him/her?
<label for="contact2-0">Yes</label><input type="radio" name="contact2" value=0  id="contact2-0"> 
<label for="contact2-1">No</label><input type="radio"  name="contact2"  value=1  id="contact2-1"></p> <br>
<div class="input-holder"><label for="go2" class= "left"> Reason for Leaving: </label>&nbsp;<input type="text" name="go2" id="go2"></div>
<div class="input-holder"><label for="pay2" class= "left"> Earnings (in $/hour): </label>&nbsp;<input type="decimal" name="pay2" id="pay2"></div>
<div class="input-holder"><label for="ctype2" class= "left"> Type of Business: </label>&nbsp;<input type="text" name="ctype2" id="ctype2"></div>
<strong><br>Job #3: <br></strong>
<div class="input-holder"><label for="company3" class= "left">Worked at:</label>&nbsp;<input type="text" name="company3"> &nbsp; from <input type="text" name="yrstart3" class="worked"> &nbsp; to <input type="text" name="yrend3" id="yrend3" class="worked"></div>
<div class="input-holder"><label for="title3" class= "left">Job Title:</label>&nbsp;<input type="text" name="title3" id="title3"></div>
<div class="input-holder"><label for="jduty3" class= "left">Job Duties:</label>&nbsp;<input type="text" name="jduty3" id="jduty3"></div>
<div class="input-holder"><label for="caddr3" class= "left">Company address:</label>&nbsp;<input type="text" name="caddr3" id="caddr3"></div>
<div class="input-holder">
	<span class="input-elt"><label for="boss3" class= "left">Name and Title of Supervisor: </label>&nbsp;<input type="text" name="boss3"></span>
	<span class="input-elt"><label for="bnum3" class= "left">Phone #</label>&nbsp;<input type="phoneUS" name="bnum3" id="bnum3"></div> 
<br/>
<br/>
<p>May we contact him/her?
<label for="contact3-0">Yes</label><input type="radio" name="contact3" value=0  id="contact3-0"> 
<label for="contact3-1">No</label><input type="radio"  name="contact3"  value=1  id="contact3-1"></p> <br>
<div class="input-holder"><label for="go3" class= "left">Reason for Leaving:</label>&nbsp;<input type="text" name="go3" id="go3"></div>
<div class="input-holder"><label for="pay3" class= "left">Earnings (per hour):</label>&nbsp;<input type="text" name="pay3" id="pay3"></div>
<div class="input-holder"><label for="ctype3" class= "left">Type of Business:</label>&nbsp;<input type="text" name="ctype3" id="ctype3"></div>
</fieldset>
<br/>
<fieldset>
<legend>EDUCATION:</legend>
<div class="input-holder"><label for="school" class= "left">High School:</label>&nbsp;<input type="text" name="school" id="school"></div> <br/>
<div class="input-holder"><label for="hiloc" class= "left">Location:</label>&nbsp;<input type="text" name="hiloc" id="hiloc"></div> <br/>
<div class="input-holder">
	<span class="input-elt"><label for="syrstrt" class= "left">Start Date:</label>&nbsp;<input type="date" name="syrstrt"></span>
	<span class="input-elt"><label for="syrend" class= "left">End Date:</label>&nbsp;<input type="date" name="syrend" id="syrend"></span>
</div>
<br/>
<p>Did you graduate? 
<label for="grad-0">Yes</label><input type="radio" name="grad" value=0  id="grad-0"> 
<label for="grad-1">No</label><input type="radio"  name="grad"  value=1  id="grad-1"></p> <br>
<div class="input-holder"><label for="uni" class= "left">University/Other:</label>&nbsp;<input type="text" name="uni" id="uni"></div> <br/>
<div class="input-holder"><label for="major" class= "left">Major:</label>&nbsp;<input type="text" name="major" id="major"></div> <br/>
<div class="input-holder"><label for="uniloc" class= "left">Location:</label>&nbsp;<input type="text" name="uniloc" id="uniloc"></div>
<div class="input-holder"><label for="hilvl" class= "left">Highest Level Attained:</label>&nbsp;<input type="text" name="hilvl" id="hilvl"></div> 
<div class="input-holder">
	<span class="input-elt"><label for="uyrstrt" class= "left">Start Date:</label>&nbsp;<input type="date" name="uyrstrt"></span>
	<span class="input-elt"><label for="uyrend" class= "left">End Date:</label>&nbsp;<input type="date" name="uyrend" id="uyrend"></span>
</div>
<br/>
<p>Did you graduate?
<label for="grad2-0">Yes</label><input type="radio" name="grad2" value=0  id="grad2-0"> 
<label for="grad2-1">No</label><input type="radio"  name="grad2"  value=1  id="grad2-1"> </p>
</fieldset>
<br>
<fieldset>
<legend> REFERENCES </legend>
<br><strong>Reference #1:</strong><br>
<div class="input-holder"><label for="ref1" class= "left">Name:</label>&nbsp;<input type="text" name="ref1" id="ref1"></div>
<div class="input-holder"><label for="rnum1" class= "left">Phone Number:</label>&nbsp;<input type="phoneUS" name="rnum1" id="rnum1" maxlength="15"></div>
<div class="input-holder"><label for="raddr" class= "left">Address:</label>&nbsp;<input type="text" name="raddr" id="raddr"></div>
<div class="input-holder"><label for="yrsknown" class= "left">Number of Years Known For:</label>&nbsp;<input type="decimal" name="yrsknown" id="yrsknown"></div> <br>
<div class="input-holder"><label for="deal1" class= "left">Relationship:</label>&nbsp;<input type="text" name="deal1" id="deal1"></div>
<div class="input-holder"><label for="rjob" class= "left">Job Title:</label>&nbsp;<input type="text" name="rjob" id="rjob"></div>
<br><strong>Reference #2:</strong><br>
<div class="input-holder"><label for="ref2" class= "left">Name:</label>&nbsp;<input type="text" name="ref2" id="ref2"></div>
<div class="input-holder"><label for="rnum2" class= "left">Phone Number:</label>&nbsp;<input type="phoneUS" name="rnum2" id="rnum2"maxlength="15"></div>
<div class="input-holder"><label for="raddr2" class= "left">Address:</label>&nbsp;<input type="text" name="raddr2" id="raddr2"></div>
<div class="input-holder"><label for="yrsknown2" class= "left">Number of Years Known For:</label>&nbsp;<input type="decimal" name="yrsknown2" id="yrsknown2"></div> <br>
<div class="input-holder"><label for="deal2" class= "left">Relationship:</label>&nbsp;<input type="text" name="deal2" id="deal2"></div>
<div class="input-holder"><label for="rjob2" class= "left">Job Title:</label>&nbsp;<input type="text" name="rjob2" id="rjob2"></div>
<br><strong>Reference #3:</strong><br>
<div class="input-holder"><label for="ref3" class= "left">Name:</label>&nbsp;<input type="text" name="ref3" id="ref3"></div>
<div class="input-holder"><label for="rnum3" class= "left">Phone Number:</label>&nbsp;<input type="phoneUS" name="rnum3" id="rnum3"maxlength="15"></div>
<div class="input-holder"><label for="raddr3" class= "left">Address:</label>&nbsp;<input type="text" name="raddr3" id="raddr3"></div>
<div class="input-holder"><label for="yrsknown3" class= "left">Number of Years Known For:</label>&nbsp;<input type="decimal" name="yrsknown3" id="yrsknown3"></div> <br>
<div class="input-holder"><label for="deal3" class= "left">Relationship:</label>&nbsp;<input type="text" name="deal3" id="deal3"></div>
<div class="input-holder"><label for="rjob3" class= "left">Job Title:</label>&nbsp;<input type="text" name="rjob3" id="rjob3"></div>
</fieldset>
<br/>
<fieldset>
<legend> Availability </legend>
<div class="input-holder"><label for="mstrt" class= "left">Monday: &nbsp; &nbsp; FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="mstrt"maxlength="5"> TO <input type="text" name="mend" id="mend"maxlength="5"></div> <br/>
<div class="input-holder"><label for="tstrt" class= "left">Tuesday:&nbsp; &nbsp; FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="tstrt"maxlength="5"> TO <input type="text" name="tend" id="tend"maxlength="5"></div> <br/>
<div class="input-holder"><label for="wstrt" class= "left">Wednesday:&nbsp; &nbsp; FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="wstrt"maxlength="5"> TO <input type="text" name="wend" id="wend"maxlength="5"></div> <br/>
<div class="input-holder"><label for="thstrt" class= "left">Thursday: &nbsp; &nbsp;FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="thstrt"maxlength="5"> TO <input type="text" name="thend" id="thend"maxlength="5"></div> <br/>
<div class="input-holder"><label for="fstrt" class= "left">Friday:&nbsp; &nbsp; FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="fstrt"maxlength="5"> TO <input type="text" name="fend" id="fend"maxlength="5"></div> <br/>
<div class="input-holder"><label for="sstrt" class= "left">Saturday: &nbsp; &nbsp;FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="sstrt"maxlength="5"> TO <input type="text" name="send" id="send"maxlength="5"></div> <br/>
<div class="input-holder"><label for="sstrt2" class= "left">Sunday:&nbsp; &nbsp; FROM&nbsp; &nbsp;</label>&nbsp;<input type="text" name="sstrt2"maxlength="5"> TO <input type="text" name="send2" id="send2"maxlength="5"></div> <br/>
</fieldset>
<br/>
<fieldset>
<legend> Miscellaneous </legend>
<p>Are you a Canadian Citizen? 
<label for="citizen-0">Yes</label><input type="radio" name="citizen" value=0  id="citizen-0"> 
<label for="citizen-1">No</label><input type="radio"  name="citizen"  value=1  id="citizen-1"></p> <br>
<p>Are you of legal working age? 
<label for="legal2-0">Yes</label><input type="radio" name="legal2" value=0  id="legal2-0"> 
<label for="legal2-1">No</label><input type="radio"  name="legal2" value=1  id="legal2-1"></p> <br>
<p>Are you legally entitled to work in this province? 
<label for="legal-0">Yes</label><input type="radio" name="legal" value=0  id="legal-0"> 
<label for="legal-1">No</label><input type="radio"  name="legal" value=1  id="legal-1"></p> <br>

Have you ever been convicted of a crime? <label for="crime-0">Yes</label><input type="radio" name="crime" value=0  id="crime-0"> 
									     <label for="crime-1">No</label><input type="radio"  name="crime"  value=1  id="crime-1">
If yes, please explain. <input type="text"  name="crime2" /> <br>

<div class="input-holder"><label for="dpay" class= "left">Desired Salary (Per Hour)</label>&nbsp;<input type="text" name="dpay" id="dpay"></div>
<div class="input-holder"><label for="wpay" class= "left">Desired Salary (Per Week)</label>&nbsp;<input type="text" name="wpay" id="wpay"></div>
<div class="input-holder"><label for="workhr" class= "left">How many hours do you expect to work per week?</label>&nbsp;<input type="text" name="workhr" id="workhr"maxlength="10"></div><br>
<p>What type of work?</p>
<label for="jobt-0"><p>Part-time</label><input type="radio" name="jobt" value=0  id="jobt-0">
<label for="jobt-1">Full-time</label><input type="radio"  name="jobt"  value=1  id="jobt-1">
<label for="jobt-2">Temporary/Seasonal</label><input type="radio"  name="jobt"  value=2  id="jobt-2"> </p><br>

<div class="input-holder"><label for="sdate" class= "left">When can you start?</label>&nbsp;<input type="date" name="sdate" id="sdate" /></div>
</fieldset>

<fieldset>
	<legend>Company-specific information</legend>
	APPLYING TO:
	<p>
	<select name="appnum" id="app">
	  <option id=-1 value=-1>Select...</option>
	  <option id=0 value=0>A&amp;W </option>
	  <option id=1 value=1>Alice Fazooli's</option>
	  <option id=2 value=2>American Eagle</option>
	  <option id=3 value=3>Aroma</option>
	  <option id=4 value=4>Blue Mountain</option>
	  <option id=5 value=5>Brampton Library</option>
	  <option id=6 value=6>Cara Foods</option>
	  <option id=7 value=7>Cora</option>
	  <option id=8 value=8>Daiso</option>
	  <option id=9 value=9>Domino's Pizza</option>
	  <option id=10 value=10>Tim Hortons</option>
	  <option id=11 value=11>Journey's</option>
	  <option id=12 value=12>Eddie Bauer</option>
	  <option id=13 value=13>Taco Bell</option>
	  <option id=14 value=14>Toronto Public Library</option>
	  <option id=15 value=15>Walmart</option>
	  <option id=16 value=16>Crabby Joe's</option>
	  <option id=17 value=17>Subway</option>
	  <option id=18 value=18>Earls</option>
	  <option id=19 value=19>Payless</option>
	  <option id=20 value=20>Toys "R" Us</option>
	  <option id=21 value=21>Sears</option>
	  <option id=22 value=22>Starsky</option>
	  <option id=23 value=23>Zehrs</option>
	  <option id=24 value=24>Money Mart</option>
	  <option id=25 value=25>TTC</option>
	  <option id=26 value=26>M&amp;M</option>
	  <option id=27 value=27>Firkin</option>
	  <option id=28 value=28>Red Lobster</option>
	  <option id=29 value=29>EB Games</option>
	</p> <br>
	</select>
	<div id="company-target"></div>
</fieldset>

<input type="submit" value="Submit" id="submit">
</form>
<form style="display:none" id="templates"><!--try to retain some data-->
	<div id="aw">
	<div class="input-holder"><label for="posn" class= "left">Position Applied to:</label>&nbsp;<input type="text" name="posn" id="posn"></div>
	<div class="input-holder"><label for="oref" class= "left">Other References</label>&nbsp;<input type="text" name="oref" id="oref"maxlength="200"></div>
	<div class="input-holder"><label for="hobby" class= "left">Hobbies and Community activities </label>&nbsp;<input type="text" name="hobby" id="hobby"maxlength="200"></div>
	<div class="input-holder"><label for="friend" class= "left">Friends who work at A&amp;W and where?</label>&nbsp;<input type="text" name="friend" id="friend"maxlength="200"></div>
	</div>

	<div id="af">
	Position Applied to:<br>
	<input type="radio" name="apos" value=0 />Bartender
	<input type="radio" name="apos" value=1 />Busser
	<input type="radio" name="apos" value=2 />Host
	<input type="radio" name="apos" value=3 />Server
	<input type="radio" name="apos" value=4 />Cocktail<br />
	<input type="radio" name="apos" value=5 />Prep Cook
	<input type="radio" name="apos" value=6 />Dishwasher
	<input type="radio" name="apos" value=7 />Line Cook
	<input type="radio" name="apos" value=8 />Pantry
	<input type="radio" name="apos" value=9 />Expeditor<br />
	<input type="radio" name="apos" value=10 />Other <br>
	Are you presently or have you ever been employed by any of our affiliated concepts? (Soul of the Vine,
	Brasserie Frisco, reds, Canyon Creek, Jack Astor's, Alice Fazooli's!, Armadillo, Far Niente)<br>
	<label for="rest-0">Yes</label><input type="radio" name="rest" value=0  id="rest-0"> 
	<label for="rest-1">No</label><input type="radio"  name="rest"  value=1  id="rest-1"> <br>
	Are you of legal age to serve alcohol?
	<label for="alco-0">Yes</label><input type="radio" name="alco" value=0  id="alco-0"> 
	<label for="alco-1">No</label><input type="radio"  name="alco"  value=1  id="alco-1"> <br>
	Have you passed provincial certification for alcohol service?<br>
	<label for="alco2-0">Yes</label><input type="radio" name="alco2" value=0  id="alco2-0"> 
	<label for="alco2-1">No</label><input type="radio"  name="alco2"  value=1  id="alco2-1"> <br>
	Have you been WHMIS certified?<br>
	<label for="whmis-0">Yes</label><input type="radio" name="whmis" value=0  id="whmis-0"> 
	<label for="whmis-1">No</label><input type="radio"  name="whmis"  value=1  id="whmis-1"> <br>
	Do you presently have a job that you intend to keep?<br>
	<label for="ajob-0">Yes</label><input type="radio" name="ajob" value=0  id="ajob-0"> 
	<label for="ajob-1">No</label><input type="radio"  name="ajob"  value=1  id="ajob-1"> <br>
	Some shifts at our restaurants begin as early as 7 AM and end occasionally as late as 4 AM (Please see job description
	for more detail). Do you have adequate transportation to and from work for the days you are available?<br>
	<label for="atrans-0">Yes</label><input type="radio" name="atrans" value=0  id="atrans-0"> 
	<label for="atrans-1">No</label><input type="radio"  name="atrans"  value=1  id="atrans-1"> <br>
	How many jobs have you held in the last two years?
	<label for="pjob-0">1</label><input type="radio" name="pjob" value=0  id="pjob-0"> 
	<label for="pjob-1">2</label><input type="radio"  name="pjob"  value=1  id="pjob-1">
	<label for="pjob-2">3</label><input type="radio" name="pjob" value=2  id="pjob-2"> 
	4 or <label for="pjob-3">more</label><input type="radio"  name="pjob"  value=3  id="pjob-3"> <br>
	How many jobs have you been terminated from?
	<label for="fjob-0">1</label><input type="radio" name="fjob" value=0  id="fjob-0"> 
	<label for="fjob-1">2</label><input type="radio"  name="fjob"  value=1  id="fjob-1">
	<label for="fjob-2">3</label><input type="radio" name="fjob" value=2  id="fjob-2"> 
	4 or <label for="fjob-3">more</label><input type="radio"  name="fjob"  value=3  id="fjob-3"> <br>
	What commitments do you have, or do you anticipate, that may affect your schedule (e.g., school, sports, outside interests)? 
	<input type="text" name="commit"><br>
	Are you able to work holidays and weekends? <br>
	<label for="hday-0">Yes</label><input type="radio" name="hday" value=0  id="hday-0"> 
	<label for="hday-1">No</label><input type="radio"  name="hday"  value=1  id="hday-1"> <br>
	We may conduct training on days, or at times, you have other obligations.
	Is your schedule flexible so you may come to training?
	<label for="flex-0">Yes</label><input type="radio" name="flex" value=0  id="flex-0"> 
	<label for="flex-1">No</label><input type="radio"  name="flex"  value=1  id="flex-1"> <br>
	Are you interested in seasonal or permanent employment?
	<label for="empl-0">Seasonal</label><input type="radio" name="empl" value=0  id="empl-0"> 
	<label for="empl-1">Permanent</label><input type="radio"  name="empl"  value=1  id="empl-1"> <br>
	Do you understand the basic job requirements of the position applied for? <br>
	<label for="jreq-0">Yes</label><input type="radio" name="jreq" value=0  id="jreq-0"> 
	<label for="jreq-1">No</label><input type="radio"  name="jreq"  value=1  id="jreq-1"> <br>
	Have you read our Welcome brochure? <br>
	<label for="welc-0">Yes</label><input type="radio" name="welc" value=0  id="welc-0"> 
	<label for="welc-1">No</label><input type="radio"  name="welc"  value=1  id="welc-1"> <br>
	Can you perform the essential functions required by the job for which you are applying either with or without
	reasonable accommodations? <br>
	<label for="efunc-0">Yes</label><input type="radio" name="efunc" value=0  id="efunc-0"> 
	<label for="efunc-1">No</label><input type="radio"  name="efunc"  value=1  id="efunc-1"> <br>
	We have specific requirements for personal appearance, as described in our Welcome brochure.
	Are you willing to meet our requirements? <br>
	<label for="sreq-0">Yes</label><input type="radio" name="sreq" value=0  id="sreq-0"> 
	<label for="sreq-1">No</label><input type="radio"  name="sreq"  value=1  id="sreq-1"> <br>
	</div>

	<div id="ae">
	Position Desired:<input type="text" name="dposn"><br>
	Are you willing and able to relocate?
	<label for="reloc-0">Yes</label><input type="radio" name="reloc" value=0  id="reloc-0"> 
	<label for="reloc-1">No</label><input type="radio"  name="reloc"  value=1  id="reloc-1"> <br>
	When can you work?<br>
	<label for="wwrk-0">Days</label><input type="radio" name="wwrk" value=0  id="wwrk-0"> 
	<label for="wwrk-1">Evenings</label><input type="radio"  name="wwrk"  value=1  id="wwrk-1"> 
	<label for="wwrk-2">Weekends</label><input type="radio"  name="wwrk"  value=2  id="wwrk-2">
	<label for="wwrk-3">All</label><input type="radio"  name="wwrk"  value=3  id="wwrk-3"><br>

	Have you ever worked for an American Eagle Outfitters, Thrifty's, Bluenotes or NLS before?
	<label for="ojob-0">Yes</label><input type="radio" name="ojob" value=0  id="ojob-0"> 
	<label for="ojob-1">No</label><input type="radio"  name="ojob"  value=1  id="ojob-1"> <br>
	Have you ever applied to an American Eagle Outfitters, Thrifty's, Bluenotes or NLS before?
	<label for="papp-0">Yes</label><input type="radio" name="papp" value=0  id="papp-0"> 
	<label for="papp-1">No</label><input type="radio"  name="papp"  value=1  id="papp-1"> <br>
	Do you have a spouse, child, or parent currently employed by American Eagle Outfitters, Thrifty's, Bluenotes or NLS?
	<label for="echild-0">Yes</label><input type="radio" name="echild" value=0  id="echild-0"> 
	<label for="echild-1">No</label><input type="radio"  name="echild"  value=1  id="echild-1"> <br> If yes, identify name, relationship, and position. 
	<input type="text"  name="echild2" /> <br>
	Is any additional information, relative to change of name, use of assumed name, or nickname necessary to check your employment history?
	<label for="ehist-0">Yes</label><input type="radio" name="ehist" value=0  id="ehist-0"> 
	<label for="ehist-1">No</label><input type="radio"  name="ehist"  value=1 /> <br>  If yes, please explain. <input type="text"  name="ehist2"  id="ehist-1"> <br>

	Have you ever been discharged from employment? <label for="demp-0">Yes</label><input type="radio" name="demp" value=0  id="demp-0"> 
												   <label for="demp-1">No</label><input type="radio"  name="demp"  value=1  id="demp-1">
	If yes, please explain. <input type="text"  name="demp2" /> <br>

	Indicate the job skills you've performed. <input type="text"  name="jskill" /> <br>
	How did you hear about us?<br>
	<div class="input-holder"><label for="npname"><input type="radio" name="hear" value=0 id="hear-0" /></label><label for="hear-0" class= "left">Newspaper Name		</label>&nbsp;<input type="text" name="npname" id="npname"></div>
	<div class="input-holder"><label for="coname"><input type="radio" name="hear" value=1 id="hear-1" /></label><label for="hear-1" class= "left">Community Organization Name	</label>&nbsp;<input type="text" name="coname" id="coname"></div>
	<div class="input-holder"><label for="eaname"><input type="radio" name="hear" value=2 id="hear-2" /></label><label for="hear-2" class= "left">Employment Agency Name	</label>&nbsp;<input type="text" name="eaname" id="eaname"></div>
	<div class="input-holder"><label for="scname"><input type="radio" name="hear" value=3 id="hear-3" /></label><label for="hear-3" class= "left">School Name			</label>&nbsp;<input type="text" name="scname" id="scname"></div>
	<div class="input-holder"><label for="adname"><input type="radio" name="hear" value=4 id="hear-4" /></label><label for="hear-4" class= "left">Advertisement Name		</label>&nbsp;<input type="text" name="adname" id="adname"></div>
	<div class="input-holder"><label for="ername"><input type="radio" name="hear" value=5 id="hear-5" /></label><label for="hear-5" class= "left">Employee Referral Name	</label>&nbsp;<input type="text" name="ername" id="ername"></div>
	<div class="input-holder"><label for="wname" ><input type="radio" name="hear" value=6 id="hear-6" /></label><label for="hear-6" class= "left">Walk-in Applicants Name	</label>&nbsp;<input type="text" name="wname"  id="wname" ></div>
	<div class="input-holder"><label for="ohear"  class= "left">Other</label>&nbsp;<input type="text" name="ohear" id="ohear"></div>
	Career Objectives <input type="text" name="goal" maxlength="200" style= "width:800px"><br>								 
	</div>

	<div id="ar">
	<div class="input-holder"><label for="ovrtm" class= "left">Are you able to work overtime?:</label>&nbsp;<input type="text" name="ovrtm" id="ovrtm"></div>
	<div class="input-holder"><label for="arprev" class= "left">Have you ever worked for Aroma Espresso Bar?: </label>&nbsp;<input type="text" name="arprev" id="arprev"></div>  <br>
	<div class="input-holder"><label for="when" class= "left">If yes, when?</label>&nbsp;<input type="text" name="when" id="when"></div>
	<div class="input-holder"><label for="dept" class= "left">Which store/department?</label>&nbsp;<input type="text" name="dept" id="dept"></div> 
	<div class="input-holder"><label for="arexp" class= "left">Have you ever visited an Aroma Espresso Bar location? Where? Describe your experience.</label>&nbsp;<input type="text" name="arexp" id="arexp"></div></label><br>
	<br><div class="input-holder"><label for="arwhy" class= "left">Why would you like to work for Aroma Espresso Bar?</label>&nbsp;<input type="text" name="arwhy" id="arwhy"></div> 
	Describe a specific situation where you have provided excellent customer service in your most recent position. <br> Why was it effective? </label>&nbsp;<input type="text" name="cstsrv"><br> 
	</div>

	<div id="bm">
	What position are you applying for? <input type="text" name="bpos"><br> 
	Have you ever worked for Blue Mountain Resort before? 
	<label for="bprev-0">Yes</label><input type="radio" name="bprev" value=0  id="bprev-0"> 
	<label for="bprev-1">No</label><input type="radio"  name="bprev"  value=1  id="bprev-1"> <br>
	Do you have reliable transportation? 
	<label for="btrans-0">Yes</label><input type="radio" name="btrans" value=0  id="btrans-0"> 
	<label for="btrans-1">No</label><input type="radio"  name="btrans"  value=1  id="btrans-1"> <br>
	Are you 18 years of older? 
	<label for="bage-0">Yes</label><input type="radio" name="bage" value=0  id="bage-0"> 
	<label for="bage-1">No</label><input type="radio"  name="bage"  value=1  id="bage-1"> <br>
	Are you 16 years of older? 
	<label for="bage2-0">Yes</label><input type="radio" name="bage2" value=0  id="bage2-0"> 
	<label for="bage2-1">No</label><input type="radio"  name="bage2"  value=1  id="bage2-1"> <br>
	Are you 14 years of older? 
	<label for="bage3-0">Yes</label><input type="radio" name="bage3" value=0  id="bage3-0"> 
	<label for="bage3-1">No</label><input type="radio"  name="bage3"  value=1  id="bage3-1"> <br>
	If yes, what position? <input type="text" name="spos"> When? <input type="text" name="when"> <br>
	Have you ever worked for another resort/Division of Intrawest? 
	<label for="prev2-0">Yes</label><input type="radio" name="prev2" value=0  id="prev2-0"> 
	<label for="prev2-1">No</label><input type="radio"  name="prev2"  value=1  id="prev2-1"> <br>
	If yes, which division? <input type="text" name="pdiv"><br>
	List other training courses, certificates, license .etc <input type="text" name="otrain">
	What do you do for fun? <input type="text" name="fun">
	</div>

	<div id="bl">
	Title of position applied for? <input type="text" name="lposn"><br>
	How did you learn about this opportunity? <input type="text" name="bhear"><br>
	Other Relevant Practical Skills Not Mentioned Previously <input type="text" name="rskill"><br>
	Are you attaching other information? 
	<label for="attach-0">Yes</label><input type="radio" name="attach" value=0  id="attach-0"> 
	<label for="attach-1">No</label><input type="radio"  name="attach"  value=1  id="attach-1"> <br>
	Are you related to a Brampton Library employee? 
	<label for="remp-0">Yes</label><input type="radio" name="remp" value=0  id="remp-0"> 
	<label for="remp-1">No</label><input type="radio"  name="remp"  value=1  id="remp-1"> <br>
	Have you ever been employed by the Brampton Library?
	<label for="premp-0">Yes</label><input type="radio" name="premp" value=0  id="premp-0"> 
	<label for="premp-1">No</label><input type="radio"  name="premp"  value=1  id="premp-1"> <br>
	Service Unit <input type="text" name="sernum"> from <input type="text" name="serstrt"> &nbsp; to <input type="text" name="serend"> <br>
	Service Unit <input type="text" name="sernum2"> from <input type="text" name="serstrt2"> &nbsp; to <input type="text" name="serend2"> <br>
	Have you ever volunteered at Brampton Library (includes Field placements)?
	<label for="lvol-0">Yes</label><input type="radio" name="lvol" value=0  id="lvol-0"> 
	<label for="lvol-1">No</label><input type="radio"  name="lvol"  value=1  id="lvol-1"> <br>
	Service Unit <input type="text" name="sernum3"> from <input type="text" name="serstrt3"> &nbsp; to <input type="text" name="serend3"> <br>
	Service Unit <input type="text" name="sernum4"> from <input type="text" name="serstrt4"> &nbsp; to <input type="text" name="serend4"> <br>
	</div>
	<div id="cf">
	Where are you interested in working?:<br>
	<input type="radio" name="cpos" value=0 />Harvey's
	<input type="radio" name="cpos" value=1 />Montana's
	<input type="radio" name="cpos" value=2 />Swiss Chalet
	<input type="radio" name="cpos" value=3 />CARA Home Office
	<input type="radio" name="cpos" value=4 />Milestones
	<input type="radio" name="cpos" value=5 />Kelsey's <br>
	What position are you applying to?: <input type="text" name="cfpos"><br>
	Is there a specific location you prefer? <input type="text" name="cloc"><br>
	Please specify main intersection <input type="text" name="inter"><br>

	How did you hear about us?
	<input type="radio" name="hear2" value=0 />Agency 
	<input type="radio" name="hear2" value=1 />School 
	<input type="radio" name="hear2" value=2 />Existing employee 
	<input type="radio" name="hear2" value=3 />Walk-in 
	<input type="radio" name="hear2" value=4 />Advertisement 
	<input type="radio" name="hear2" value=5 />Job Fair
	<input type="radio" name="hear2" value=6 />CARA Website
	Other website (please specify)<input type="text" name="hear3">
	Other <input type="text" name="heart4"><br>
	Are you currently employed or have you ever been employed by CARA Operations Limited (“CARA”), or worked at a CARA branded restaurant, (corporate or franchised)? (CARA branded restaurants include Swiss Chalet, Milestones, Montana’s, Kelsey’s, and Harvey’s)
	<label for="premp2-0">Yes</label><input type="radio" name="premp2" value=0  id="premp2-0"> 
	<label for="premp2-1">No</label><input type="radio"  name="premp2"  value=1  id="premp2-1"> <br>
	Do you have any relatives who are employed with CARA Operations Limited?
	<label for="remp2-0">Yes</label><input type="radio" name="remp2" value=0  id="remp2-0"> 
	<label for="remp2-1">No</label><input type="radio"  name="remp2"  value=1  id="remp2-1"> <br>
	Depending on the position, you may be required at times to lift and carry 15-25 kg (25 -50 lbs.), and to continuously walk or stand during your shifts. Are you able to meet these requirements?
	<label for="lift-0">Yes</label><input type="radio" name="lift" value=0  id="lift-0"> 
	<label for="lift-1">No</label><input type="radio"  name="lift"  value=1  id="lift-1"> <br>
	We have high standards of personal appearance, including uncompromising personal hygiene.You may be required to wear a uniform or follow a dress code. Are you willing to meet these standards?
	<label for="clean-0">Yes</label><input type="radio" name="clean" value=0  id="clean-0"> 
	<label for="clean-1">No</label><input type="radio"  name="clean"  value=1  id="clean-1"> <br>
	Because the hours and shifts are so varied, it is necessary to have reliable transportation.Do you have reliable transportation to travel to and from work for the required shifts and hours?
	<label for="cftrans-0">Yes</label><input type="radio" name="cftrans" value=0  id="cftrans-0"> 
	<label for="cftrans-1">No</label><input type="radio"  name="cftrans"  value=1  id="cftrans-1"> <br>
	Are you willing to relocate? If yes, to where?
	<label for="creloc-0">Yes</label><input type="radio" name="creloc" value=0  id="creloc-0"> 
	<label for="creloc-1">No</label><input type="radio"  name="creloc"  value=1  id="creloc-1"> <br>
	Circle the highest level of schooling completed:<br>
	<input type="radio" name="cedu" value=0 />Grade 9/10/11 <br>
	<input type="radio" name="cedu" value=1 />High School<br>
	<input type="radio" name="cedu" value=2 /> Trade School<br>
	<input type="radio" name="cedu" value=3 /> CEGEP/College University <br>
	Please explain any specialized training or course work you have completed or partially completed that relates to the position you are applying for:<input type="text" name="cotrain">
	</div>
	<div id="cor">
	Have you ever worked for our network before?
	<label for="cprev-0">Yes</label><input type="radio" name="cprev" value=0  id="cprev-0"> 
	<label for="cprev-1">No</label><input type="radio"  name="cprev"  value=1  id="cprev-1"> <br>
	Location: <input type="text" name="cnloc"> <br>
	Position Applied to:<br>
	<input type="radio" name="copos" value=0 />Kitchen
	<input type="radio" name="copos" value=1 />Dishwasher
	<input type="radio" name="copos" value=2 />Fruit Counter
	<input type="radio" name="copos" value=3 />Busperson
	<input type="radio" name="copos" value=4 />Kitchen Manager
	<input type="radio" name="copos" value=5 />Host(ess)
	<input type="radio" name="copos" value=6 />Restaurant Manager <br>
	Written and Spoken Languages:<br>
	<input type="radio" name="lang" value=0 />English
	<input type="radio" name="lang" value=1 />French
	<input type="radio" name="lang" value=2 />Other <input type="text" name="olang"> <br>
	</div>

	<div id="dai">
	Position Applied to:<br>
	<input type="radio" name="dipos" value=0 />Cashier
	<input type="radio" name="dipos" value=1 />Sales Associate
	<input type="radio" name="dipos" value=2 />Office 
	<input type="radio" name="dipos" value=3 />No preference<br>
	Have you ever worked for the company before?
	<label for="prevw-0">Yes</label><input type="radio" name="prevw" value=0  id="prevw-0"> 
	<label for="prevw-1">No</label><input type="radio"  name="prevw"  value=1  id="prevw-1"> <br>
	Availability for interview <br>
	Preferred Time
	<label for="ipref-0">AM</label><input type="radio" name="ipref" value=0  id="ipref-0"> 
	<label for="ipref-1">PM</label><input type="radio"  name="ipref"  value=1  id="ipref-1"> 
	No <label for="ipref-2">preference</label><input type="radio"  name="ipref"  value=2  id="ipref-2"><br>
	Preferred Day
	<label for="ipref2-0">Weekdays</label><input type="radio" name="ipref2" value=0  id="ipref2-0"> 
	<label for="ipref2-1">Weekends</label><input type="radio"  name="ipref2"  value=1  id="ipref2-1"> 
	No <label for="ipref2-2">preference</label><input type="radio"  name="ipref2"  value=2  id="ipref2-2"> 
	<br>
	</div>
	<div id="dom">
	Position Applied to:<br>
	<input type="radio" name="dpos" value=0 />Team Member
	<input type="radio" name="dpos" value=1 />Contract Delivery Driver
	<input type="radio" name="dpos" value=2 />Manager <br><br>
	How did you hear about the job?<br>
	<input type="radio" name="dhear" value=0 />Store banner 
	<input type="radio" name="dhear" value=1 />Previously worked with Domino's
	<input type="radio" name="dhear" value=2 />Newspaper Ad 
	<input type="radio" name="dhear" value=3 />Domino's Referral
	<input type="radio" name="dhear" value=4 />Box Topper 
	<input type="radio" name="dhear" value=5 />Walk-in
	<br><br>
	How long have you lived at your current address?:<input type="text" name="liveyrs"> Years <input type="text" name="livemth"> Months  <br><br>
	List any special skills that may help you at Domino's:<input type="text" name="skillz"> <br><br>
	List some of your interests and activities, including volunteer work, awards, and honors:<input type="text" name="award"> <br><br>
	A good attendance record is important at Domino's. <br>Is there anything that would force you to be
	consistently late?
	<label for="late-0">Yes</label><input type="radio" name="late" value=0  id="late-0"> 
	<label for="late-1">No</label><input type="radio"  name="late"  value=1  id="late-1"> <br>
	If yes, please explain:<input type="text" name="excuse"> <br><br>
	<p>Are you currently employed?
	<label for="cemp-0">Yes</label><input type="radio" name="cemp" value=0  id="cemp-0"> 
	<label for="cemp-1">No</label><input type="radio"  name="cemp"  value=1  id="cemp-1"></p> <br>
	<p>Do you plan to keep working there if you work with
	Domino's?
	<label for="cemp2-0">Yes</label><input type="radio" name="cemp2" value=0  id="cemp2-0"> 
	<label for="cemp2-1">No</label><input type="radio"  name="cemp2"  value=1  id="cemp2-1"> </p><br>
	<p>Are you in school now?
	<label for="enroll-0">Yes</label><input type="radio" name="enroll" value=0  id="enroll-0"> 
	<label for="enroll-1">No</label><input type="radio"  name="enroll"  value=1  id="enroll-1"> </p><br>
	<p>Do you plan on returning to
	school?
	<label for="sret-0">Yes</label><input type="radio" name="sret" value=0  id="sret-0"> 
	<label for="sret-1">No</label><input type="radio"  name="sret"  value=1  id="sret-1"></p> <br>
	If yes, when? <input type="text" name="sret2"> <br><br>

	<strong>Current Driver's License:</strong><br/>
	<div class="input-holder"><label for="licnum" class= "left">Number:</label>&nbsp;<input type="text" name="licnum" id="licnum"></div>
	<div class="input-holder"><label for="lprov" class= "left">Province:</label>&nbsp;<input type="text" name="lprov" id="lprov"></div>
	<div class="input-holder"><label for="lexp" class= "left">Expiry Date:</label>&nbsp;<input type="date" name="lexp" id="lexp"></div><br>
	List any other driver's licenses held in the past 2 years:<br><br>
	<div class="input-holder"><label for="olicnum" class= "left">Number:</label>&nbsp;<input type="text" name="olicnum" id="olicnum"></div>
	<div class="input-holder"><label for="olprov" class= "left">Province:</label>&nbsp;<input type="text" name="olprov" id="olprov"></div>
	<div class="input-holder"><label for="olexp" class= "left">Expiry Date:</label>&nbsp;<input type="date" name="olexp" id="olexp"></div><br>
	List any traffic violations within the past 3 years.<br>
	Include the date, violation, and penalty (excluding
	parking violations): <input type="text" name="vio"> <br><br>
	<strong>Auto Insurance Company: </strong> <br>
	<div class="input-holder"><label for="polnum" class= "left">Policy number:</label>&nbsp;<input type="text" name="polnum" id="polnum"></div>
	<div class="input-holder"><label for="efdate" class= "left">Effective date:</label>&nbsp;<input type="date" name="efdate" id="efdate"></div>
	<div class="input-holder"><label for="epdate" class= "left">Expiration date:</label>&nbsp;<input type="date" name="epdate" id="epdate"></div>
	<div class="input-holder"><label for="libcov" class= "left">Amount of Liability Coverage:</label>&nbsp;<input type="text" name="libcov" id="libcov"></div>
	</div>
	<div>
		Please select a company.
	</div>
</form>
		<script>
			jQuery.validator.addMethod("zipcodeCA", function(value, element) {//postal code
				return this.optional(element) || /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i.test(value);
			}, "The specified postal code is invalid");
			$($("#myform").validate({
				errorPlacement: function($error, $element){
					$element.parent().after($error);
				},
			}).currentForm).validateDelegate("[type='phoneUS'], [type='zipcodeCA']","focusin focusout keyup",function (event) {//from jQ
				var validator = $.data(this[0].form, "validator"),
					eventType = "on" + event.type.replace(/^validate/, ""); 
				if ( validator.settings[eventType] ) {
					validator.settings[eventType].call(validator, this[0], event);
				}
			}).find("input[type]").focusout();
			$("input[required]").prev("label").append("<span class='input-required'>*</span>");
			var $templates=$("#templates").children(),$target=$("#company-target");//improve the chances of the browser saving the data
			$("#app").val(-1).change(function(){
				$target.children().remove().appendTo($("#templates"));
				var val=$(this).val();
				$target.append($templates.eq(val).remove());
				$("#submit").prop("disabled",val<0);
			}).change();
			$("#myform").formToWizard({submitButton:"submit"});
		</script>

		</div><!--end content-->  
	</div><!--end main container-->   
</div><!--end main-->   

<div id="footer">  
	<div class="container">  
    		<p>Copyright © 2013 Universal App<br />  
            All Rights Reserved</p>  
    </div><!--end footer container-->   
</div><!--end footer-->  
</body>
</html>
