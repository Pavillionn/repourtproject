<?php 
include "koneksi.php";

$idd=$_REQUEST['id'];

$del=mysqli_query($db,"delete from UKK where id_user='$idd'");

?>
<script type="text/javascript">
		alert("Data Berhasil di hapus");
		window.location = 'admin.php';
	</script>