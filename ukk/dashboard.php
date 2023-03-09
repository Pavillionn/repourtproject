<?php
session_start();

echo "Welcome ".$_SESSION['admin'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<style>
body {font-family: sans-serif;}

.sidebar {
  height: 2000px;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #9DC08B;
  overflow-x: hidden;
  padding-top: 19px;
}

.sidebar a {
  padding: 22px 9px 4px 16px;
  text-decoration: none;
  font-size: 20px;
  color:#40513B;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 16px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

/*table*/
table {
  width: 100%;
  border: 1px solid #ddd;
  padding: 20px;
  padding-bottom: 200px;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #9DC08B;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: whitesmoke;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 21px;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
  border-radius: 10px;
  
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

.row {
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}

.course-col {
    flex-basis: 31%;
    background: #40513B;
    color: #f1f1f1;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}

.course-col:hover {
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
}

@media(max-width: 700px) {
    .row {
        flex-direction: column;
    }
}

/*---------- Tabel Section ----------*/

.tabel {
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/admin.jpeg);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
}
.tabel h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}

@media(max-width: 700px) {
    .table h1{
        font-size: 24px;
    }
}
</style>
</head>
<body>

<div class="sidebar">
  <i class='bx bx-font-family' style='
  color:#ffffff;
  font-size:100px;
  align-items:center;
  color:aliceblue;
  padding-top:10px;
  padding-bottom:20px;
  padding-left:20px;
  '></i>
  <a href="admin.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="blogs.php"><i class="fa fa-fw fa-user"></i> Blogs</a>
  <a href="login.php"><i class='bx bxs-log-out-circle'></i> Sign-Out</a>
</div>

<!-- MAIN (Center website) -->
<div class="main">
<div class="topnav">
  <a href=""><b>Dashboard</b></a>
  <input type="text" placeholder="Search..">
</div>

        <div class="row">
            <div class="course-col">
                <h3 style="
                font-size: 18px;
                text-align: center;
                font-weight: 600;
                margin: 10px 0;
                ;"></h3>
                <p style="
                text-align: center;
                font-size: 30px;
                ;"><b><i class='bx bxs-book-reader'></i></b></p>

                <p style="text-align: center;"><b></b></p>
            </div>
            <div class="course-col">
                <h3 style="
                font-size: 18px;
                text-align: center;
                font-weight: 600;
                margin: 10px 0;"></h3>
                <p style="
                text-align: center;
                font-size: 30px;
                ;"><b></b> <i class='bx bxs-message-rounded-dots'></i></p>

             <p style="text-align: center;"><b></b></p>
            </div>
            <div class="course-col">
                <h3 style="
                font-size: 18px;
                text-align: center;
                font-weight: 600;
                margin: 10px 0;"></h3>
                <p style="
                text-align: center;
                font-size: 30px;
                ;"><b></b><i class='bx bxs-like'></i></p>

            <p style="text-align: center;"><b></b></p>
            </div>
        </div>
    </section>

  <table border="1" style="padding: 20px;">
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		<th>Status</th>
		<th>Option</th>
	</tr>

<?php
include "./koneksi.php";
$no=1;
$s=mysqli_query($db,"select * from ukklogin");
while($u=mysqli_fetch_array($s))
{
	$id_s=$u['id_user'];
	$usern=$u['username'];
	$pass=$u['password'];
	$stats=$u['status_user']; ?>
<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $usern; ?></td>
		<td><?php echo $pass; ?></td>
		<td><?php echo $stats; ?></td>
		<td><a href="./edit.php?id=<?php echo $id_s; ?>" style="text-decoration: none; color:#062743;"> Edit </a> | 
			<a href="./delete.php?id=<?php echo $id_s; ?>" style="text-decoration: none; color:#062743;"> Delete</a></td>
	</tr>
<?php
$no++;
}

?>

</table>


</div>



</div>
  
</div>
     
</body>
</html> 