# Multi_Account_Facebook_Bot
</br></br>


Config Your Database:</br>


1 . Create A database .</br>
2 . Goto connect.php and replace Your Database name .</br>
3 . import .sql file from database folder in your phpmyadmin.</br></br>




SetUp Following Corn Jobs:



// this will like your Every post on feed </br>

/usr/local/bin/php -q /home/username/public_html/bot.php >/dev/null                    * * * *



// this will comment on every post on feed</br>
/usr/local/bin/php -q /home/username/public_html/commentbot.php >/dev/null                * * * *



//this will post on group</br>
/usr/local/bin/php -q /home/username/public_html/groupbot.php >/dev/null                 * * * *



//this will like your every friends post</br>
/usr/local/bin/php -q /home/username/public_html/profilebot.php >/dev/null               * * * *

</br>
</br>
Profile visit and group bot need to start from main panel .

</br>
</br>

IF you Are faceing Problem setting Up</br> Contact ME on fb: </br>


fb.me/zithroooo
