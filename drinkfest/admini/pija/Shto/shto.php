
<?php
$con=mysql_connect("localhost","root","") or die("");
mysql_select_db("drinkfest");

$emri=$_GET['emri'];
$prb=$_GET['perberesit'];
$sasia_l=$_GET['sasia_l'];
$sasia_a=$_GET['sasia_a'];
$sasia_sh=$_GET['sasia_sh'];
$viti=$_GET['viti_Prodhimit'];


$query = mysql_query("SELECT Emri FROM pija WHERE Emri='$emri'"); //qitu sjom e sigurt a duhet qeshtu 

  if (mysql_num_rows($query) != 0)
  {
  	echo "<script type='text/javascript'>

   	alert('Pija eshte dhene gabim!');

   	location.href='shto_pije.php';

    </script>"; 
}
else 
{
  mysql_query("INSERT into pija(Emri,Perberesit,Sasia_ne_Litra,Sasia_e_Alkoolit,Sasia_e_Sheqerit,Viti_i_Prodhimit) values"." ('{$emri}','{$prb}','{$sasia_l}','{$sasia_a}','{$sasia_sh}','{$viti}')"); //provoje tash kqyr a po bon
    

$ResultsPageURL="shto_pije.php";
header("Location: {$ResultsPageURL}"); 
}

mysql_close($con); 
?>