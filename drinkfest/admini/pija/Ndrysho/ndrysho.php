
<?php
$con=mysql_connect("localhost","root","") or die("");
mysql_select_db("drinkfest");

$emri=$_GET['emri'];

$emri_i_ri=$_GET['emri_i_ri'];

$emri=$_GET['emri'];
$prb=$_GET['perberesit'];
$sasia_l=$_GET['sasia_l'];
$sasia_a=$_GET['sasia_a'];
$sasia_sh=$_GET['sasia_sh'];
$viti=$_GET['viti_Prodhimit'];

$query = mysql_query("SELECT Emri,Perberesit,Sasia_ne_Litra,Sasia_e_Alkoolit,Sasia_e_Sheqerit,Viti_i_Prodhimit FROM pija WHERE Emri='$emri'") or die("problem");

  if (mysql_num_rows($query) != 0)
  {
     mysql_query("UPDATE pija SET Emri='$emri_i_ri', Perberesit='$prb', Sasia_ne_Litra='$sasia_l', Sasia_e_Alkoolit='$sasia_a', Sasia_e_Sheqerit='$sasia_sh' , Viti_i_Prodhimit='$viti' 
     	WHERE Emri='$emri'");


      $ResultsPageURL="ndrysho_pije.php";
      header("Location: {$ResultsPageURL}");
}
else 
{
echo "<script type='text/javascript'>

   	alert('Pija eshte dhene gabim!');

   	location.href='ndrysho_pije.php';

    </script>"; 
}
mysql_close($con);
?>