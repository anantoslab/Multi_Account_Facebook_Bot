<?php
include 'config.php';
echo '>';
$status=$facebook->api("/me/home?limit=5","get",$parameters);
$data=$status['data'];
foreach($data as $nr=>$s)
{$id=$s['id'];
$msg=$s['message'];
$pic=$s['picture'];
if($msg or $pic)
{
$r=rand(1,100);
$sp=comment().'
 :)  '.$r;
$oment=$facebook->api('/'.$id.'/comments','POST',array('message' => $sp,'access_token'=>$access_token));
echo $oment['id'];}}
?>
