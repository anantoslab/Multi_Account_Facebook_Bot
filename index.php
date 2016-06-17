<?php

error_reporting(0);

require 'connect.php';
include 'header.php';

if(isset($_GET['login']))
{
if($_POST['submit']=="submit")
{
 $pincode=$_POST['pin'];
 user($pincode);
 }
}

 if (isset($_SESSION['user'])&&$_SESSION['user']=="admin")
  { echo '
    <rual-admin>ADMIN AREA</rual-admin>
    <rual-tab><a href="female.php">Female Friends</a></rual-tab>
    <rual-tab><a href="grouppost.php">Group Poster</a></rual-tab>
    <rual-tab><a href="?profile">Profile Visit</a></rual-tab>
    <rual-tab><a href="?comment">Comment Bot</a></rual-tab>
    <rual-tab><a href="?group">Group Bot</a></rual-tab>
    <rual-tab><a href="?logoff">Logout</a></rual-tab>
    <rual-set><a href="?token">Submit token</a></rual-set>
    <rual-set><a href="?chpin">Change PIN</a></rual-set>
    <rual-set><a href="user.php">Switch User</a></rual-set>';
  }

  else {
          echo '
          <rual-head> <div class="facebook">facebot</div></rual-head>
          <rual-content>
          <rual-warn>Enter Your Pin:</rual-warn>
          <form action="index.php?login" method="post">
           <input type="text" name="pin">
           <input type="submit" name="submit" value="submit">
          </form>
          </rual-content>';
   }




   if (isset($_GET['tokenu'])&&$_SESSION['user']=='admin')

   {
     if ($_GET['tokenu']!=null)
     {
    token($_GET['tokenu']);
   }

   }


   if (isset($_GET['token'])&&$_SESSION['user']=='admin')

   {
     if ($_GET['token']!=null&&$_GET['name']!=null)
     {
    tokenmain($_GET['token'],$_GET['name']);
  }

    echo '
      <rual-admin>TOKEN SUBMIT</rual-admin>

      <form class="token" action="index.php" method="get">
      Name:</br>
      <input type="text" name="name"/>
      <textarea name="token" rows="8" cols="40">';
      echo gettoken();
      echo '</textarea>
      <input type="submit" value="submit"/>
      </form>';


   }
else {
  echo ' ';
}

if(isset($_GET['chpin'])&&$_SESSION['user']=='admin')
{
 if ( $_GET['chpin']=='submit' && $_POST['chpin']!=null)
     {
     chpin($_POST['chpin']);
  }

    echo '
      <rual-admin>Change Pin</rual-admin>
      <form class="token" action="index.php?chpin=submit" method="POST">
      <input name="chpin" type="text"/>
      <input type="submit" value="submit"/>
      </form>';

}

if(isset($_GET['comment'])&&$_SESSION['user']=='admin')
{
 if ( $_GET['comment']=='submit' && $_POST['comment']!=null)
     {
     commentch($_POST['comment']);
  }

    echo '
      <rual-admin>Comment</rual-admin>
      <form class="token" action="index.php?comment=submit" method="POST">
      <textarea name="comment" rows="8" cols="40">';
      echo comment();
      echo '</textarea>
      <input type="submit" value="submit"/>
      </form>';

}



if(isset($_GET['group'])&&$_SESSION['user']=='admin')
{
 if ( $_GET['group']=='submit' && $_POST['group']!=null)
     {
     groupch($_POST['group']);
  }

    echo '
      <rual-admin>Set Bot To Group</rual-admin>
      <rual-tab><a href="group.php">Start / Restart</a></rual-tab>
      <form class="token" action="index.php?group=submit" method="POST">
      <textarea name="group" rows="8" cols="40">';
      echo grouppost();
      echo '</textarea>
      <input type="submit" value="submit"/>
      </form>';

}

if(isset($_GET['profile'])&&$_SESSION['user']=='admin')
{
  echo '<rual-admin>Profile Visit</rual-admin>
       <rual-tab><a href="profile.php">Profile visit start/restart</a></rual-tab>
       ';
}




  if(isset($_GET['logoff']))
{
	$_SESSION = array();
	session_destroy();
	header("Location: index.php");
	exit;
}

include 'footer.php';


?>
