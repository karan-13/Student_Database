<?php
session_start();
	if(!isset($_SESSION['n'])) 
		header("location:Login.html");

?>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="users";

$con=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect");

//mysql_select_db($db_name , $con)or die("cannot select DB");

$name=$_SESSION["n"];

$sql="Delete from $tbl_name where Name='$name'";
session_unset();
session_destroy();

$result = mysqli_query($con,$sql);

mysqli_close($con);
?>
<html>
<script>

function redirect()
{
	window.location="Login.html";
}
</script>
<body bgcolor="#999999">
<center>
<h3>Your account has been Deleted<br><br>Click on back to get redricted to the login Page. </h3>
<br>
<input name="Back" type="button" value="Back" onClick="redirect()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:24px; background-color:#FF3333">
</center>
</body>
</html>