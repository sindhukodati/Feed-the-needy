<?php
$d=mysql_connect("localhost","root","") or die ("not connected");
mysql_select_db("feedie",$d) or die("not selected");

$dn=$_POST['d'];
echo $dn;
 $i=mysql_query("delete from donor where name='$dn';") or die("nto");

?><script >
alert("donation form deleted");
window.location.href="index.html";
</script>
<?php ?>