<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> Question Creator v 0.1 BETA
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
    (function($){
    	  $countForms = 1;
    	  $.fn.addForms = function(){
    			var myform = "<table>"+
    			 "  <tr>"+
    			 "     <td>Question ("+$countForms+"):</td>"+
    			 "     <td><input type='text' name='fielda[]'size='40' placeholder='Specific Question'></td>"+
    			 "     <td><input type='text' name='varname[]' placeholder='varname' size='5'></td>"+
    			 "     <td>Question type ("+$countForms+"):</td>"+
    			 "     <td><select name='qtype[]'><option id=0 value='text'>Text </option><option id=1 value='radio'>Checkbox </option> </select><option id=2 value='checkbox'>Radio </option> </select></td>"+
				 "     <td># of Options ("+$countForms+"):</td>"+
				 "     <td><input type='text' name='optn[]' maxlength=1 size='3' value=1></td>"+
				 "     <td>On page #:</td>"+
				 "     <td><input type='text' name='pgnum[]' maxlength=1 size='1' value=1></td>"+
    			 "     <td><button>remove</button></td>"+
    			 "  </tr>"+
    			 "</table>";

    			 myform = $("<div>"+myform+"</div>");
    			 $("button", $(myform)).click(function(){ $(this).parent().parent().remove(); });

    			 $(this).append(myform);
    			 $countForms++;
    	  };
    })(jQuery);		

    $(function(){
    	$("#mybutton").bind("click", function(){
    		$("#container").addForms();
    	});
    });
	$(function(){$("#container").addForms();});
</script>
</head>
<body>
<form action="filecreate.php" method="post" target="_blank" id="container">
<label for="filename"></label><input type="text" name="filename" id="filename" placeholder="Filename" required>
<label for="appname"></label><input type="text" name="appname" id="appname" placeholder="appname" required>
<input type="submit"> 
</form>
<button id="mybutton">add question</button>
</body>
</html>