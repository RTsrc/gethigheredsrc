<?php session_start();
require_once('PHPMailer-master/class.phpmailer.php');
function MakeLine ($str){
$myline="\n";
    for($j=0;$j<strlen($str);$j++){
		$myline=$myline.'--';
	}
		return "\n".$myline."\n";
}
$json=$_SESSION["finalEmployers"];
$emailst=json_decode(stripslashes($json), true);
$sig="Powered by Higher";
$email = new PHPMailer();
$email->From      = $_SESSION['sessname'];
$email->FromName  = $_SESSION['myname'];
$email->Body      = $_SESSION['cont'].MakeLine($sig).$sig;
$email->Subject   = $_SESSION['sub'];
$email->WordWrap=50;
$file_to_attach = "upload/".$_SESSION['upimg'];

$email->AddAttachment( $file_to_attach);
$srvrmsg='Your resume has been sent to these addresses:';
foreach ($emailst as $address){
$email->ClearAddresses();
$email->AddAddress( $address['email'] );
$email->Send();
$srvrmsg=$srvrmsg.$address['email'];
}
echo $srvrmsg;
?>