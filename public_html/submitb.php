<?php


$id=$_POST["id"];
$pass=$_POST["pass"];
$f=0;
$con=mysqli_connect('mysql11.000webhost.com','a9540415_root','shobhit','a9540415_member');

$result = mysqli_query($con,"SELECT * FROM person");
while($row = mysqli_fetch_array($result))
  {if($row['ids']==$id)
	  {if($row['passwords']==$pass)
		  { $uname=$row['username']; $f=1;
	       }
	   }
	
  }
  
 if($f==0)
  { 
	  /*header('Location:error.html');
	  exit;*/
	  }
  
  
  mysqli_close($con);
  
  
  $con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$sql="CREATE TABLE pblog(username CHAR(10),ids CHAR(10),bloghd CHAR(50) ,blog CHAR(200)";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to Site:::: ";
  echo "<p style="."font-size:22px;text-align:center;"."><a href="."index.html".">=> Goto Login page</a></p>";
  }
  
  
$sql="INSERT INTO pblog(username,ids,bloghd,blog)
VALUES ('$uname','$_POST[id]','$_POST[bloghd]','$_POST[blog]')";

if (!mysqli_query($con1,$sql))
  {header('Location:error.html');
    exit;

  
  }
echo "<p style="."font-size:22px;text-align:center".">Submit Done !</p>";

mysqli_close($con1);
echo "<p style="."font-size:22px;text-align:center;"."><a href="."main.php".">=> Goto main page</a></p>";


?> 

