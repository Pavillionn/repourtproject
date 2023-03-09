<?php
$user=$_REQUEST['user'];
$passw=$_REQUEST['passw'];

include "koneksi.php";

$s=mysqli_query($db,"select * from ukklogin where username='$user' and password='$passw'");
$j=mysqli_fetch_array($s);

$usern=$j['username'];
$passs=$j['password'];
$status=$j['status_user'];

if($status=="member")
{
    session_start();
    $_SESSION['member']=$j['username'];
    $_SESSION['id_user']=$j['id_user'];


?>
<script type="text/javascript">

window.location = 'home.php';

</script>
<?php  }
elseif($status=="admin")
{
    session_start();
    $_SESSION['admin']=$j['username'];
    $_SESSION['id_user']=$j['id_user'];
    ?>

<script type="text/javascript">

window.location = 'dashboard.php';

</script>

<?php }
else
{ ?>
   <script type="text/javascript">
    alert("Login Gagal")
    window.location = 'login.php';

</script>
<?php
}

?>