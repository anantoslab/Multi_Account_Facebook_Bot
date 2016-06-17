<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=test','root','');

function user($pin)
{
  global $db;
  $sql = 'select * from bot';
  $data=$db->query($sql);
  foreach ($data as $user) {
    if ($pin==$user['pin'])
    {

      $_SESSION["user"] = "admin";
      header ('location:index.php');
    }
    else {
           echo '<rual-wrn>wrong pin.</rual-wrn>';
    }
  }
}


function token($text)
{
  global $db;
  $sql  = "UPDATE bot SET token='$text' WHERE id=1";
  $data = $db-> prepare ($sql);
  $data->execute();
  echo '<rual-wrn>User Set</rual-wrn>';
}



function tokenmain($text,$name)
{
  global $db;
  $sql = "INSERT INTO user (token,name) VALUES (:token,:name)";
  $stmt = $db -> prepare($sql);
  $stmt-> bindParam(':token',$tokene);
  $stmt-> bindParam(':name',$namee);
  $tokene=$text;
  $namee=$name;
  $stmt -> execute();
  echo '<rual-wrn>token insert</rual-wrn>';
}






function gettoken()
{
  global $db;
  $sql = 'select * from bot';
  $data=$db->query($sql);
  foreach ($data as $user) {

return $user['token'];
  }
}


function comment()
{
  global $db;
  $sql = 'select * from bot';
  $data=$db->query($sql);
  foreach ($data as $user) {

return $user['comment'];
  }
}


function chpin($pin)
{
  global $db;
  $sql  = "UPDATE bot SET pin='$pin' WHERE id=1";
  $data = $db-> prepare ($sql);
  $data->execute();
  echo '<rual-wrn>Pin Changed</rual-wrn>';
}


function commentch($comment)
{
  global $db;
  $sql  = "UPDATE bot SET comment='$comment' WHERE id=1";
  $data = $db-> prepare ($sql);
  $data->execute();
  echo '<rual-wrn>Comment Changed</rual-wrn>';
}


function grouppost()
{
  global $db;
  $sql = 'select * from bot';
  $data=$db->query($sql);
  foreach ($data as $user) {

return $user['grouprual'];
  }
}


function groupch($grouprual)
{
  global $db;
  $sql  = "UPDATE bot SET grouprual='$grouprual' WHERE id=1";
  $data = $db-> prepare ($sql);
  $data->execute();
  echo '<rual-wrn>Group Post Changed</rual-wrn>';
}



function file_get_contents_curl($url) {
$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);

$data = curl_exec($ch);
curl_close($ch);

return $data;
}



?>
