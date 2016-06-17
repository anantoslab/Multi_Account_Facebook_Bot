<?php
    require 'config.php';
    include 'header.php';

    $graph_url_groups = "https://graph.facebook.com/v2.1/me/groups?access_token=".$access_token;
    $groups = json_decode(file_get_contents_curl($graph_url_groups));

    $dropdown = "";
    for($i=0;$i<count($groups->data);$i++)
   {
       $dropdown .= "<option value='".$groups->data[$i]->id."'>".$groups->data[$i]->name."</option>";
   }


if (isset($_SESSION['user'])&&$_SESSION['user']=="admin")
 {
if(isset($_POST['status'])){
      $group_id = $_POST['group'];
      $publish = $facebook->api('/'.$group_id.'/feed', 'post',
      array('access_token' => $access_token,'message'=>$_POST['status'] .' via: Rual',));
      $message = 'Status updated.<br>';
      echo $publish['id'];
}


echo '<rual-admin>Group Poster</rual-admin>
      <form class="token" action="grouppost.php" method="post">
      <select name="group" id="status" >'.$dropdown.'</select><br>
      <textarea name="status" id="status" placeholder="Write a post...."  rows="8" cols="40"></textarea>
      <input type="submit" value="Post to group"/>
      </form>
      <rual-set> <a href="index.php">Back</a></rual-set>';
  }

  else {
    echo "<rual-wrn>You are not admin</rual-wan>";
  }

include 'footer.php';

 ?>
