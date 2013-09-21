<?php  session_start();
//DO NOT CHANGE THIS FILE!!!
require_once('fpdf.php');
require_once('fpdi.php');
$data=$_POST["appnum"];
$datalst=array('awcont.php', 'alicecont.php', 'aecont.php', 'armacont.php','bmcont.php','libcont.php', 'cfcont.php', 'coracont.php', 'daisocont.php','pizzacont.php', 'timcont.php','jrnycont.php','eddiecont.php','tbellcont.php','tlibcont.php','wmartcont.php','cjoecont.php','swaycont.php','earlcont.php','paycont.php','toyscont.php','searscont.php','stskycont.php','zehrscont.php','mmartcont.php','ttccont.php','mnmcont.php','firkcont.php','rlobcont.php','ebgcont.php');
$applst=array('A&W.pdf','Alice_Faz.pdf','AE.pdf','Aroma.pdf','Blue Mountain.pdf','Brampton Library.pdf',
	'Cara foods.pdf','Cora.pdf','Daiso.pdf','dominos.pdf', 'Tim Hortons.pdf','Journeys.pdf','eddiebauer.pdf',
	'Taco Bell.pdf','Toronto Public Library.pdf','Walmart PDF Application.pdf','Crabby Joe\'s.pdf','Subway.pdf',
	'Earl\'s.pdf','payless.pdf','Toys R Us.pdf','Sears.pdf','Starsky.pdf','Zehrs.pdf','Money Mart.pdf','TTC.pdf','M&M.pdf','Firkin.pdf','Red Lobster.pdf','ebgames.pdf');
$database=$datalst[$data];
require($database);
$appname=$applst[$data];
$type_str=array('filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 'flags' => FILTER_FLAG_NO_ENCODE_QUOTES);
$type_num=array('filter' => FILTER_SANITIZE_NUMBER_INT);//number-like: phone, # of yrs
$type_email=array('filter' => FILTER_SANITIZE_EMAIL);
$type_int=$type_num;//should be more strict
$post=filter_var_array($_POST, array(//hard-code data types
	'fname'	=> $type_str,
	'lname'	=> $type_str,
	'mname'	=> $type_str,
	'pnum' => $type_num,
	'pnum2' => $type_num,
	'email' => $type_email,
	'title' => $type_str,
	'title2' => $type_str,
	'title3' => $type_str,
	'jduty' => $type_str,
	'jduty2' => $type_str,
	'jduty3' => $type_str,
	'company' => $type_str,
	'company2' => $type_str,
	'company3' => $type_str,
	'yrstart1' => $type_int,
	'yrend1' => $type_int,
	'yrstart2' => $type_int,
	'yrend2' => $type_int,
	'yrstart3' => $type_int,
	'yrend3' => $type_int,
	'school' => $type_str,
	'city' => $type_str,
	'prov' => $type_str,
	'address' => $type_str,
	'boss' => $type_str,
	'boss2' => $type_str,
	'boss3' => $type_str,
	'go' => $type_str,
	'go2' => $type_str,
	'go3' => $type_str,
	'bnum' => $type_num,
	'bnum2' => $type_num,
	'bnum3' => $type_num,
	'caddr' => $type_str,
	'caddr2' => $type_str,
	'caddr3' => $type_str,
	'raddr' => $type_str,
	'raddr2' => $type_str,
	'raddr3' => $type_str,
	'pay' => $type_str,
	'pay2' => $type_str,
	'pay3' => $type_str,
	'dpay' => $type_str,
	'ref1' => $type_str,
	'ref2' => $type_str,
	'ref3' => $type_str,
	'rnum1' => $type_num,
	'rnum2' => $type_num,
	'rnum3' => $type_num,
	'yrsknown' => $type_str,
	'yrsknown2' => $type_str,
	'yrsknown3' => $type_str,
	'deal1' => $type_str,
	'deal2' => $type_str,
	'deal3' => $type_str,
	'pcode' => $type_str,
	'address2' => $type_str,
	'uni' => $type_str,
	'citizen' => $type_str,
	'legal' => $type_str,
	'legal2' => $type_str,
	'workhr' => $type_str,
	'posn' => $type_str,
	'sdate' => $type_str,
	'major' => $type_str,
	'hilvl' => $type_str,
	'mstrt' => $type_str,
	'tstrt' => $type_str,
	'wstrt' => $type_str,
	'thstrt' => $type_str,
	'fstrt' => $type_str,
	'sstrt' => $type_str,
	'sstrt2' => $type_str,
	'mend' => $type_str,
	'tend' => $type_str,
	'wend' => $type_str,
	'thend' => $type_str,
	'fend' => $type_str,
	'send' => $type_str,
	'send2' => $type_str,
	'oref' => $type_str,
	'hobby' => $type_str,
	'friend' => $type_str,
	'skillz' => $type_str,
	'award' => $type_str,
	'excuse' => $type_str,
	'hiloc' => $type_str,
	'uniloc' => $type_str,
	'efname' => $type_str,
	'elname' => $type_str,
	'epnum' => $type_num,
	'jobt' => $type_str,
	'grad' => $type_str,
	'grad2' => $type_str,
	'ctype' => $type_str,
	'ctype2' => $type_str,
	'ctype3' => $type_str,
	'syrstrt' => $type_str,
	'syrend' => $type_str,
	'uyrstrt' => $type_str,
	'uyrend' => $type_str,
	'crime' => $type_str,
	'contact1' => $type_str,
	'contact2' => $type_str,
	'contact3' => $type_str,
	'goal' => $type_str,
	'apos' => $type_str,
	'rest' => $type_str,
	'alco' => $type_str,
	'alco2' => $type_str,
	'whmis' => $type_str,
	'ajob' => $type_str,
	'atrans' => $type_str,
	'pjob' => $type_str,
	'fjob' => $type_str,
	'commit' => $type_str,
	'hday' => $type_str,
	'flex' => $type_str,
	'empl' => $type_str,
	'jreq' => $type_str,
	'welc' => $type_str,
	'efunc' => $type_str,
	'sreq' => $type_str,
	'reloc' => $type_str,
	'ojob' => $type_str,
	'rjob' => $type_str,
	'rjob2' => $type_str,
	'papp' => $type_str,
	'ehist' => $type_str,
	'echild' => $type_str,
	'hear' => $type_str,
	'demp' => $type_str,
	'dposn' => $type_str,
	'wwrk' => $type_str,
	'npname' => $type_str,
	'coname' => $type_str,
	'eaname' => $type_str,
	'adname' => $type_str,
	'ername' => $type_str,
	'scname' => $type_str,
	'ovrtm' => $type_str,
	'arprev' => $type_str,
	'dept' => $type_str,
	'arexp' => $type_str,
	'arwhy' => $type_str,
	'cstsrv' => $type_str,
	'bpos' => $type_str,
	'btrans' => $type_str,
	'otrain' => $type_str,
	'bage' => $type_str,
	'bage2' => $type_str,
	'bage3' => $type_str,
	'bprev' => $type_str,
	'fun' => $type_str,
	'lposn' => $type_str,
	'bhear' => $type_str,
	'rskill' => $type_str,
	'attach' => $type_str,
	'remp' => $type_str,
	'premp' => $type_str,
	'sernum' => $type_num,
	'serstrt' => $type_str,
	'serend' => $type_str,
	'sernum2' => $type_num,
	'serstrt2' => $type_str,
	'serend2' => $type_str,
	'sernum3' => $type_num,
	'serstrt3' => $type_str,
	'serend3' => $type_str,
	'sernum4' => $type_num,
	'serstrt4' => $type_str,
	'serend4' => $type_str,
	'cedu' => $type_str,
	'cpos' => $type_str,
	'cfpos' => $type_str,
	'cloc' => $type_str,
	'inter' => $type_str,
	'hear2' => $type_str,
	'lift' => $type_str,
	'clean' => $type_str,
	'cftrans' => $type_str,
	'creloc' => $type_str,
	'cotrain' => $type_str,
	'premp2' => $type_str,
	'remp2' => $type_str,
	'copos' => $type_str,
	'cprev' => $type_str,
	'lang' => $type_str,
	'cnloc' => $type_str,
	'ipref' => $type_str,
	'ipref2' => $type_str,
	'dipos' => $type_str,
	'prevw' => $type_str,
	'dpos' => $type_str,
	'dhear' => $type_str,
	'late' => $type_str,
	'cemp' => $type_str,
	'cemp2' => $type_str,
	'enroll' => $type_str,
	'sret' => $type_str,
	'licnum' => $type_num,
	'lprov' => $type_str,
	'lexp' => $type_str,
	'olicnum' => $type_num,
	'olprov' => $type_str,
	'olexp' => $type_str,
	'vio' => $type_str,
	'polnum' => $type_num,
	'efdate' => $type_str,
	'epdate' => $type_str,
	'libcov' => $type_str,
	'liveyrs' => $type_str,
	'livemth' => $type_str,
    'haymaker' => $type_str
));

//form info
if($data==1){
	$aposn=$post["apos"];
	$orest=$post["rest"];
	$alco=$post["alco"];
	$alco2=$post["alco2"];
	$whmis=$post["whmis"];
	$ajob=$post["ajob"];
	$atrans=$post["atrans"];
	$pjob=$post["pjob"];
	$fjob=$post["fjob"];
	$cmmt=$post["commit"];
	$hday=$post["hday"];
	$flex=$post["flex"];
	$empl=$post["empl"];
	$jreq=$post["jreq"];
	$welc=$post["welc"];
	$efunc=$post["efunc"];
	$sreq=$post["sreq"];
}else{
	$aposn=0;
	$orest=0;
	$alco=0;
	$alco2=0;
	$whmis=0;
	$ajob=0;
	$atrans=0;
	$pjob=0;
	$fjob=0;
	$cmmt=0;
	$hday=0;
	$flex=0;
	$empl=0;
	$jreq=0;
	$welc=0;
	$efunc=0;
	$sreq=0;
}
if($data==2){
	$reloc=$post["reloc"];
	$ojob=$post["ojob"];
	$rjob=$post["rjob"];
	$rjob2=$post["rjob2"];
	$papp=$post["papp"];
	$ehist=$post["ehist"];
	$echild=$post["echild"];
	$hear=$post["hear"];
	$demp=$post["demp"];
	$dposn=$post["dposn"];
	$wwrk=$post["wwrk"];
	$npname=$post["npname"];
	$coname=$post["coname"];
	$eaname=$post["eaname"];
	$adname=$post["adname"];
	$ername=$post["ername"];
	$scname=$post["scname"];;
}else{
	$reloc=0;
	$ojob=0;
	$rjob=0;
	$rjob2=0;
	$papp=0;
	$ehist=0;
	$echild=0;
	$hear=0;
	$demp=0;
	$dposn=0;
	$wwrk=0;
	$npname=0;
	$coname=0;
	$eaname=0;
	$adname=0;
	$scname=0;
	$ername=0;
}
if($data==3){
	if($contact1==0){
		$contact1='Yes';
	}else{
		$contact1='No';
	}
	if($contact2==0){
		$contact2='Yes';
	}else{
		$contact2='No';
	}
	if($contact3==0){
		$contact3='Yes';
	}else{
		$contact3='No';
	}
	$ovrtm=$post["ovrtm"];
	$arprev=$post["arprev"];
	$dept=$post["dept"];
	$arexp=$post["arexp"];
	$arwhy=$post["arwhy"];
    $armapos=$post["haymaker"];
	$cstsrv=$post["cstsrv"];
}else{
	$ovrtm=0;
	$arprev=0;
    $dept=0;
	$arexp=0;
	$arwhy=0;
    $armapos=0;
	$cstsrv=0;
}
$namelst=array($npname,$coname,$eaname,$adname,$scname,$ername,'');
if($data==4){
	$bpos=$post["bpos"];
	$btrans=$post["btrans"];
	$otrain=$post["otrain"];
	$bage=$post["bage"];
	$bage2=$post["bage2"];
	$bage3=$post["bage3"];
	$bprev=$post["bprev"];
    $prev2=$_POST["prev2"];
	$fun=$post["fun"];
    $spos=$_POST["spos"];
    $when=$_POST["when"];
    $pdiv=$_POST["pdiv"];
    $accom=$_POST["accom"];
    $allyr=$_POST["allyr"];
    $prthr=$_POST["prtday"];
    $prtday=$_POST["prthr"];
    $seaswrk=$_POST["seaswrk"];
}else{
	$btrans=0;
	$bage=0;
	$bage2=0;
	$bage3=0;
	$bpos=0;
	$otrain=0;
	$bprev=0;
    $prev2=0;
	$fun=0;
    $accom=0;
    $allyr=0;
    $prthr=0;
    $prtday=0;
    $seaswrk=0;
}
if($data==5){
	$lposn=$post["lposn"];
	$bhear=$post["bhear"];
	$rskill=$post["rskill"];
	$attach=$post["attach"];
	$remp=$post["remp"];
	$premp=$post["premp"];
	$sernum=$post["sernum"];
	$serstrt=$post["serstrt"];
	$serend=$post["serend"];
	$sernum2=$post["sernum2"];
	$serstrt2=$post["serstrt2"];
	$serend2=$post["serend2"];
	$sernum3=$post["sernum3"];
	$serstrt3=$post["serstrt3"];
	$serend3=$post["serend3"];
	$sernum4=$post["sernum4"];
	$serstrt4=$post["serstrt4"];
	$serend4=$post["serend4"];
}else{
	$lposn=0;
	$bhear=0;
	$rskill=0;
	$attach=0;
	$remp=0;
	$premp=0;
	$sernum=0;
	$serstrt=0;
	$serend=0;
	$sernum2=0;
	$serstrt2=0;
	$serend2=0;
	$sernum3=0;
	$serstrt3=0;
	$serend3=0;
	$sernum4=0;
	$serstrt4=0;
	$serend4=0;
}
if($data==6){
	$cedu=$post["cedu"];
	$cpos=$post["cpos"];
	$cfpos=$post["cfpos"];
	$cloc=$post["cloc"];
	$inter=$post["inter"];
	$hear2=$post["hear2"];
	$lift=$post["lift"];
	$clean=$post["clean"];
	$cftrans=$post["cftrans"];
	$creloc=$post["creloc"];
	$cotrain=$post["cotrain"];
	$premp2=$post["premp2"];
	$remp2=$post["remp2"];
}else{
	$cedu=0;
	$cpos=0;
	$cfpos=0;
	$cloc=0;
	$inter=0;
	$hear2=0;
	$lift=0;
	$clean=0;
	$cftrans=0;
	$creloc=0;
	$cotrain=0;
	$premp2=0;
	$remp2=0;
}
if($data==7){
	$copos=$post["copos"];
	$cprevw=$post["cprev"];
	$lang=$post["lang"];
    $olang=$_POST["olang"];
	$cnloc=$post["cnloc"];
}else{
	$copos=0;
	$lang=0;
	$cprevw=0;
    $olang=0;
	$cnloc=0;
}
if($data==8){
	$ipref=$post["ipref"];
	$ipref2=$post["ipref2"];
	$dipos=$post["dipos"];
	$pprevw=$post["prevw"];
    $allpref=$_POST["allpref"];
}else{
	$ipref=0;
	$ipref2=0;
	$dipos=0;
	$pprevw=0;
    $allpref=0;
}
if($data==9){
	$dpos=$post["dpos"];
	$dhear=$post["dhear"];
	$late=$post["late"];
	$cemp=$post["cemp"];
	$cemp2=$post["cemp2"];
	$enroll=$post["enroll"];
	$sret=$post["sret"];
	$licnum=$post["licnum"];
	$lprov=$post["lprov"];
	$lexp=$post["lexp"];
	$olicnum=$post["olicnum"];
	$olprov=$post["olprov"];
	$olexp=$post["olexp"];
	$vio=$post["vio"];
	$polnum=$post["polnum"];
	$efdate=$post["efdate"];
	$epdate=$post["epdate"];
	$libcov=$post["libcov"];
	$lyrs=$post["liveyrs"];
	$lmths=$post["livemth"];
}else{
	$dpos=0;
	$dhear=0;
	$late=0;
	$cemp=0;
	$cemp2=0;
	$enroll=0;
	$sret=0;
	$licnum=0;
	$lprov=0;
	$lexp=0;
	$olicnum=0;
	$olprov=0;
	$olexp=0;
	$vio=0;
	$polnum=0;
	$efdate=0;
	$epdate=0;
	$libcov=0;
	$lyrs=0;
	$lmths=0;
}
if($data!=10){
	$tim1=array();
	$tim2=array();
	$timc1=array();
	$timc2=array();
}
if($data!=11){
	$jrny1=array();
	$jrny2=array();
	$jrnyc1=array();
	$jrnyc2=array();
}
if($data!=12){
	$eddie1=array();
	$eddie2=array();
	$eddiec1=array();
	$eddiec2=array();
}
if($data!=13){
	$tbell=array();
	$tbellc=array();
}
if($data!=14){
	$tlibc1=array();
	$tlibc2=array();
	$tlibc3=array();
	$tlibc4=array();
	$tlib1=array();
	$tlib2=array();
	$tlib3=array();
	$tlib4=array();
}
if($data!=15){
	$wmart=array();
	$wmartc=array();
}
if($data!=16){
	$cjoe1=array();
	$cjoe2=array();
	$cjoec1=array();
	$cjoec2=array();
}
if($data!=17){
	$sway1=array();
	$sway2=array();
	$swayc1=array();
	$swayc2=array();
}
if($data!=18){
	$earl1=array();
	$earl2=array();
	$earlc1=array();
	$earlc2=array();
}
if($data!=19){
	$payls1=array();
	$payls2=array();
	$paylsc1=array();
	$paylsc2=array();
}
if($data!=20){
	$toys1=array();
	$toys2=array();
	$toysc1=array();
	$toysc2=array();
}
if($data!=21){
	$sears1=array();
	$sears2=array();
	$searsc1=array();
	$searsc2=array();
}
if($data!=22){
	$stsky1=array();
	$stsky2=array();
	$stskyc1=array();
	$stskyc2=array();
}
if($data!=23){
	$zehrs1=array();
	$zehrs2=array();
	$czehrs1=array();
	$czehrs2=array();
}
if($data!=24){
	$mmart1=array();
	$mmart2=array();
	$mmart3=array();
	$cmmart1=array();
	$cmmart2=array();
	$cmmart3=array();
}
if($data!=25){
	$ttc1=array();
	$ttc2=array();
	$cttc1=array();
	$cttc2=array();
}
if($data!=26){
	$mnm1=array();
	$mnm2=array();
	$mnm3=array();
	$mnmc1=array();
	$mnmc2=array();
	$mnmc3=array();
}
if($data!=27){
	$firk1=array();
	$firk2=array();
	$firkc1=array();
	$firkc2=array();
}
if($data!=28){
	$rlob1=array();
	$rlob2=array();
	$rlobc1=array();
	$rlobc2=array();
}
if($data!=29){
	$ebg1=array();
	$ebg2=array();
	$ebg3=array();
	$ebgc1=array();
	$ebgc2=array();
	$ebgc3=array();
}
$extra='';
//a&w data
/*$awclst=array($legal, $legal2);
$awlst=array($lname,$fname,$address,$address2,$city,$pcode,$pnum,$email,$school,$dpay,$workhr,$posn,$sdate,$major,
	$hilvl,ddmmyy($yrstart1) ,ddmmyy($yrend1), ddmmyy($yrstart2),ddmmyy($yrend2), $boss,$boss2,$go, $go2,$title,$title2,$mstrt,$tstrt,$wstrt,$thstrt,
	$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send,$send2,$oref,$hobby,$friend,$bnum,$bnum2,$caddr,
	$caddr2,$company,$company2);*/

//alice fazooli's data
/*$aflst1=array($lname,$fname,$address,$address2,$city,$pcode,$pnum,$prov,$elname,$efname,$epnum,$mstrt,$tstrt,$wstrt,$thstrt,
	$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send,$send2,$cmmt);
$aflst2=array($school, $uni,$company,Month($yrstart1).' '.Year($yrstart1),Month($yrend1).' '.Year($yrend1),$title,$caddr, $boss, $bnum, $go, $pay,
	$company2,Month($yrstart2).' '.Year($yrstart2),Month($yrend2).' '.Year($yrend2),$title2, $caddr2, $boss2, $bnum2, $go2, $pay2,
	$company3,Month($yrstart3).' '.Year($yrstart3),Month($yrend3).' '.Year($yrend3), $title3, $caddr3, $boss3,$bnum3,$go3, $pay3,
	$ref1,$rnum1,$yrsknown, $deal1,$ref2,$rnum2,$yrsknown2,Month($uyrstrt).' '.Year($uyrend),Month($uyrend).' '.Year($uyrend),$major,$hilvl,$deal2);

$afclst=array($aposn, $orest,$legal,$legal,$alco,$alco,$alco2,$whmis,$ajob,$atrans,$pjob,$fjob,$hday,$flex,$empl,$jobt);
$afclst2=array($jreq, $welc,$efunc, $sreq,$contact1,$contact2,$contact3);
//american eagle data
$aelst1=array($lname,$fname,$mname,$address,$address2,$city,$prov,$pcode,$pnum,$sdate,
	$company,Month($yrstart1).'/'.Year($yrstart1),Month($yrend1).'/'.Year($yrend1),$title,$title,$caddr, $boss,$bnum, $go, $pay,$pay,
	$company2,Month($yrstart2).'/'.Year($yrstart2),Month($yrend2).'/'.Year($yrend2),$title2,$title2, $caddr2, $boss2, $bnum, $go2, $pay2,$pay2,
	$company3,Month($yrstart3).'/'.Year($yrstart3),Month($yrend3).'/'.Year($yrend3),$title3,$title3, $caddr3, $boss3, $bnum, $go3, $pay3,$pay3,
	$mstrt,$tstrt,$wstrt,$thstrt,$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send, $send2,$dposn,$pnum2);

$aelst2=array($ref1,$rnum1,$yrsknown,$deal1,$ref2,$rnum2,$yrsknown2,$deal2,$school,$uni,$goal,$raddr,$raddr2,$city,$prov,$pcode,$city,$prov,$pcode,$rjob,$rjob2,$major,$namelst[$hear]);
$aeclst=array($reloc, $ojob,$papp,$echild,$ehist,$contact1,$contact2,$contact3,$wwrk,$jobt);
$aeclst2=array($demp,$crime,$legal,$hear,$grad,$grad2);
//aroma data
$arlst1=array($lname,$mname,$fname,$address,$city,$pcode,$prov,$address,$city,$pcode,$prov,$pnum,$pnum2,
	$mstrt,$tstrt,$wstrt,$thstrt,$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send, $send2,$uni,$school,
	$hloc,$uloc,$ovrtm,$arprev,$arexp,$arwhy,$cstsrv, $major,$hilvl,$armapos,$dpay,$sdate,$dept);
$arlst2=array($company,$yrstart1,$yrend1,$title,$caddr, $boss, $bnum,$go, $pay,
	$company2,$yrstart2,$yrend2,$title2, $caddr2, $boss2, $bnum2,$go2, $pay2,
	$company3,$yrstart3,$yrend3, $title3, $caddr3, $boss3,$bnum3,$go3, $pay3,
	$ref1,$rnum1,$raddr,$yrsknown,$ref2,$raddr2,$rnum2,$yrsknown2,$ref3,$raddr3,$rnum3,$yrsknown3,$contact1,$contact2,$contact3,$ctype,$ctype2,$ctype3);
$arclst1=array($legal,$legal2,$crime,$grad,$grad2);
$arclst2=array();

$bmlst1=array($lname,$fname,$address,$address2,$city,$pcode,$pnum,$pnum2,$email,$prov,$bpos,$uni,$school,$major,$hilvl,$otrain,$spos,$when,$pdiv,$prthr,$prtday);
$bmlst2=array($company,Month($yrstart1).'/'.Year($yrstart1),Month($yrend1).'/'.Year($yrend1),$title,$caddr, $boss,$bnum, $go,
	$company2,Month($yrstart2).'/'.Year($yrstart2),Month($yrend2).'/'.Year($yrend2),$title2, $caddr2, $boss2,$bnum2, $go2,
	$company3,Month($yrstart3).'/'.Year($yrstart3),Month($yrend3).'/'.Year($yrend3), $title3, $caddr3, $boss3,$bnum3,$go3,
	$company2,$boss2,$bnum2,
	$company3,$boss3,$bnum3,
	$jduty,$jduty2,$jduty3,$fun);

$bmclst1=array($legal,$legal2,$crime,$btrans,$bage,$bage2,$bage3,$bprev,$prev2,$accom,$allyr,$seaswrk);
$bmclst2=array($contact1);

$lib1=array($lname,$fname,$mname,$address,$city,$prov,$pcode,$pnum,$pnum2,$email,$bhear,$sdate,$lposn,
	$sernum,$serstrt,$serend,$sernum2,$serstrt2,$serend2,$sernum3,$serstrt3,$serend3,$sernum4,$serstrt4,$serend4);
$lib2=array($school, $uni,$major,$hilvl,$syrend-$syrstrt,$uyrend-$uyrstrt,
	$company,$yrstart1,$yrend1,$title,$caddr, $boss, $bnum,$go, $pay,$jduty,
	$company2,$yrstart2,$yrend2,$title2, $caddr2, $boss2, $bnum2,$go2, $pay2,$jduty2,
	$rskill);
$lib3=array();
$libc1=array($jobt,$legal,$crime,$remp,$premp);
$libc2=array();
$libc3=array($attach);

$cf1=array($lname,$fname,substr($mname,0,1),$address,$address2,$city,$prov,$pcode,$pnum,$pnum2,$email,$major,$cedu,$cfpos,$sdate,$cloc,$inter);
$cf2=array($company,$yrstart1,$yrend1,$title,$caddr, $boss,$bnum, $go, $pay,
	$company2,$yrstart2,$yrend2,$title2, $caddr2, $boss2, $bnum2,$go2, $pay2,
	$company3,$yrstart3,$yrend3, $title3, $caddr3, $boss3,$bnum2,$go3, $pay3,
	$mstrt,$tstrt,$wstrt,$thstrt,$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send,$send2);
$cfc1=array($legal,$crime,$cedu,$cpos,$hear2,$lift,$clean,$cftrans,$creloc,$premp2,$remp2);
$cfc2=array($jobt,$contact1,$contact2,$contact3);

$cora1=array($lname,$fname,$address,$address2,$city,$pcode,$pnum,$school,Yronly($syrstrt),Yronly($syrend),$syrend,$hilvl,
    $company,$yrstart1,$yrend1,$title, $boss, $bnum,$go, $pay, $company2,$yrstart2,$yrend2,$title2, $boss2, $bnum2, $go2, $pay2,
	$mstrt,$tstrt,$wstrt,$thstrt,$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send,$send2,$cnloc,$pnum2,$olang,$prov);

$corac1=array($copos,$lang,$legal,$jobt,$cprevw);

$daiso1=array($lname,$fname,$address,$address2,$city,$prov,$pcode,$pnum,$email,$school, $uni,$dpay,$sdate,
	$ref1,$rnum1,$deal1,$ref2,$rnum2,$deal2,$pnum2,Month($uyrstrt).' '.Year($uyrstrt),Month($uyrend).' '.Year($uyrend),Month($syrstrt).' '.Year($syrstrt),Month($syrend).' '.Year($syrend),$hiloc,$uniloc,$raddr,$raddr2,
	$hilvl);
$daiso2=array($company,Month($yrstart1).'/'.Year($yrstart1),Month($yrend1).'/'.Year($yrend1),$title,$caddr, $boss,$bnum, $go, $pay,
	$company2,Month($yrstart2).'/'.Year($yrstart2),Month($yrend2).'/'.Year($yrend2),$title2, $caddr2, $boss2, $bnum2,$go2, $pay2,
	$company3,Month($yrstart3).'/'.Year($yrstart3),Month($yrend3).'/'.Year($yrend3), $title3, $caddr3, $boss3,$bnum2,$go3, $pay3,
	$mstrt,$tstrt,$wstrt,$thstrt,$fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send,$send2,$jduty,$jduty2,$jduty3,$allpref);
$daisoc1=array($dipos,$jobt,$legal,$pprevw,$grad,$grad2);
$daisoc2=array($contact1,$contact2,$contact3,$ipref,$ipref2);
$dom1=array($lname,$mname,$fname,$address,$city,$pcode,$pnum,$prov,$school,$workhr,$sdate,$uni,$major,
	$mstrt,$tstrt,$wstrt,$thstrt, $fstrt,$sstrt,$sstrt2,$mend,$tend,$wend,$thend,$fend,$send,$send2,
	$hilvl,$skillz,$award,$excuse,$hiloc,$uniloc,$efname,$elname,$epnum,$lyrs,$lmths);
$dom2=array($company,Month($yrstart1).'/'.Year($yrstart1),Month($yrend1).'/'.Year($yrend1),$title,$caddr, $bnum, $go, $pay,$pay,
	$company2,Month($yrstart2).'/'.Year($yrstart2),Month($yrend2).'/'.Year($yrend2),$title2, $caddr2,$bnum2, $go2, $pay2,$pay2,
	$company3,Month($yrstart3).'/'.Year($yrstart3),Month($yrend3).'/'.Year($yrend3), $title3, $caddr3,$bnum3,$go3, $pay3,$pay3,
	$licnum,$lprov,$lexp,$olicnum,$olprov,$olexp,$vio,$polnum,$efdate,$epdate,$libcov,$ctype,$ctype2,$ctype3);

$domc1=array($dpos,$dhear,$jobt,$legal,$grad,$grad2,$late,$cemp,$cemp2,$enroll,$sret);
$domc2=array();*/
$cntrlclst=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,$timc1,$timc2,$jrnyc1,$jrnyc2,$eddiec1,$eddiec2,$tbellc,$tlibc1,$tlibc2,$tlibc3,$tlibc4,$wmartc,$cjoec1,$cjoec2,$swayc1,$swayc2,$earlc1,$earlc2,$paylsc1,$paylsc2,$toysc1,$toysc2,$searsc1,$searsc2,$stskyc1,$stskyc2,$czehrs1,$czehrs2,$cmmart1,$cmmart2,$cmmart3,$cttc1,$cttc2,$mnmc1,$mnmc2,$mnmc3,$firkc1,$firkc2,$rlobc1,$rlobc2,$ebgc1,$ebgc2,$ebgc3);
$cntrllst=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,$tim1,$tim2,$jrny1,$jrny2,$eddie1,$eddie2,$tbell,$tlib1,$tlib2,$tlib3,$tlib4,$wmart,$cjoe1,$cjoe2,$sway1,$sway2,$earl1,$earl2,$payls1,$payls2,$toys1,$toys2,$sears1,$sears2,$stsky1,$stsky2,$zehrs1,$zehrs2,$mmart1,$mmart2,$mmart3,$ttc1,$ttc2,$mnm1,$mnm2,$mnm3,$firk1,$firk2,$rlob1,$rlob2,$ebg1,$ebg2,$ebg3);
// initiate FPDI
$pdf = new FPDI();
$pdf->SetMargins(1,0);
// add a page
// set the sourcefile
$pagecount=$pdf->setSourceFile($appname);
// import pages
function fillPage($paralst,$parapos,$checklst,$cposlst){
	global $pdf,$fontsize,$checksize,$checktype;
	$pdf->SetFont('Arial', 'I', $fontsize);
	for($i=0;$i<count($paralst); $i++){
		$current=$paralst[$i];
		$nowpos=$parapos[$i];
		$pdf->SetXY($nowpos[0], $nowpos[1]);
          if(strlen($current)>=20){
        $pdf->SetFont('Arial', 'I', $fontsize-2);
        }else{
        $pdf->SetFont('Arial', 'I', $fontsize);
        }
		$pdf->Write(0, $current);
        
	}
	$pdf->SetFont('Arial', 'B', $checksize);
	for($j=0;$j<count($checklst); $j++){
		$nowcheck=$checklst[$j];
		$checkpos=$cposlst[$j];
		$thepos=$checkpos[$nowcheck];
		if(!isset($nowcheck)){
			$nowcheck=0;
		}else{
			$pdf->SetXY($thepos[0], $thepos[1]);
			$pdf->Write(0, $checktype);
		}
	}
}
for($n=1;$n<=$pagecount;$n++){
	$pdf->AddPage($ftype);
	$tplIdx = $pdf->importPage($n,'/MediaBox');
	if($ftype=='L'){
		$pdf->useTemplate($tplIdx, 0, 0, 295, 201);
	}else{
		$pdf->useTemplate($tplIdx, 0, 0, 210, 300);
	}
	$pdf->SetTextColor(0,0,0);
	fillPage($cntrllst[$aloc+$n-1], $plst[$n-1],$cntrlclst[$aloc+$n-1],$pclst[$n-1]);
}
// use the imported page and place it at point 10,10 with a width of 100 mm
// now write some text above the imported page
//stop here
$pdf->SetFont('Arial','B',12);
$pdf->Output();
//DO NOT CHANGE THIS FILE!!!
?>
