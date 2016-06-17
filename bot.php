<?php
include 'config1.php';
echo '<div class="gmenu" align="center">uals lang</div>';
$status=$facebook->api("/me/home?limit=25","get",$parameters);
$data=$status['data'];
foreach($data as $nr => $s)
{
$id=$s['id'];
echo $id.'|';
$like=$facebook->api("/".$id."/likes","POST",$parameters);
echo $like['id']; }
?>
