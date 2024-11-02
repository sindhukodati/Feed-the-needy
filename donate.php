<?php
$d=mysql_connect("localhost","root","") or die ("not connected");
mysql_select_db("feedie",$d) or die("not selected");

$nm=$_POST['name'];
$mob=$_POST['mobileNumber'];
$add=$_POST['address'];
$scap=$_POST['servingCapacity'];
$dt=$_POST['ddt'];
$t=time();
 $i=mysql_query("INSERT INTO donor VALUES('$nm','$mob','$add','$scap','$dt','$t','yes')") or die("nto");

?><script >

window.location.href="index.html";
</script>
<?php ?>