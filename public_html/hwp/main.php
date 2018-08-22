<?php


$id=$_POST["u"];
$pass=$_POST["pass"];
$f=0;
$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$result = mysqli_query($con,"SELECT * FROM user");

while($row = mysqli_fetch_array($result))
  {if($row['username']==$id)
	  {if($row['password']==$pass)
		  { $uname=$row['name'];
		$city=$row['city'];
		$email=$row['email'];
		
		 $f=1;
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










