<html>
<head> App Creator v 1.2 BETA </head>
<body onload="hideOption();changeValue()">
<?php
$appopt=array('pg1', 'pg2', 'pg3', 'pg4');
$length=count($appopt);
?>
<script type="text/javascript" >	
function hideOption(){
	var array2 = <?php echo json_encode($appopt); ?>;
	var length = <?php echo json_encode($length); ?>;
	var n=0;
	while(n<length){
	document.getElementById(array2[n]).style.display = 'none';
	++n;
	}
}
function changeValue(){
	var array = <?php echo json_encode($appopt); ?>;
    var option=document.getElementById('pgnum').value;
	var j=0;
	hideOption();
	while(j<=option){
            document.getElementById(array[j]).style.display = 'block';
			j++;
        }

}
function toggle(source) {
  checkboxes = document.getElementsByName(source.value);
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
<form action="filecreate2.php" method="post" target="_blank">
<label for="location">Location:</label><input type="text" name="location" id="location" required> <br>
<label for="store">Store Name:</label><input type="text" name="store[]" id="store" maxlength="25" required>
<label for="email">Email:</label><input type="text" name="email[]" id="email" required> <br>
<label for="store2">Store Name2:</label><input type="text" name="store[]" id="store2" maxlength="25">
<label for="email2">Email2:</label><input type="text" name="email[]" id="email2"> <br>
<label for="store3">Store Name3:</label><input type="text" name="store[]" id="store3" maxlength="25">
<label for="email3">Email3:</label><input type="text" name="email[]" id="email3"> <br>
<label for="store4">Store Name4:</label><input type="text" name="store[]" id="store4" maxlength="25">
<label for="email4">Email4:</label><input type="text" name="email[]" id="email4"> <br>
<label for="store5">Store Name5:</label><input type="text" name="store[]" id="store5" maxlength="25">
<label for="email5">Email5:</label><input type="text" name="email[]" id="email5"> <br>
<input type="submit"> 
</form>
</html>