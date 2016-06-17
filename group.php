
<?php
require 'config.php';
include 'header.php';

if ($_SESSION['user']=='admin') {
echo '<rual-admin>Profile Visit</rual-admin>
       <div class="token"><h2>Great..</h2>
       <br>Have a Great wish from Rual</div>
        <rual-set> <a href="index.php">Back</a></rual-set>';

$graph_url_groups = "https://graph.facebook.com/v2.1/me/groups?access_token=".$access_token;
$groups = json_decode(file_get_contents_curl($graph_url_groups));

$id = "";
for($i=0;$i<count($groups->data);$i++)
{
   $id .= $groups->data[$i]->id.'|';
}


$user=$facebook->api("/me","GET",$parameters);
$file="data/".$user['id']."-rual.txt";
file_put_contents($file,$id);
$fillc="data/".$user['id']."-rualc.txt";
fopen($fillc,'w');
}
else {
  echo "You are not a admin";
}

?>
