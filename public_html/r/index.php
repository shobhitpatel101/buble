<!doctype html>
<html>
<head>
<title>Reviews</title>
</head>
<body bgcolor="#D3D3D3">
<div style="height:50px;width:400px;background:#111144">
<p style="font-size:25px;text-align:center;color:#2299ff"><b><u>Reviews</u></b></p>
</div>



<?php
$i=10000;
$data=fopen("mydata.txt","r");
for ($j=0;$j<$i;$j++)
{echo fgets($data);
}
fclose($data);
?>

<div style="height:100px;width:400px;background:#2299ff">


<form method="get" action="input1.html">
<button value="submit">Submit Reviews</button>
</form>
<p style="text-align:center">Shobhit & Atul & Ansh&copy2016 </p>
</div>
</body>
</html>