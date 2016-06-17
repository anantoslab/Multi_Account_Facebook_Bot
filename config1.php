<?php
require 'connect.php';
require 'facebook.php';
$nRows = $db->query('select count(*) from user')->fetchColumn();
$row = $nRows-1;
$row= rand (0 , $row);
$sql = 'select * from user';
$data=$db->query($sql);
$result = $data -> fetchAll();
$access_token=$result[$row][2];
$token = $access_token;
$fb_secret  = "rual";
$fb_app_url  = 'http://ph.superlike.org/m.php';
$facebook = new Facebook(array(
'appId' => '645065615510559',
'secret' => '5b7d44a366b89595f9ce80d864ac03d9',
'cookie' => true
));
try {
$parameters['access_token'] = $access_token;
$user = $facebook->api('/me', $parameters);
} catch (FacebookApiException $e) {
die("invalid access token, Enter full url of token C,orrectly : Go back to index");
}
?>
