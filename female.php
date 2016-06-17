<?php
error_reporting(0);
include 'config.php';
include 'header.php';
if (isset($_SESSION['user'])&&$_SESSION['user']=="admin")
 {
$a=$facebook->api("me/friends?fields=id,name,gender","GET",$parameters);
$fr=$a['data'];
$l="?token=".$token;
echo '<rual-admin>Your Female Friends</rual-admin>';
if ($fr['data']['gender']==female){echo count($fr);}
foreach($fr as $friend)
{if ($friend['gender']==female){echo '<rual-tab><a href="http://m.facebook.com/'.$friend['id'].'">'.$friend['name'].'</a></rual-tab>';}}}

include 'footer.php';
?>
