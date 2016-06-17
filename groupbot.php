<?php
include 'config.php';


$user=$facebook->api("/me","GET",$parameters);
$Fil="data/".$user['id']."-rualc.txt";
$handle =fopen($Fil,'r+');
$data=fread($handle,512);
$count=$data+1;
fseek($handle,0);
fwrite($handle,$count);
fclose($handle);
$user=$facebook->api("/me","GET",$parameters);
$file='data/'.$user['id'].'-rual.txt';
$f=file_get_contents($file);
$fr=explode('|',$f);
$pid=$fr[$count];

$publish = $facebook->api('/'.$pid.'/feed', 'post',
array('access_token' => $access_token,'message'=> grouppost(),));
$message = 'Status updated.<br>';
echo $publish['id'];

?>
