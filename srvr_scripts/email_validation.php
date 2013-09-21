<?php
    if (get_magic_quotes_gpc()) {
        $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
        while (list($key, $val) = each($process)) {
            foreach ($val as $k => $v) {
                unset($process[$key][$k]);
                if (is_array($v)) {
                    $process[$key][stripslashes($k)] = $v;
                    $process[] = &$process[$key][stripslashes($k)];
                } else {
                    $process[$key][stripslashes($k)] = stripslashes($v);
                }
            }
        }
        unset($process);
    }
    
    session_start();
    
    require('db.php');
    dbConnect('higherdb');
    
    $where=sprintf("WHERE `validation_key`='%s' AND `username`='%s'",
        mysql_real_escape_string($_GET['key']),
        mysql_real_escape_string($_GET['email']));
    mysql_query('UPDATE `users` SET `email_validated`=1 '.$where);
    switch(mysql_affected_rows()){
        case -1:
?>
            Internal error.
<?php
            echo htmlentities(mysql_error());
            die();
            break;
        case 0://bad
        case 1://good
            break;
    }
    $loginres = mysql_query('SELECT * FROM users '.$where);
    $loginrow = mysql_result($loginres,0,'uid');
    $getoken = mysql_query("SELECT tokens FROM token WHERE uid='$loginrow'");
    $formfill = mysql_result($loginres,0,'formsave');
    $tokenum=mysql_result($getoken,0);
    $_SESSION['loggedin'] = 1;
    $_SESSION['sessname'] = $_GET['email'];
    $_SESSION['sessuid'] = $loginrow;
    $_SESSION['tokenum']= $tokenum;
    $_SESSION['formsave']= $formfill;
    header("Location: form");
    die();