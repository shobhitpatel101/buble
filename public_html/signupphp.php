<?php
$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$sql="CREATE TABLE Person (Email CHAR(30),username CHAR(10),ids CHAR(10),passwords CHAR(10),gen CHAR(10))";
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 

if (mysqli_connect_errno())
  {
  echo "Failed to connect to Site:::: ";
  header('Location:error.html');
  exit;
  }
  
  if($_POST["gen"]=="M"||$_POST["gen"]=="m")
  {$gen='male';}
  if($_POST["gen"]=="F"||$_POST["gen"]=="f")
  {$gen='female';}

$sql="INSERT INTO Person (Email , username , ids, passwords , gen)
VALUES ('$_POST[Email]','$_POST[username]','$_POST[ids]','$_POST[passwords]','$gen')";

if (!mysqli_query($con,$sql))
  {header('Location:error.html');
    exit;

  
  }
echo "Signup Done !";

mysqli_close($con);
echo "<p style="."font-size:22px;text-align:center;"."><a href="."index.html".">=> Again Login</a></p>";


?>