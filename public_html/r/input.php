<?php
$data=fopen("mydata.txt","a");
$revw="<p style="."font-size:20px"."><b>".$_GET['name'].":</b></p><br>".$_GET['rev'].".<br><hr>";
fwrite($data,$revw);
fclose($data);

header('Location:index.php');
exit;
?>