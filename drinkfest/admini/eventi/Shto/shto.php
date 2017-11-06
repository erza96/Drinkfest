
<?php
mysql_connect("localhost","root","");
mysql_select_db("drinkfest");

$data=$_GET['data'];
$khzgj=$_GET['kohezgjatja'];
$sponzori=$_GET['sponzori'];




$query = mysql_query("SELECT data FROM eventi WHERE data='$data'");

  if (mysql_num_rows($query) != 0)
  {
     echo "<script type='text/javascript'>

   	alert('Eventi eshte dhene gabim!');

   	location.href='shto_event.php';

    </script>";
}



else 
{
  mysql_query("INSERT into eventi(data,Kohezgjatja,Sponzori) values"."('{$data}','{$khzgj}','{$sponzori}')");

$ResultsPageURL="shto_event.php";
header("Location: {$ResultsPageURL}"); 
}
mysql_close($con);

?>