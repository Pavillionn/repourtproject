<?php
$user=$_REQUEST['user'];
$passw=$_REQUEST['passw'];
$enc=md5($passw);


include "koneksi.php";

if($user!="")
{
	$s=mysqli_query($db,"insert into user (username,password,status_user) 
		values ('$user','$tr','')");
?>
	<script type="text/javascript">
		alert("Data Berhasil Masuk");
		window.location = 'show.php';
	</script>

<?php	
}
else
{ ?>
<script type="text/javascript">
		alert("Mohon isi Username");
		window.location = 'show.php';
	</script>
<?php
}


?>