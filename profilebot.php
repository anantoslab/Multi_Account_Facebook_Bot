<?php
include 'config.php';
$user=$facebook->api("/me","GET",$parameters);
$Fil="data/".$user['id']."-pd.txt";
$handle =fopen($Fil,'r+');
$data=fread($handle,512);
$count=$data+1;
fseek($handle,0);
fwrite($handle,$count);
fclose($handle);
$user=$facebook->api("/me","GET",$parameters);
$file='data/'.$user['id'].'-dd.txt';
$f=file_get_contents($file);
$fr=explode('|',$f);
$pid=$fr[$count];
$status=$facebook->api("/".$pid."/feed?limit=3","GET",$parameters);
$data=$status['data'];
foreach($data as $nr=>$s)
{$id=$s['id'];
$uname=$s['from']['name'];
$uid=$s['from']['id'];
echo '<div class="fmenu">';
echo '<a href="http://m.facebook.com/'.$s['from']['id'].'">'.$s['from']['name'].'</a>';
echo '<br/>';
if (isset($s['message']))
{$msg=$s['message'];
if($msg)
{
echo $msg;}}
if (isset($s['story'])){
$st=$s['story'];
if($st)
{echo $st;}}
if (isset($s['picture'])){
$pic=$s['picture'];
if($pic)
{
  echo "Rual";
}
}
if($msg)
{
$like=$facebook->api("/".$id."/likes","POST",$parameters);
echo $like['id'];}}
?>
