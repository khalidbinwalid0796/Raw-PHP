<?php

session_start();
$_SESSION['x'] = 10;
$_SESSION['y'] = 20;

session_start();
//echo $_SESSION['x'];
unset($_SESSION['x']); //specific session delete korar jonno
session_destroy(); //complete or all session delete korar jonno
?>




//cookie->txt file, user k track korar jonno use kora hoy

<?php
setcookie('city','dhaka',time()+10); // name,value,time
//time()+10->current time theke 10s bese somoy porjonto cookie dhore rakhe

echo '<pre>';
print_r($_COOKIE);

setcookie('city','dhaka',100); // name,value,time
//delete korar jonno akta time dilee hoy ex-100
?>
?>