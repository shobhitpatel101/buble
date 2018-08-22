<!doctype html>
<html>
<head>
<title>BuBle</title></title>
<link rel="icon" href="icon">
<link rel="stylesheet" href="styleerror.css">
</head>
<body>
<div id="body">
<?php

$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$result = mysqli_query($con,"SELECT * FROM Person");

while($row = mysqli_fetch_array($result))
{ $idss=$row['ids'];
	$passs=$row['passwords'];
	$username=$row['username'];
	$email=$row['Email'];
	$gen=$row['gen'];
}
	
	mysqli_close($con);
?>

<form name="login" method="post" action="main.php">
						<fieldset>
							<legend>Your Details</legend>
								<table>
								<tr><td>Email</td><td><input type="Email" name="Email" id="Email" value='<?php echo $email;?>' ><td id="Emailerror"></td></td></tr>
								<tr><td>User name</td><td><input type="text" name="username" id="username" 	value='<?php echo $username;?>'td><td id="uerror"></td></tr>
								<tr><td>Id</td><td><input type="text" name="ids" id="ids" value='<?php echo $idss;?>'></td><td id="ideerror"></td></tr>
								<tr><td>Password</td><td><input type="text" name="passwords" id="passwords" value='<?php echo $passs;?>'></td><td id="passeeror"></td></tr>
								<tr>
								<td>Gender</td>
								<td><input type="text" name="gen" id="m" value='<?php echo $gen;?>'></td>
								</tr>
								
							<tr></tr>
								<tr>
								<td></td>
								<td><button value="ok" style="background-color:#99aaff">Ok</td>
								</tr>
							</table>
						</fieldset>
				</form>
				
		
</div>
<div id="last">
			<p style="text-align:center">Shobhit&copy2016</p>
		</div>
		</body>
		</html>