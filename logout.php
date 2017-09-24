<?php

session_start();

$expire= time()-86400;
setcookie('vep', $_SESSION['regnum'], $expire);
session_destroy();

echo "session destroyed!";
header("refresh:1; url=home.html");

?>