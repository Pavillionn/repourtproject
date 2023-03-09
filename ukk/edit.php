<?php 
include "koneksi.php";

$idd=$_REQUEST['id'];

$s=mysqli_query($db,"select * from user where  id_user='$idd'");
$u=mysqli_fetch_array($s);
	$id_s=$u['id_user'];
	$usern=$u['username'];
	$pass=$u['password'];
	$stats=$u['status_user'];
?>
<form method="post" action="edit_proses.php">
	<input type="hidden" name="id" value="<?php echo $id_s; ?>">
	Username <input type="text" name="user" value="<?php echo $usern; ?>"><br>
	Password <input type="text" name="passw" value="<?php echo $pass; ?>"><br>
	<input type="submit" name="simpan" value="Save">
</form>