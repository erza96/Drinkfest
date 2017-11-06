
<?php
$con=mysql_connect("localhost","root","") or die("");
mysql_select_db("drinkfest");


$data=$_GET['data'];


$query = mysql_query("SELECT data FROM eventi WHERE data='$data'");

  if (mysql_num_rows($query) != 0)
  {
  	  mysql_query("DELETE FROM `eventi` WHERE `data` = '$data'");

        $ResultsPageURL="fshi_event.php";
        header("Location: {$ResultsPageURL}"); 
      
  }
else 
{
     echo "<script type='text/javascript'>

   	alert('Eventi eshte dhene gabim!');

   	location.href='fshi_event.php';

    </script>";  
}
mysql_close($con);
?>