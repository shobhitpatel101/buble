<?php


$id=$_POST["id"];
$pass=$_POST["pass"];
$f=0;
$con=mysqli_connect("mysql11.000webhost.com","a9540415_root","shobhit","a9540415_member");


$result = mysqli_query($con,"SELECT * FROM Person");

while($row = mysqli_fetch_array($result))
  {if($row['ids']==$id)
	  {if($row['passwords']==$pass)
		  { $f=1;
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
<link rel="icon" href="icon">
<link rel="stylesheet" href="styleerror.css">
<script>
function msg()
{ var flag=true;
if(document.getElementById('bloghd').value==""||document.getElementById('bloghd').value==null)
{flag=false;

document.getElementById('bloghd').style.border="2px red solid";


}

else
{document.getElementById('bloghderror').innerHTML="";
}

if(document.getElementById('blog').value==""||document.getElementById('blog').value==null)
{flag=false;

document.getElementById('blog').style.border="2px red solid";

}
else
{document.getElementById('blogerror').innerHTML="";
}
return flag;
}
</script>

</head>
 <body bgcolor="#D3D3D3">
    <div id="part">

       <div id="header">
			<h1 style="font-size:50px;color:#0000ff;text-align:center">BuBle</h1>

			<div id="subheader">
				<span style="font-size:20px;color:#3300ff">Blink U Biger Level!!</span>
			</div>
				<hr border="5px">
		</div>
		<div id="body">
			<p style="font-size:22px;text-align:center;">You are FREE and always will be to VOTE TRUTH.</p>
			


<?php



if($_POST["submit"]=="submit") 
?> <form method="post" action="submitb.php" onclick="return msg()">
             <input type="text" value="<?php echo $id; ?>" name="id" style="display:none">
			 <input type="text" value="<?php echo $pass; ?>" name="pass" style="display:none">
						<fieldset>
							<legend>Blog Details</legend>
								<table>
									<tr><td>Blog Heading</td><td><input type="text" id="bloghd" style="width:800px" name="bloghd"placeholder="Enter Blog Heading">
									</td>
									<td id="bloghderror"></td>
									</tr>
									<tr><td>Blog</td><td><textarea name="blog" id="blog" Placeholder="Enter your Blog here." style="width:800px;height:250px;"></textarea></td>
									<td id="blogerror"></td>
									</tr>
									<tr>
								<td></td>
								<td><button type="Reset" value="Reset" style="background-color:#99aaff">Reset</button> <button type="submit" value="Submit" style="background-color:#99aaff">Submit</button></td>
								</tr>
								</table>
						</fieldset>
				</form>
			             

	<?php			
				
				
 if($id=$_POST["submit"]=="profile")
 header('Location:profile.php');
	 ?>
						
</div>
<div id="last">
			<p style="text-align:center">Shobhit&copy2016</p>
		</div>
		</body>
		</html>