<?php session_start();
$allowedExts = array("docx", "pdf", "txt","rtf","doc");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["size"] < 1000000)&&in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/
	$_SESSION['myname']=$_POST['myname'];
	$_SESSION['sub']=$_POST['sub'];
	$_SESSION['cont']=$_POST['cont'];
    $_SESSION['finalEmployers']=$_POST['finalEmployers'];
	$origname=$_FILES["file"]["name"];
	$extn=$_FILES["file"]["type"];
	$filename=substr($origname,0,strlen($origname)-strlen($extension)-1);
	$newname=$filename.time().'.'.$extension;
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
	  $_SESSION['upimg']=$newname;
	  move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" .$newname);
      }else{
	  $_SESSION['upimg']=$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" .$_FILES["file"]["name"]);
    }
    header("Location:mailsend.php");

}
  }
else
  {
  echo "Invalid file size or type";
  }
?>