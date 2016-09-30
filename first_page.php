
<?php
session_start();
	if(!isset($_SESSION['n'])) 
		header("location:Login.html");

?><html>
<script>
function About_me()
{
	window.location="About_me.php";
}

function Delete()
{	
	var result=confirm("Are you sure you want to delete your account?");
	if(result)
	{
	window.location="Delete.php";
	}
}

function Log_out()
{
	window.location="Log_out.php";
}
</script>

<body style="font-family:'Comic Sans MS', cursive;" bgcolor="#FF00FF">
<p align="right">
<?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("m/d/Y"); ?>
<p align="right">
<input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<table width="441" height="10" cellspacing="0" align="left">
  <tr>
  <td width="64"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333' " bgcolor='#FF3333' ><input name="About" type="button" size="50" value="Details" onClick="About_me()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="font-size:larger; border:0pt; background-color:'#FF3333'"></td>

    
    <td width="58"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" bgcolor='#FF3333'><input name="Delete" type="button" value="Delete" onClick="Delete()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333';"></td>
    </tr>
</table>
 <center>
      <!--tableMain-->
<table align="center" width="1441" height="625">
				<tr>
              <td width="500" style="font-size:36px">About Us </td>
              <td width="42" align="center" height="92" style="font-size:36px" style="font-family:'Comic Sans MS', cursive; font-size:27;">	</td>
            </tr>
            <tr>
            <b><i>
              <td width="543" style="font-size:20px"><b> It is a small attempt to replicate the Student Database management system.<br>It allows the user to sign up into a new account and allows him to view his details and also to delete his account.
              <br>Click on Details to view the complete student Profile</b></li>
                </ul>
                </td></i>
                </b>
                
                    
</table>

</body>

</html>