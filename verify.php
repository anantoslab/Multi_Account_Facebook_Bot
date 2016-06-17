<?php
include 'config2.php';
$user=$facebook->api("/me","GET",$parameters);
echo $user['name'];
echo "<br>If showing username , then Account token is Active";
?>
