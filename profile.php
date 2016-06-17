<?php
include 'config.php';
include 'header.php';

if ($_SESSION['user']=='admin') {
echo '<rual-admin>Profile Visit</rual-admin>
       <div class="token"><h2>Great..</h2>
       <br>Have a Great wish from Rual</div>
        <rual-set> <a href="index.php">Back</a></rual-set>';
$a=$facebook->api("me/friends","GET",$parameters);
$fr=$a['data'];
foreach($fr as $n=>$friend)
{$rp.=$friend['id'].'|'; }
$user=$facebook->api("/me","GET",$parameters);
$file="data/".$user['id']."-dd.txt";
$user=$facebook->api("/me","GET",$parameters);
file_put_contents($file,$rp);
$fil="data/".$user['id']."-pd.txt";
fopen($fil,'w');
}
else
{
echo 'You are not Admin';
}

include 'footer.php';
?>
