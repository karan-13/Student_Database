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

$n=$_SESSION["n"];

$sql="Select * from $tbl_name where Name='$n'";

$result = mysqli_query($con,$sql);


mysqli_close($con);
?>

<html>
<script>
function Log_out()
{
	window.location="Log_out.php";
}
function Back()
{
		window.location="first_page.php";
}
</script>
<body style="font-family:'Comic Sans MS', cursive;" bgcolor="#00FF66"><p align="right" >
<?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<center>
<?php
 echo "<h1>welcome ".$_SESSION["n"]."</h1>"; 
?>
<?php
if(mysqli_num_rows($result)>0)
{
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"4\">";
echo "<Tr><th>Did</th><th>Name</th><th>Blood Group</th><th>Age</th><th>Sex</th><th>Phone no</th><th>Address</th><th>Password</th></tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr><td>".$row['Did']."</td><td>".$row['Name']."</td><td>".$row['Blood_Group']."</td><td>".$row['Age']."</td><td>".$row['Sex']."</td><td>".$row['Phone_no']."</td><td>".$row['Address']."</td><td>".$row['Password']."</td></tr>";
    echo "<br>";
}
echo "</table>";
}
else
{
	echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"4\">";
	echo "<Tr><th>Did</th><th>Name</th><th>Blood_group</th><th>Age</th><th>Sex</th><th>Phone_no</th><th>Address</th></tr>";
	echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>";

}
?>
<br>
<input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> 
</Center>
</body>
</html>