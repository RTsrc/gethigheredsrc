<?php  
require_once 'common.php';
require_once'db.php';
dbConnect("higherdb");

$myuid = $_SESSION['sessuid'];

$query = "SELECT * from users WHERE uid = '$myuid'";

$result = mysql_query($query) or die('Error, query failed');

if (!$result || !mysql_num_rows($result)) {

    die('Empty set.' + $myuid);
}

$_POST['fname'] = mysql_result($result,0,'fname');
$_POST['lname'] = mysql_result($result,0,'lname');
$_POST['mname'] = mysql_result($result,0,'mname');
$_POST['pnum'] = mysql_result($result,0,'pnum');
$_POST['pnum2'] = mysql_result($result,0,'pnum2');
$_POST['email'] = mysql_result($result,0,'email');
$_POST['title'] = mysql_result($result,0,'title');
$_POST['title2'] = mysql_result($result,0,'title2');
$_POST['title3'] = mysql_result($result,0,'title3');
$_POST['jduty'] = mysql_result($result,0,'jduty');
$_POST['jduty2'] = mysql_result($result,0,'jduty2');
$_POST['jduty3'] = mysql_result($result,0,'jduty3');
$_POST['company'] = mysql_result($result,0,'company');
$_POST['company2']= mysql_result($result,0,'company2');
$_POST['company3'] = mysql_result($result,0,'company3');
$_POST['yrstart1'] = mysql_result($result,0,'yrstart1');
$_POST['yrend1'] = mysql_result($result,0,'yrend1');
$_POST['yrstart2'] = mysql_result($result,0,'yrstart2');
$_POST['yrend2'] = mysql_result($result,0,'yrend2');
$_POST['yrstart3'] = mysql_result($result,0,'yrstart3');
$_POST['yrend3'] = mysql_result($result,0,'yrend3');
$_POST['school']= mysql_result($result,0,'school');
$_POST['city'] = mysql_result($result,0,'city');
$_POST['prov'] = mysql_result($result,0,'prov');
$_POST['address'] = mysql_result($result,0,'address');
$_POST['boss'] = mysql_result($result,0,'boss');
$_POST['boss2']= mysql_result($result,0,'boss2');
$_POST['boss3'] = mysql_result($result,0,'boss3');
$_POST['go'] = mysql_result($result,0,'go');
$_POST['go2'] = mysql_result($result,0,'go2');
$_POST['go3'] = mysql_result($result,0,'go3');
$_POST['bnum'] = mysql_result($result,0,'bnum');
$_POST['bnum2'] = mysql_result($result,0,'bnum2');
$_POST['bnum3'] = mysql_result($result,0,'bnum3');
$_POST['caddr'] = mysql_result($result,0,'caddr');
$_POST['caddr2'] = mysql_result($result,0,'caddr2');
$_POST['caddr3'] = mysql_result($result,0,'caddr3');
$_POST['raddr'] = mysql_result($result,0,'raddr');
$_POST['raddr2']= mysql_result($result,0,'raddr2');
$_POST['raddr3'] = mysql_result($result,0,'raddr3');
$_POST['pay'] = mysql_result($result,0,'pay');
$_POST['pay2']  = mysql_result($result,0,'pay2');
$_POST['pay3'] = mysql_result($result,0,'pay3');
$_POST['dpay'] = mysql_result($result,0,'dpay');
$_POST['wpay'] = mysql_result($result,0,'wpay');
$_POST['ref1']= mysql_result($result,0,'ref1');
$_POST['ref2'] = mysql_result($result,0,'ref2');
$_POST['ref3'] = mysql_result($result,0,'ref3');
$_POST['rnum'] = mysql_result($result,0,'rnum');
$_POST['rnum2'] = mysql_result($result,0,'rnum2');
$_POST['rnum3'] = mysql_result($result,0,'rnum3');
$_POST['yrsknown'] = mysql_result($result,0,'yrsknown');
$_POST['yrsknown2'] = mysql_result($result,0,'yrsknown2');
$_POST['yrsknown3'] = mysql_result($result,0,'yrsknown3');
$_POST['deal'] = mysql_result($result,0,'relation');
$_POST['deal2']= mysql_result($result,0,'relation2');
$_POST['deal3'] = mysql_result($result,0,'relation3');
$_POST['pcode'] = mysql_result($result,0,'pcode');
$_POST['address2'] = mysql_result($result,0,'address2');
$_POST['uni'] = mysql_result($result,0,'uni');
$_POST['citizen'] = mysql_result($result,0,'citizen');
$_POST['legal'] = mysql_result($result,0,'legal');
$_POST['legal2'] = mysql_result($result,0,'legal2');
$_POST['workhr'] = mysql_result($result,0,'workhr');
$_POST['posn'] = mysql_result($result,0,'posn');
$_POST['sdate'] = mysql_result($result,0,'sdate');
$_POST['major'] = mysql_result($result,0,'major');
$_POST['hilvl'] = mysql_result($result,0,'hilvl');
$_POST['mstrt'] = mysql_result($result,0,'mstrt');
$_POST['tstrt'] = mysql_result($result,0,'tstrt');
$_POST['wstrt']= mysql_result($result,0,'wstrt');
$_POST['thstrt'] = mysql_result($result,0,'thstrt');
$_POST['fstrt'] = mysql_result($result,0,'fstrt');
$_POST['sstrt'] = mysql_result($result,0,'sstrt');
$_POST['sstrt2'] = mysql_result($result,0,'sstrt2');
$_POST['mend'] = mysql_result($result,0,'mend');
$_POST['tend'] = mysql_result($result,0,'tend');
$_POST['wend'] = mysql_result($result,0,'wend');
$_POST['thend'] = mysql_result($result,0,'thend');
$_POST['fend'] = mysql_result($result,0,'fend');
$_POST['send'] = mysql_result($result,0,'send');
$_POST['send2'] = mysql_result($result,0,'send2');
$_POST['hiloc'] = mysql_result($result,0,'hiloc');
$_POST['uniloc'] = mysql_result($result,0,'uniloc');
$_POST['efname']= mysql_result($result,0,'efname');
$_POST['elname']= mysql_result($result,0,'elname');
$_POST['epnum'] = mysql_result($result,0,'epnum');
$_POST['jobt'] = mysql_result($result,0,'jobt');
$_POST['grad'] = mysql_result($result,0,'grad');
$_POST['grad2'] = mysql_result($result,0,'grad2');
$_POST['ctype'] = mysql_result($result,0,'ctype');
$_POST['ctype2'] = mysql_result($result,0,'ctype2');
$_POST['ctype3'] = mysql_result($result,0,'ctype3');
$_POST['syrstrt'] = mysql_result($result,0,'syrstrt');
$_POST['syrend'] = mysql_result($result,0,'syrend');
$_POST['uyrstrt'] = mysql_result($result,0,'uyrstrt');
$_POST['uyrend'] = mysql_result($result,0,'uyrend');
$_POST['contact1'] = mysql_result($result,0,'contact1');
$_POST['contact2'] = mysql_result($result,0,'contact2');
$_POST['contact3'] = mysql_result($result,0,'contact3');
$_POST['goal'] = mysql_result($result,0,'goal');

/*$go = mysql_result($result,0,'go');
$pay = mysql_result($result,0,'pay');
$ref = mysql_result($result,0,'ref');
$rnum = mysql_result($result,0,'rnum');
$yrsknown = mysql_result($result,0,'yrsknown');
$postal = mysql_result($result,0,'postal');
$unit = mysql_result($result,0,'unit');
$uni = mysql_result($result,0,'uni');
$citizen = mysql_result($result,0,'citizen');
$legal = mysql_result($result,0,'legal');
$legal2 = mysql_result($result,0,'legal2');
$whr = mysql_result($result,0,'whr');
$sdate = mysql_result($result,0,'sdate');
$maj = mysql_result($result,0,'maj');
$hilvl = mysql_result($result,0,'hilvl');
$epnum = mysql_result($result,0,'epnum');
$hloc = mysql_result($result,0,'hloc');
$uloc = mysql_result($result,0,'uloc');
$oref = mysql_result($result,0,'oref');
$hobby = mysql_result($result,0,'hobby');
$friend = mysql_result($result,0,'friend');
$skill = mysql_result($result,0,'skill');
$award = mysql_result($result,0,'award');
$excuse = mysql_result($result,0,'excuse');
$hloc = mysql_result($result,0,'hloc');
$uloc = mysql_result($result,0,'uloc');
$epnum = mysql_result($result,0,'epnum');
$jobt = mysql_result($result,0,'jobt');
$ctype = mysql_result($result,0,'ctype');
$ctype2 = mysql_result($result,0,'ctype2');
$ctype3 = mysql_result($result,0,'ctype3');
$syrstrt = mysql_result($result,0,'syrstrt');
$syrend = mysql_result($result,0,'syrend');
$uyrstrt = mysql_result($result,0,'uyrstrt');
$uyrend = mysql_result($result,0,'uyrend');
$crime = mysql_result($result,0,'crime');
$cont1 = mysql_result($result,0,'cont1');
$cont2 = mysql_result($result,0,'cont2');
$cont3 = mysql_result($result,0,'cont3');
$goal = mysql_result($result,0,'goal');
$aposn = mysql_result($result,0,'aposn');
$orest = mysql_result($result,0,'orest');
$alco = mysql_result($result,0,'alco');
$alco2 = mysql_result($result,0,'alco2');
$whmis = mysql_result($result,0,'whmis');
$ajob = mysql_result($result,0,'ajob');
$atrans = mysql_result($result,0,'atrans');
$pjob = mysql_result($result,0,'pjob');
$fjob = mysql_result($result,0,'fjob');
$cmmt = mysql_result($result,0,'cmmt');
$hday = mysql_result($result,0,'hday');
$flex = mysql_result($result,0,'flex');
$empl = mysql_result($result,0,'empl');
$jreq = mysql_result($result,0,'jreq');
$welc = mysql_result($result,0,'welc');
$efunc = mysql_result($result,0,'efunc');
$sreq = mysql_result($result,0,'sreq');
$reloc = mysql_result($result,0,'reloc');
$ojob = mysql_result($result,0,'ojob');
$rjob = mysql_result($result,0,'rjob');
$rjob2 = mysql_result($result,0,'rjob2');
$rjob3 = mysql_result($result,0,'rjob3');
$papp = mysql_result($result,0,'papp');
$ehist = mysql_result($result,0,'ehist');
$echild = mysql_result($result,0,'echild');
$hear = mysql_result($result,0,'hear');
$demp = mysql_result($result,0,'demp');
$dposn = mysql_result($result,0,'dposn');
$wwrk = mysql_result($result,0,'wwrk');
$npname = mysql_result($result,0,'npname');
$coname = mysql_result($result,0,'coname');
$eaname = mysql_result($result,0,'eaname');
$adname = mysql_result($result,0,'adname');
$ername = mysql_result($result,0,'ername');
$scname = mysql_result($result,0,'scname');
$cont1 = mysql_result($result,0,'cont1');
$cont2 = mysql_result($result,0,'cont2');
$cont3 = mysql_result($result,0,'cont3');
$ovrtm = mysql_result($result,0,'ovrtm');
$arprev = mysql_result($result,0,'arprev');
$dept = mysql_result($result,0,'dept');
$arexp = mysql_result($result,0,'arexp');
$arwhy = mysql_result($result,0,'arwhy');
$cstsrv = mysql_result($result,0,'cstsrv');
$bpos = mysql_result($result,0,'bpos');
$btrans = mysql_result($result,0,'btrans');
$otrain = mysql_result($result,0,'otrain');
$bage = mysql_result($result,0,'bage');
$bage2 = mysql_result($result,0,'bage2');
$bage3 = mysql_result($result,0,'bage3');
$bprev = mysql_result($result,0,'bprev');
$fun = mysql_result($result,0,'fun');
$lposn = mysql_result($result,0,'lposn');
$bhear = mysql_result($result,0,'bhear');
$rskill = mysql_result($result,0,'rskill');
$attach = mysql_result($result,0,'attach');
$remp = mysql_result($result,0,'remp');
$premp = mysql_result($result,0,'premp');
$sernum = mysql_result($result,0,'sernum');
$serstrt = mysql_result($result,0,'serstrt');
$serend = mysql_result($result,0,'serend');
$sernum2 = mysql_result($result,0,'sernum2');
$serstrt2 = mysql_result($result,0,'serstrt2');
$serend2 = mysql_result($result,0,'serend2');
$sernum3 = mysql_result($result,0,'sernum3');
$serstrt3 = mysql_result($result,0,'serstrt3');
$serend3 = mysql_result($result,0,'serend3');
$sernum4 = mysql_result($result,0,'sernum4');
$serstrt4 = mysql_result($result,0,'serstrt4');
$serend4 = mysql_result($result,0,'serend4');
$cedu = mysql_result($result,0,'cedu');
$cpos = mysql_result($result,0,'cpos');
$cfpos = mysql_result($result,0,'cfpos');
$cloc = mysql_result($result,0,'cloc');
$inter = mysql_result($result,0,'inter');
$hear2 = mysql_result($result,0,'hear2');
$lift = mysql_result($result,0,'lift');
$clean = mysql_result($result,0,'clean');
$cftrans = mysql_result($result,0,'cftrans');
$creloc = mysql_result($result,0,'creloc');
$cotrain = mysql_result($result,0,'cotrain');
$premp2 = mysql_result($result,0,'premp2');
$remp2 = mysql_result($result,0,'remp2');
$copos = mysql_result($result,0,'copos');
$cprevw = mysql_result($result,0,'cprevw');
$lang = mysql_result($result,0,'lang');
$cnloc = mysql_result($result,0,'cnloc');
$ipref = mysql_result($result,0,'ipref');
$ipref2 = mysql_result($result,0,'ipref2');
$dipos = mysql_result($result,0,'dipos');
$pprevw = mysql_result($result,0,'pprevw');
$dpos = mysql_result($result,0,'dpos');
$dhear = mysql_result($result,0,'dhear');
$late = mysql_result($result,0,'late');
$cemp = mysql_result($result,0,'cemp');
$cemp2 = mysql_result($result,0,'cemp2');
$enroll = mysql_result($result,0,'enroll');
$sret = mysql_result($result,0,'sret');
$licnum = mysql_result($result,0,'licnum');
$lprov = mysql_result($result,0,'lprov');
$lexp = mysql_result($result,0,'lexp');
$olicnum = mysql_result($result,0,'olicnum');
$olprov = mysql_result($result,0,'olprov');
$olexp = mysql_result($result,0,'olexp');
$vio = mysql_result($result,0,'vio');
$polnum = mysql_result($result,0,'polnum');
$efdate = mysql_result($result,0,'efdate');
$epdate = mysql_result($result,0,'epdate');
$libcov = mysql_result($result,0,'libcov');
$lyrs = mysql_result($result,0,'lyrs');
$lmths = mysql_result($result,0,'lmths');
$midmane = mysql_result($result,0,'midmane');
$gpa = mysql_result($result,0,'gpa');
$wfld = mysql_result($result,0,'wfld');
$fcoop = mysql_result($result,0,'fcoop');
$owfld = mysql_result($result,0,'owfld');
$jobttl = mysql_result($result,0,'jobttl');
$jobtt2 = mysql_result($result,0,'jobtt2');
$jobtt3 = mysql_result($result,0,'jobtt3');
$boss1 = mysql_result($result,0,'boss1');
$boss2 = mysql_result($result,0,'boss2');
$boss3 = mysql_result($result,0,'boss3');
$cont1 = mysql_result($result,0,'cont1');
$cont2 = mysql_result($result,0,'cont2');
$cont3 = mysql_result($result,0,'cont3');
$yrsknown1 = mysql_result($result,0,'yrsknown1');
$yrsknown2 = mysql_result($result,0,'yrsknown2');
$yrsknown3 = mysql_result($result,0,'yrsknown3');
$ref1 = mysql_result($result,0,'ref1');
$ref2 = mysql_result($result,0,'ref2');
$jduty1 = mysql_result($result,0,'jduty1');
$jduty2 = mysql_result($result,0,'jduty2');
$jduty3 = mysql_result($result,0,'jduty3');
$title2 = mysql_result($result,0,'title2');
$title3 = mysql_result($result,0,'title3');
$rnum1 = mysql_result($result,0,'rnum1');
$oref = mysql_result($result,0,'oref');
$hobby = mysql_result($result,0,'hobby');
$friend = mysql_result($result,0,'friend');
$skillz = mysql_result($result,0,'skillz');
$award = mysql_result($result,0,'award');
$excuse = mysql_result($result,0,'excuse');
$pcode = mysql_result($result,0,'pcode');
$address2 = mysql_result($result,0,'address2');
$workhr = mysql_result($result,0,'workhr');
$major = mysql_result($result,0,'major');
$sstrt2 = mysql_result($result,0,'sstrt2');
$send2 = mysql_result($result,0,'send2');
$skillz = mysql_result($result,0,'skillz');
$hiloc = mysql_result($result,0,'hiloc');
$uniloc = mysql_result($result,0,'uniloc');
$crime2 = mysql_result($result,0,'crime2');*/
$formsave = mysql_result($result,0,'formsave');
$sharetracker = mysql_result($result,0,'sharetracker');

$result = mysql_query("SELECT uid,app1,app2,app3,app4,app5,app6,app7,app8,app9,app10 from users WHERE uid = '$myuid'");
$approw = mysql_fetch_row($result);

if (!$result || !mysql_num_rows($result)) {

    die('Empty set.' + $myuid);
}

$app1 = $approw[1];
$app2 = $approw[2];
$app3 = $approw[3];
$app4 = $approw[4];
$app5 = $approw[5];
$app6 = $approw[6];
$app7 = $approw[7];
$app8 = $approw[8];
$app9 = $approw[9];
$app10 = $approw[10];
?>