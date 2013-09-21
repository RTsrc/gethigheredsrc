<?php session_start();
require_once 'src/facebook.php';
require_once 'common.php';
require_once'db.php';
require('logincheck.php');
dbConnect("higherdb");
$news='Cara Foods! Now, you can apply to Milestones, Kelseys, Harveys, Swiss Chalet, and Montanas, all with this one app on Higher!';
$nrmmsg='Tired of spending days on job applications? Now with Higher, you can apply to over 50 retailers and restaurants in just 30 minutes! I want to #gethighered faster. Do you?';
$premmsg='Breaking News! Your lovely neighbourhood superheroes at Higher have released this weeks premium app:'.$news;
if(!$_SESSION['mytype']){
    $sharemsg=$nrmmsg;
    }else{
    $sharemsg=$premmsg;
    }
$config = array(
       'appId'  => '420420544732559',
       'secret' => '590bc9b49056b9f0c7829fcef59b02a8',
);
$facebook = new Facebook($config);
$user_id = $facebook->getUser();
$myuid=$_SESSION['sessuid'];

?>
<html>
  <head></head>
  <body>

  <?php
    echo ("<script> window.alert('Share us on FB to get more apps!') </script>");
	$rest=10;
    if($user_id) {
        $permissions = $facebook->api("/me/permissions");
      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {
       $ret_obj = $facebook->api('/me/feed', 'POST',
                                    array(
                                      'link' => 'www.gethighered.ca',
                                      'message' => $sharemsg,
									  'description' => 'Get Hired with Higher!',
									  'picture' => 'http://www.gethighered.ca/highlogo.png'
                                 ));
         if (array_key_exists('publish_stream', $permissions['data'][0])) {                         
		$sql = "UPDATE token
				SET tokens = '$rest' WHERE uid='$myuid'";
                
	if (!mysql_query($sql)){
	error('A database error occurred in processing your '.
	'submission.\\nIf this error persists, please '.
	'contact support@gethighered.ca.'.$myuid);
	}
         }
        // Give the user a logout link 
        echo '<script> window.location = "profile.html" </script>"';
      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl( array(
                       'scope' => 'publish_stream'
                       )); 
        echo '<script> window.location = "' . $login_url . '" </script>"';
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, so print a link for the user to login
      // To post to a user's wall, we need publish_stream permission
      // We'll use the current URL as the redirect_uri, so we don't
      // need to specify it here.
      $login_url = $facebook->getLoginUrl( array( 'scope' => 'publish_stream' ) );
     echo '<script> window.location = "' . $login_url . '" </script>"';

    } 

  ?>      


  </body>
</html>