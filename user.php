<?php
include 'connect.php';
include 'header.php';
if ($_SESSION['user']=='admin') {
$sql = 'select * from user';
$data=$db->query($sql);
echo "<rual-admin>Manager</rual-admin>";

foreach ($data as $user) {
echo '<rual-tab2><a href="verify.php?token='.$user['Token'].'">'.$user['name'].'</a>  (<a href="user.php?id='.$user['id'].'">Delete</a>) (<a href="index.php?tokenu='.$user['Token'].'">Switch</a>)</rual-tab2>';
}


if (isset($_GET['id'])) {
$sql = "DELETE FROM user WHERE id =  :id";
$stmt = $db -> prepare($sql);
$stmt->bindParam(':id', $_GET['id'] , PDO::PARAM_INT);
$stmt->execute();
}

$db=null;
}

else {
  echo 'not admin';
}
include 'footer.php';
?>
