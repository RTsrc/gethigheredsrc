<?php session_start();
include 'common.php';
include 'db.php';
dbConnect("higherdb");
$newpw=$_SESSION['newpw'];
$email=$_SESSION['sessname'];
$sql = "UPDATE users SET
password = PASSWORD('$newpw')
WHERE username = '$email'";
if (!mysql_query($sql)){
error('A database error occurred in processing your '.
'submission.\\nIf this error persists, please '.
'contact support@gethighered.ca.');
}else{
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
}
?>
<HTML>
<META HTTP-EQUIV=Refresh CONTENT="1; URL=index.php">
Your password has been reset.
</HTML>