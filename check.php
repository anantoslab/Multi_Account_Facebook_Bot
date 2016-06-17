<?php
include 'config.php';
include 'header.php';
$user=$facebook->api("me/","GET",$parameters);
echo $user['name'].'<br>';
echo $user['email'];
?>
