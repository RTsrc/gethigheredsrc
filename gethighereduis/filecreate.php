<?php
$my_file='questionfile.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$text='';
$n=0;
$data='';
$data2='';
$data3='';
$data4='';
$lstdat='';
$source=$_POST['filename'];
$temp='';
function UpdateList($thelst,$mycont,$src,$tstr){
global $temp,$source;
$fcont='';
$file = fopen($src,"r")or die('Cannot open file');
while(! feof($file))
  {
  $fcont=$fcont.fgets($file);
  }
fclose($file);
$newfile = fopen($src,"w")or die('Cannot open file');
$pos = strpos($fcont,$thelst);
$endpos = strpos($fcont,$tstr,$pos);
$newstuff=substr($fcont, 0, $endpos).$mycont.substr($fcont, $endpos, strlen($fcont));
fwrite($newfile, $newstuff);
fclose($newfile);
}
foreach($_POST['varname'] as $ele){
	$qtype='"'.$_POST['qtype'][$n].'"';
	$qstn=$_POST['fielda'][$n];
	$pgnum=$_POST['pgnum'][$n];
	$optn=$_POST['optn'][$n];
	$vname='"'.$ele.'"';
	$data2=$data2.'$'.$ele.'=$_POST['.$vname."];\n";
	if($_POST['qtype'][$n]!='radio'){
	$data3=$data3.','.'$'.$ele;
	$text= $text.$qstn. "<input type={$qtype} name=$vname>\n";
	$data=$data.'$'.$ele.'xy'."=array(0,0);\n";
	UpdateList($_POST['appname'].$pgnum,',$'.$ele,$source,');');
	UpdateList('poslst'.$pgnum,',$'.$ele.'xy',$source,');');
	}else{
		UpdateList($_POST['appname'].'c'.$pgnum,',$'.$ele,$source,');');
		UpdateList('cplst'.$pgnum,',$'.$ele.'lst',$source,');');
		$data4=$data4.','.'$'.$ele;
		$text=$text.$qstn."<br>\n";
		for($m=0;$m<$optn;$m++){
		$text= $text."<input type={$qtype} name=$vname value=$m class=\"myClass\" data-label=\"Option$m\">\n".'<br>';
		$data=$data.'$'.$ele.$m.'xy'."=array(0,0);\n";
		if($m<$optn-1){
		$lstdat=$lstdat.'$'.$ele.$m.'xy,';
		}else{
		$lstdat=$lstdat.'$'.$ele.$m.'xy';
		}
		}
		$data=$data.'$'.$ele.'lst'."=array({$lstdat});\n";
	}
	$n++;
	}
	$data2=$data2.$data;
	UpdateList('spec vars',$data2,$source,'//stop');
fwrite($handle, $text);
fclose($handle);
header("Location:questionfile.txt");
?>