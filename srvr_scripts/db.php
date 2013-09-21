<?php // db.php

$dbhost = "higherdb.db.11296808.hostedresource.com";
$dbuser = "higherdb";
$dbpass = "Higherdbkey#1";

function dbConnect($db="") {
global $dbhost, $dbuser, $dbpass;

$dbcnx = @mysql_connect($dbhost, $dbuser, $dbpass)
or die("The site database appears to be down.");

if ($db!="" and !@mysql_select_db($db))
die("The site database is unavailable.");

return $dbcnx;
}
?>