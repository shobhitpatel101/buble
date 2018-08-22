<?php


$id=$_POST["id"];
$pass=$_POST["password"];
$f=0;
$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$result = mysqli_query($con,"SELECT * FROM Person");

while($row = mysqli_fetch_array($result))
  {if($row['ids']==$id)
	  {if($row['passwords']==$pass)
		  { $uname=$row['username']; $f=1;
	       }
	   }
	  
  }
  
  if($f==0)
  { 
	  header('Location:error.html');
	  exit;
	  }
  
  
  mysqli_close($con);
?> 























<!doctype html>
<html>
<head>
<title>BuBle</title></title>
<link rel="icon" href="iconm">
<link rel="stylesheet" href="style.css">


</head>
<body bgcolor="#D3D3D3">
<div id="part">

<div id="header">
<h1 style="font-size:50px;color:#5500ff;text-align:center">BuBle</h1>

<div id="subheader">
<span style="font-size:20px;color:#5500ff">Blink U Biger Level!!</span>
</div>

<div id="login">
 <form name="login" method="post" action="index.html">
 <fieldset>
 <legend>Login Details</legend>
 <table>
 <tr><td>Id: </td><td><b><?php echo $id;?></b></td></tr>
 <tr><td>Username: </td><td><b><?php echo $uname;?> </b></td></tr>
 <tr><td></td><td></td><td><button onclick="index.html">Logout</button>
 </td>
 </tr>
								
 </table>
 </fieldset>
 </form>
 </div>
 

 <hr border="5px">
</div>



<div id="menu">
<br>
<b style="font-size:22px">Blinks Of</b><br><br>
<a href="today.html" id="today">Today</a><br>
<a href="yesterday.html" id="yesterday">Yesterday</a><br>
<a href="last7days.html" id="last7days">Last 7days</a><br>
<a href="last30days.html" id="last30days">Last 30days</a><br>
<br>
<hr>
<h2>Related</h2>
<form method="post" action="related.php">
<input type="text" value="<?php echo $id; ?>" name="id" style="display:none">
<input type="text" value="<?php echo $pass; ?>" name="pass" style="display:none">
&nbsp&nbsp<button value="submit" name="submit" style="background-color:#99aaff;width:150px">Submit Your views</button>
<br>
&nbsp&nbsp<button value="profile" name="submit" style="background-color:#99aaff;width:150px">View Your <b>Profile</b></button>
</form>

</div>

<div id="body">






<form method="get" action="search.php">
 
 <span id="search">Search:</span>
 <input type="text" name="search" id="search" placeholder="Enter your Search"><button value="submit" id="ssearch">Search</button>
 
 </form>
 
 <br>
 <p style="font-size:30px;font-style:bold;font-family:sens-serif" >Latest Blinks</p>
 <br>
 <ol type="1">
 <?php
$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$result1=mysqli_query($con,"SELECT * FROM Pblog");

while($row1=mysqli_fetch_array($result1))
{echo "<li><hr><p style="."text-align:center;font-size:20px;"."><b>".$row1['bloghd']."</b></p><br>".$row1['blog']."<hr><br></li>";}

?>
</ol>
</div>

<div id="last">
<p style="text-align:center">Shobhit&copy2016</p>

<?php for($i=0;$i<77;$i++) echo "&nbsp"; ?>
<a href="#part" style="border:1px solid;padding:1px 150px;text-decoration:none;background:white;">Back to top^</a>

</div>
</div>

</body>
</html>