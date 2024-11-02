<?php
echo "time".time();
$i=0;
$a=11;
setcookie('$i','$a',time()+(1*5));
echo $_COOKIE['$i'];
$i++;
setcookie('$i','ss',time()+(1*5));
echo $_COOKIE['$i'];
?>