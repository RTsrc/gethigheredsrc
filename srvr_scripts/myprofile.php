<?php
require_once('srvr_scripts/logincheck.php'); 
 require_once('srvr_scripts/data_pull.php');
if(mysql_result(mysql_query("SELECT `email_validated` FROM `users` WHERE `uid`='$myuid'"),0)!='1')
    error('Please check your email for the validation link.');
 session_start();
$formfill=$_SESSION['formsave'];
$loggedin=$_SESSION['loggedin'];
?>
<!DOCTYPE html>
<?php require_once'include/base.php';?>
<html>
<head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42026531-1', 'gethighered.ca');
  ga('send', 'pageview');

</script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>gethighered.ca</title>
  
  <link rel="stylesheet" media="screen" type="text/css" href="css/myprofile.css"/>
  <link rel="stylesheet" media="screen" type="text/css" href="css/square/blue.css"/>
  <script type="text/javascript" src="scripts/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="scripts/jquery-migrate-1.1.0.js"></script>
  <script type="text/javascript" src="scripts/scrollTo.js"></script>
  <script type="text/javascript" src="scripts/jquery.animate-colors.js"></script>
  <script type="text/javascript" src="scripts/jquery.sticky.js"></script>
  <script type="text/javascript" src="scripts/jquery.isotope.js"></script>
  <script type="text/javascript" src="scripts/jquery.animate-shadow.js"></script>     
  <script type="text/javascript" src="scripts/jquery.icheck.js"></script>

  <script type="text/javascript" src="scripts/myprofile.js"></script>
  <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
  <div class="loading"><img src="images/loading.gif" /></div>
  <?=$base_menubar?>
<section class="main">
  <div id="subMenu">
    <a href="email.php">EMAIL</a>
    <a href="myprofile.php">MY PROFILE</a>
    <a href="myapps.php">MY APPS</a>
    <a href="employers.php">EMPLOYERS</a>
  </div>
    <div id="main">
      <div id="pagination">
        <a class="pagination-active" href="#" title="Contact Info" data-filter=".contactInfo"></a>
        <a class="pagination-inactive" href="#" title="Experience" data-filter=".experience"></a>
        <a class="pagination-inactive" href="#" title="Education" data-filter=".education"></a>
        <a class="pagination-inactive" href="#" title="References" data-filter=".references"></a>
        <a class="pagination-inactive" href="#" title="Availability" data-filter=".availability"></a>
        <a class="pagination-inactive" href="#" title="Miscellaneous" data-filter=".miscellaneous"></a>
      </div>
      <div id="sectionTitle">Contact Info</div>
      <div id="fieldsetContainer">
        <form id="fieldset" action="srvr_scripts/data_save.php" method="post">
          <!-- Contact Info Inputs -->
          <div class="inputField contactInfo"><input name="lname" value="<?=addslashes($lname)?>" type="text" autocomplete="on" placeholder="Your Last Name*"/></div>
          <div class="inputField contactInfo"><input name="mname" value="<?=addslashes($mname)?>" type="text" autocomplete="on" placeholder="Your Middle Name"/></div>
          <div class="inputField contactInfo"><input name="fname" value="<?=addslashes($fname)?>" type="text" autocomplete="on" placeholder="Your First Name*"/></div>
          <div class="inputField contactInfo"><input name="email" value="<?=addslashes($email)?>" type="email" autocomplete="on" placeholder="Your Email*"/></div>
          <div class="inputField contactInfo"><input name="pnum" value="<?=addslashes($pnum)?>" type="tel" autocomplete="on" placeholder="Your Home Phone"/></div>
          <div class="inputField contactInfo"><input name="pnum2" value="<?=addslashes($pnum2)?>" type="tel" autocomplete="on" placeholder="Your Work Phone"/></div>
          <div class="inputField contactInfo"><input name="address" value="<?=addslashes($address)?>" type="text" autocomplete="on" placeholder="Your Address"/></div>
          <div class="inputField contactInfo"><input name="address2" value="<?=addslashes($address2)?>" type="tel" autocomplete="on" placeholder="Unit/Apartment Number"/></div>
          <div class="inputField contactInfo"><input name="city" value="<?=addslashes($city)?>" type="text" autocomplete="on" placeholder="Your City"/></div>
          <div class="inputField contactInfo"><input name="prov" value="<?=addslashes($prov)?>" type="text" autocomplete="on" placeholder="Your Province"/></div>
          <div class="inputField contactInfo"><input name="pcode" value="<?=addslashes($pcode)?>" type="text" autocomplete="on" placeholder="Your Postal Code"/></div>
          <div class="inputField contactInfo"><input name="elname" value="<?=addslashes($elname)?>" type="text" autocomplete="on" placeholder="Emergency Contact Last Name"/></div>
          <div class="inputField contactInfo"><input name="efname" value="<?=addslashes($efname)?>" type="text" autocomplete="on" placeholder="Emergency Contact First Name"/></div>
          <div class="inputField contactInfo"><input name="epnum" value="<?=addslashes($epnum)?>" type="tel" autocomplete="on" placeholder="Emergency Contact Phone Number"/></div>
          <div class="inputField contactInfo"><input name="eaddr" value="<?=addslashes($eaddr)?>" type="text" autocomplete="on" placeholder="Emergency Contact Address"/></div>
          <div class="inputField contactInfo"><input name="ecity" value="<?=addslashes($ecity)?>" type="text" autocomplete="on" placeholder="Emergency Contact City"/></div>
          <div class="inputField contactInfo"><input name="eprov" value="<?=addslashes($eprov)?>" type="text" autocomplete="on" placeholder="Emergency Contact Province"/></div>
          <div class="inputField contactInfo"><input name="epcode" value="<?=addslashes($epcode)?>" type="text" autocomplete="on" placeholder="Emergency Contact Postal Code"/></div>
         
          <!-- Experience Inputs -->
          <!-- Job #1 -->
          <div class="inputField experience"><br>
            <span style="font-size:18pt;">Job #1:</span>
            <input name="company" value="<?=addslashes($company)?>" type="text" autocomplete="on" placeholder="Name of Employer"/>
          </div><br>
          <div class="inputField experience">
            <br><span>Start Date:</span><br>
            <input name="yrstart1" value="<?=addslashes($yrstart1)?>" type="date" autocomplete="on" placeholder="Start Date"/>
          </div>
          <div class="inputField experience">
            <br><span>End Date:</span><br>
            <input name="yrend1" value="<?=addslashes($yrend1)?>" type="date" autocomplete="on" placeholder="End Date"/>
          </div>
          <div class="inputField experience"><input name="title" value="<?=addslashes($title)?>" type="text" autocomplete="on" placeholder="Job Title"/></div>
          <div class="inputField experience"><input name="jduty" value="<?=addslashes($jduty)?>" type="text" autocomplete="on" placeholder="Job Duties"/></div>
          <div class="inputField experience"><input name="caddr" value="<?=addslashes($caddr)?>" type="text" autocomplete="on" placeholder="Company Address"/></div>
          <div class="inputField experience"><input name="boss" value="<?=addslashes($boss)?>" type="text" autocomplete="on" placeholder="Name and Title of Supervisor"/></div>
          <div class="inputField experience"><input name="bnum" value="<?=addslashes($bnum)?>" type="tel" autocomplete="on" placeholder="Phone Number"/></div>
          <div class="inputField experience"><input name="ctype" value="<?=addslashes($ctype)?>" type="text" autocomplete="on" placeholder="Business Type"/></div>
      		<div class="inputField experience">
            <span>May We Contact Them:</span><br>
      			<label>Yes</label><input name="contact1" type="radio" value=0 <?php if($contact1 == 0) echo "checked";?>/><br>
      			<label>No</label><input name="contact1" type="radio" value=1 <?php if($contact1 == 1) echo "checked";?>/>
      		</div>
          <div class="inputField experience"><input name="go" value="<?=addslashes($go)?>" type="text" autocomplete="on" placeholder="Reason For Leaving"/></div>
          <div class="inputField experience"><input name="pay" value="<?=addslashes($pay)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Earnings (Per Hour)"/></div>
          <!-- Job #2 -->
          <div class="inputField experience"><br>
            <span style="font-size:18pt;">Job #2:</span>
            <input name="company2" value="<?=addslashes($company2)?>" type="text" autocomplete="on" placeholder="Name of Employer"/>
          </div><br>
          <div class="inputField experience">
            <br><span>Start Date:</span><br>
            <input name="yrstart2" value="<?=addslashes($yrstart2)?>" type="date" autocomplete="on" placeholder="Start Date"/>
          </div>
          <div class="inputField experience">
            <br><span>End Date:</span><br>
            <input name="yrend2" value="<?=addslashes($yrend2)?>" type="date" autocomplete="on" placeholder="End Date"/>
          </div>
          <div class="inputField experience"><input name="title2" value="<?=addslashes($title2)?>" type="text" autocomplete="on" placeholder="Job Title"/></div>
          <div class="inputField experience"><input name="jduty2" value="<?=addslashes($jduty2)?>" type="etext" autocomplete="on" placeholder="Job Duties"/></div>
          <div class="inputField experience"><input name="caddr2" value="<?=addslashes($caddr2)?>" type="text" autocomplete="on" placeholder="Company Address"/></div>
          <div class="inputField experience"><input name="boss2" value="<?=addslashes($boss2)?>" type="text" autocomplete="on" placeholder="Name and Title of Supervisor"/></div>
          <div class="inputField experience"><input name="bnum2" value="<?=addslashes($bnum2)?>" type="tel" autocomplete="on" placeholder="Phone Number"/></div>
		      <div class="inputField experience"><input name="ctype2" value="<?=addslashes($ctype2)?>" type="text" autocomplete="on" placeholder="Business Type"/></div>
		      <div class="inputField experience">
            <span>May We Contact Them:</span><br>
            <label>Yes</label><input name="contact2" type="radio" value=0 <?php if($contact2 == 0) echo "checked";?>/><br>
            <label>No</label><input name="contact2" type="radio" value=1 <?php if($contact2 == 1) echo "checked";?>/>
          </div>
          <div class="inputField experience"><input name="go2" value="<?=addslashes($go2)?>" type="text" autocomplete="on" placeholder="Reason For Leaving"/></div>
          <div class="inputField experience"><input name="pay2" value="<?=addslashes($pay2)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Earnings (Per Hour)"/></div>
          <!-- Job #3 -->
          <div class="inputField experience"><br>
            <span style="font-size:18pt;">Job #3:</span>
            <input name="company3" value="<?=addslashes($company3)?>" type="text" autocomplete="on" placeholder="Name of Employer"/>
          </div><br>
          <div class="inputField experience">
            <br><span>Start Date:</span><br>
            <input name="yrstart3" value="<?=addslashes($yrstart3)?>" type="date" autocomplete="on" placeholder="Start Date"/>
          </div>
          <div class="inputField experience">
            <br><span>End Date:</span><br>
            <input name="yrend3" value="<?=addslashes($yrend3)?>" type="date" autocomplete="on" placeholder="End Date"/>
          </div>
          <div class="inputField experience"><input name="title3" value="<?=addslashes($title3)?>" type="text" autocomplete="on" placeholder="Job Title"/></div>
          <div class="inputField experience"><input name="jduty3" value="<?=addslashes($jduty3)?>" type="etext" autocomplete="on" placeholder="Job Duties"/></div>
          <div class="inputField experience"><input name="caddr3" value="<?=addslashes($caddr3)?>" type="text" autocomplete="on" placeholder="Company Address"/></div>
          <div class="inputField experience"><input name="boss3" value="<?=addslashes($boss3)?>" type="text" autocomplete="on" placeholder="Name and Title of Supervisor"/></div>
          <div class="inputField experience"><input name="bnum3" value="<?=addslashes($bnum3)?>" type="tel" autocomplete="on" placeholder="Phone Number"/></div>
          <div class="inputField experience"><input name="ctype3" value="<?=addslashes($ctype3)?>" type="text" autocomplete="on" placeholder="Business Type"/></div>
		  <div class="inputField experience">
            <span>May We Contact Them:</span><br>
            <label>Yes</label><input name="contact3" type="radio" value=0 <?php if($contact3 == 0) echo "checked";?>/><br>
            <label>No</label><input name="contact3" type="radio" value=1 <?php if($contact3 == 1) echo "checked";?>/>
          </div>
          <div class="inputField experience"><input name="go3" value="<?=addslashes($go3)?>" type="text" autocomplete="on" placeholder="Reason For Leaving"/></div>
          <div class="inputField experience"><input name="pay3" value="<?=addslashes($pay3)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Earnings (Per Hour)"/></div>
          <!-- Education Inputs -->
          <div class="inputField education"><input name="school" value="<?=addslashes($school)?>" type="text" autocomplete="on" placeholder="Your High School"/></div>
          <div class="inputField education"><input name="hiloc" value="<?=addslashes($hiloc)?>" type="text" autocomplete="on" placeholder="School Address"/></div>
          <div class="inputField education">
            <br><span>Start Date:</span>
            <input name="syrstrt" value="<?=addslashes($syrstrt)?>" type="date" autocomplete="on" placeholder="Start Date"/>
          </div>
          <div class="inputField education">
            <br><span>End Date:</span><br>
            <input name="sysend" value="<?=addslashes($sysend)?>" type="date" autocomplete="on" placeholder="End Date"/>
          </div>
          <div class="inputField education">
            <span>Did You Graduate:</span><br>
            <label>Yes</label><input name="grad" type="radio" value=0 <?php if($grad == 0) echo "checked";?>/><br>
            <label>No</label><input name="grad" type="radio" value=1 <?php if($grad == 1) echo "checked";?>/>
          </div>
          <div class="inputField education"><input name="uni" value="<?=addslashes($uni)?>" type="text" autocomplete="on" placeholder="Your Univerity/Other"/></div>
          <div class="inputField education"><input name="major" value="<?=addslashes($major)?>" type="text" autocomplete="on" placeholder="Your Major"/></div>
          <div class="inputField education"><input name="uniloc" value="<?=addslashes($uniloc)?>" type="text" autocomplete="on" placeholder="Address"/></div>
          <div class="inputField education"><input name="hilvl" value="<?=addslashes($hilvl)?>" type="text" autocomplete="on" placeholder="Highest Level Attained"/></div>
          <div class="inputField education">
            <br><span>Start Date:</span>
            <input name="uyrstrt" value="<?=addslashes($uyrstrt)?>" type="date" autocomplete="on" placeholder="Start Date"/>
          </div>
          <div class="inputField education">
            <br><span>End Date:</span><br>
            <input name="uyrend" value="<?=addslashes($uyrend)?>" type="date" autocomplete="on" placeholder="End Date"/>
          </div>
          <div class="inputField education">
            <span>Did You Graduate:</span><br>
            <label>Yes</label><input name="grad2" type="radio" value=0 <?php if($grad2 == 0) echo "checked";?>/><br>
            <label>No</label><input name="grad2" type="radio" value=1 <?php if($grad2 == 1) echo "checked";?>/>
          </div>
          <!-- References Inputs -->
          <!-- Reference #1 -->
          <div class="inputField references">
            <span style="font-size:18pt;">Reference #1:</span>
            <input name="ref1" value="<?=addslashes($ref1)?>" type="text" autocomplete="on" placeholder="Name"/>
          </div>
          <div class="inputField references"><input name="rnum1" value="<?=addslashes($rnum1)?>" type="tel" autocomplete="on" placeholder="Phone Number"/></div>
          <div class="inputField references"><input name="raddr" value="<?=addslashes($raddr)?>" type="text" autocomplete="on" placeholder="Address"/></div>
          <div class="inputField references"><input name="deal1" value="<?=addslashes($deal1)?>" type="text" autocomplete="on" placeholder="Relationship"/></div>
          <div class="inputField references"><input name="yrsknown" value="<?=addslashes($yrsknown)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Number of Years Known"/></div>
          <div class="inputField references"><input name="rjob" value="<?=addslashes($rjob)?>" type="text" autocomplete="on" placeholder="Job Title"/></div>
          <!-- Reference #2 -->
          <div class="inputField references"><br>
            <span style="font-size:18pt;">Reference #2:</span>
            <input name="ref2" value="<?=addslashes($ref22)?>" type="text" autocomplete="on" placeholder="Name"/>
          </div>
          <div class="inputField references"><input name="rnum2" value="<?=addslashes($rnum2)?>" type="tel" autocomplete="on" placeholder="Phone Number"/></div>
          <div class="inputField references"><input name="raddr2" value="<?=addslashes($raddr2)?>" type="text" autocomplete="on" placeholder="Address"/></div>
          <div class="inputField references"><input name="deal2" value="<?=addslashes($deal2)?>" type="text" autocomplete="on" placeholder="Relationship"/></div>
          <div class="inputField references"><input name="yrsknown2" value="<?=addslashes($yrsknown2)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Number of Years Known"/></div>
          <div class="inputField references"><input name="rjob2" value="<?=addslashes($rjob2)?>" type="text" autocomplete="on" placeholder="Job Title"/></div>
          <!-- Reference #3 -->
          <div class="inputField references"><br>
            <span style="font-size:18pt;">Reference #3:</span>
            <input name="ref3" value="<?=addslashes($ref3)?>" type="text" autocomplete="on" placeholder="Name"/>
          </div>
          <div class="inputField references"><input name="rnum3" value="<?=addslashes($rnum3)?>" type="tel" autocomplete="on" placeholder="Phone Number"/></div>
          <div class="inputField references"><input name="raddr3" value="<?=addslashes($raddr3)?>" type="text" autocomplete="on" placeholder="Address"/></div>
          <div class="inputField references"><input name="deal3" value="<?=addslashes($deal3)?>" type="text" autocomplete="on" placeholder="Relationship"/></div>
          <div class="inputField references"><input name="yrsknown3" value="<?=addslashes($yrsknown3)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Number of Years Known"/></div>
          <div class="inputField references"><input name="rjob3" value="<?=addslashes($rjob3)?>" type="text" autocomplete="on" placeholder="Job Title"/></div>
          <!-- Availabilty Inputs -->
          <div class="inputField availability">
            <span style="font-size:18pt;">Monday</span><br>
            <span>From:</span>
            <input name="mstrt" value="<?=addslashes($mstrt)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="mend" value="<?=addslashes($mend)?>" type="time" autocomplete="on"/>
          </div>
          <div class="inputField availability"><br>
            <span style="font-size:18pt;">Tuesday</span><br>
            <span>From:</span>
            <input name="tstrt" value="<?=addslashes($tstrt)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="tend" value="<?=addslashes($tend)?>" type="time" autocomplete="on"/>
          </div>
          <div class="inputField availability"><br>
            <span style="font-size:18pt;">Wednesday</span><br>
            <span>From:</span>
            <input name="wstrt" value="<?=addslashes($wstrt)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="wend" value="<?=addslashes($wend)?>" type="time" autocomplete="on"/>
          </div>
          <div class="inputField availability"><br>
            <span style="font-size:18pt;">Thursday</span><br>
            <span>From:</span>
            <input name="thstrt" value="<?=addslashes($thstrt)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="thend" value="<?=addslashes($thend)?>" type="time" autocomplete="on"/>
          </div>
          <div class="inputField availability"><br>
            <span style="font-size:18pt;">Friday</span><br>
            <span>From:</span>
            <input name="fstrt" value="<?=addslashes($fstrt)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="fend" value="<?=addslashes($fend)?>" type="time" autocomplete="on"/>
          </div>
          <div class="inputField availability"><br>
            <span style="font-size:18pt;">Saturday</span><br>
            <span>From:</span>
            <input name="sstrt" value="<?=addslashes($sstrt)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="send" value="<?=addslashes($send)?>" type="time" autocomplete="on"/>
          </div>
          <div class="inputField availability"><br>
            <span style="font-size:18pt;">Sunday</span><br>
            <span>From:</span>
            <input name="sstrt2" value="<?=addslashes($sstrt2)?>" type="time" autocomplete="on"/><br>
            <span>To:</span>
            <input name="send2" value="<?=addslashes($send2)?>" type="time" autocomplete="on"/>
          </div>
          <!-- Miscellaneous inputs -->
          <div class="inputField miscellaneous bottomSpacing1">
            <span>Are you a Canadian citizen?</span><br>
            <label>Yes</label><input name="citizen" type="radio" value=0 <?php if($citizen == 0) echo "checked";?>/><br>
            <label>No</label><input name="citizen" type="radio" value=1 <?php if($citizen == 1) echo "checked";?>/>
          </div>
          <div class="inputField miscellaneous bottomSpacing1">
            <span>Are you of legal working age?</span><br>
            <label>Yes</label><input name="legal2" type="radio" value=0 <?php if($legal2 == 0) echo "checked";?>/><br>
            <label>No</label><input name="legal2" type="radio" value=1 <?php if($legal2 == 1) echo "checked";?>/>
          </div>
          <div class="inputField miscellaneous bottomSpacing1">
            <span>Are you legally entitled to work in this province?</span><br>
            <label>Yes</label><input name="legal" type="radio" value=0 <?php if($legal == 0) echo "checked";?>/><br>
            <label>No</label><input name="legal" type="radio" value=1 <?php if($legal == 0) echo "checked";?>/>
          </div>
          <div class="inputField miscellaneous">
            <span>Have you ever been convicted of a crime:</span><br>
            <label>Yes</label><input id="convictedCrime" name="crime" type="radio" value=0 <?php if($crime == 0) echo "checked";?>/><br>
            <label>No</label><input id="convictedCrime" name="crime" type="radio" value=1 <?php if($crime == 1) echo "checked";?>/>
            <input name="crime2" value="<?=addslashes($crime2)?>" type="text" autocomplete="on" placeholder="If yes, please explain" />
          </div>
          <div class="inputField miscellaneous"><input name="dpay" value="<?=addslashes($dpay)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Desired Salary (Per Week)"/></div>
          <div class="inputField miscellaneous"><input name="wpay" value="<?=addslashes($wpay)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Desired Salary (Per Hour)"/></div>
           <div class="inputField miscellaneous"><span>Date Available to Start Work</span><input name="sdate" value="<?=addslashes($sdate)?>" type="date" step="any" min="0" autocomplete="on"/></div>
          <div class="inputField miscellaneous"><input name="workhr" value="<?=addslashes($workhr)?>" type="number" step="any" min="0" autocomplete="on" placeholder="Hours Per Week You Expect To Work"/></div>
          <div class="inputField miscellaneous bottomSpacing1">
            <span>What type of work:</span><br>
            <label>Full-Time</label><input name="jobt" type="radio" value=0 <?php if($jobt == 0) echo "checked";?>/><br>
            <label>Part-Time</label><input name="jobt" type="radio" value=1 <?php if($jobt == 1) echo "checked";?>/><br>
            <label>Temporary/Seasonal</label><input name="jobt" type="radio" value=2 <?php if($jobt == 2) echo "checked";?>/>
          </div>
          <div class="inputField miscellaneous">
            <span>What field are you most likely to work in:</span><br>
            <label>Business</label><input id="workType" name="wfld" type="radio" value=0 <?php if($wfld == 0) echo "checked";?>/><br>
            <label>IT</label><input id="workType" name="wfld" type="radio" value=1 <?php if($wfld == 1) echo "checked";?>/><br>
            <label>Engineering</label><input id="workType" name="wfld" type="radio" value=2 <?php if($wfld == 2) echo "checked";?>/><br>
            <label>Life Science</label><input id="workType" name="wfld" type="radio" value=3 <?php if($wfld == 3) echo "checked";?>/><br>
            <label>Arts</label><input id="workType" name="wfld" type="radio" value=4 <?php if($wfld == 4) echo "checked";?>/><br>
            <label>Other</label><input name="owfld" value="<?=addslashes($owfld)?>" type="text" autocomplete="on" placeholder="" />
          </div><br>
          <div class="inputField miscellaneous">
            <span>What is your current GPA:</span><br>
            <input name="gpa" value="<?=addslashes($gpa)?>" type="number" step="any" min="0" autocomplete="on" placeholder=""/>
          </div>
          <div class="inputField miscellaneous">
            <span>Would you be interested in an unpaid co-op &#160;position:</span><br>
            <label>Yes</label><input name="fcoop" type="radio" value=0 "checked"/><br>
            <label>No</label><input name="fcoop" type="radio" value=1<?php if($fcoop == 1) echo "checked";?>/>
          </div>
          <div class="inputField miscellaneous">
            <input class="submit" type="submit" value="SUBMIT" />
          </div>
        </form>
      </div>
    </div>

</section>
</body>
<?=$base_footer?>

