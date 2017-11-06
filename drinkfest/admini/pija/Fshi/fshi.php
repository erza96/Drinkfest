
<?php
$con=mysql_connect("localhost","root","") or die("");
mysql_select_db("drinkfest");


$emri=$_GET['emri'];


$query = mysql_query("SELECT Emri FROM pija WHERE Emri='$emri'");

  if (mysql_num_rows($query) != 0)
  {
  	  mysql_query("DELETE FROM `pija` WHERE `Emri` = '$emri'");

        $ResultsPageURL="fshi_pije.php";
        header("Location: {$ResultsPageURL}"); 
      
  }
else 
{
     echo "<script type='text/javascript'>

   	alert('Pija eshte dhene gabim!');

   	location.href='fshi_pije.php';

    </script>"; 
}
mysql_close($con);
?>