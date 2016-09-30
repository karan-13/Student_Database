<?php 
session_start();
?>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="users";

$con=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect");

//mysql_select_db($db_name , $con)or die("cannot select DB");

$ID = $_POST["id"];
$PASSWORD = $_POST["pass"];


$sql="SELECT * FROM $tbl_name WHERE Name='$ID' && Password='$PASSWORD'";


$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);

if($rowcount==1){
	$_SESSION["n"]=$ID;
	$_SESSION["P"]=$PASSWORD;
	header("Location: first_page.php");
	}
else{
	header("Location: Error.html");
	}

mysqli_close($con);
?>