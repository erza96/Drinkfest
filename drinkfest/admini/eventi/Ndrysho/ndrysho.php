<?php
$con=mysql_connect("localhost","root","") or die("");
mysql_select_db("drinkfest");

$data=$_GET['data'];

$data_ndrysh=$_GET['data_ndrysh'];
$khzgj=$_GET['kohezgj'];
$sponzori=$_GET['sponzori'];


$query = mysql_query("SELECT data,Kohezgjatja,Sponzori FROM eventi WHERE data='$data' ") or die("problem");


  if (mysql_num_rows($query) != 0)
  {
    
     mysql_query("UPDATE eventi SET data='$data_ndrysh',Kohezgjatja='$khzgj', Sponzori='$sponzori' WHERE data='$data'");

    

      $ResultsPageURL="ndrysho_event.php";
      header("Location: {$ResultsPageURL}");
}
else 
{
   echo "<script type='text/javascript'>

   	alert('Eventi eshte dhene gabim!');

   	location.href='ndrysho_event.php';

    </script>";
}
mysql_close($con);

?>