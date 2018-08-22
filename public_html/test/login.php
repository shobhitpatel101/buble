<?php
$uid=$_POST["id"];
$upass=$_POST["password"];
$f=0;

$f=0;
$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$result = mysqli_query($con,"SELECT * FROM Person");

while($row = mysqli_fetch_array($result))
  {if($row['ids']==$uid)
	  {if($row['passwords']==$upass)
		  { $f=1;
header('Location:main page .html');
exit;
	       }
	   }
	  
  }
  
  if($f==0)
  { 
	  echo "Wrong input";
	  }
  
  
  mysqli_close($con);
?> 

