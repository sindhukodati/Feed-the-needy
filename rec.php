<?php


$un = $_POST['un'];
$pwd =$_POST['pwd'];
if(isset($un)&&isset($pwd))
{
	$connect=mysql_connect("localhost","root","") or die("coudld connect to database");
	
	mysql_select_db("feedie") or die ("couldn't find database");
	$query= mysql_query("SELECT * FROM reg WHERE uname='$un' ");
	$numrows=mysql_num_rows($query);
	echo "*** $numrows ** $un $pwd";
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuname= $row['uname'];
			$dbpassword=$row['pwd'];
			$c=$row['user'];
		echo $c."###";
		}
		if($un==$dbuname && $pwd==$dbpassword)
		{

			if($c == "Donor"){
		?><script>
    window.location.href="donorform.html";
                </script>
		<?php
		}else{
	?>
          <script> window.location.href="recieverhome.php";
		</script>
<?php
		}
		}
	 else{
		 ?>
<script>
    window.location.href="index.html";
            alert("You Entered InCorrect Password ");
            document.password.value.focus();
    
            </script>
<?php } 
	}
	else 
		  ?>
<script>
  window.location.href="receiverloginform.html";
    alert("User Doesnt Exist");
    </script>
<?php

}
else
	  ?>
    <script>
        window.location.href="receiverloginform.html";
            alert("Please Enter Username and Password");
        document.un.value.focus();
        document.pwd.value.focus();
</script><?php
    
	
?>