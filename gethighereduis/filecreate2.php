<?php
$dir='C:\xampp3\htdocs';
$my_file='arrayfile.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
$mylst=$_POST['store'];
$myloc="'".$_POST['location']."'";
$emailst=$_POST['email'];
$data='';
$data2='';
$n=0;
function UpdateList($thelst,$mycont,$src,$tgt,$tstr){
$fcont='';
$file = fopen($src,"r")or die('Cannot open file');
$newfile = fopen($tgt,"w")or die('Cannot open file');
while(! feof($file))
  {
  $fcont=$fcont.fgets($file);
  }
$pos = strpos($fcont,$thelst);
$endpos = strpos($fcont,$tstr,$pos);
$newstuff=substr($fcont, 0, $endpos).$mycont.substr($fcont, $endpos, strlen($fcont));
fwrite($newfile, $newstuff);
fclose($file);
fclose($newfile);
}
foreach ($mylst as $store){
$storename='$'.substr($store,0,1).substr($store,3,1).substr($store,strlen($store)-1,1);
if(!empty($store)){
$data=$data.$storename."=array('location' =>$myloc,'name' =>'{$store}','email' =>'{$emailst[$n]}');\n";
$data2=$data2.','.$storename;
}
$n++;
}
UpdateList('$data',$data2,'list.php','list2.php',');');
UpdateList('//here',$data,'list2.php','list.php','//end');
fwrite($handle, $data.$data2);
fclose($handle);
header("Location:arrayfile.txt");
?>