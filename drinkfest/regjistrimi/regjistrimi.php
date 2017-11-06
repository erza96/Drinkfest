
<?php
$con=mysql_connect("localhost","root","") or die("");
mysql_select_db("drinkfest");


$name=$_GET['emri'];
$lastname=$_GET['mbiemri'];
$age=$_GET['mosha'];
$email=$_GET['email'];
$username=$_GET['pseudonimi'];
$passi=crypt($_GET['fjalekalimi'], 'palidjidsjfhasf@#kdfm..vc/');


$query = mysql_query("SELECT Username FROM pjesemarresi WHERE Username='$username' AND Email='$email'"); 

if (mysql_num_rows($query) != 0)
{
	echo "<script type='text/javascript'>

   	alert('Shikoni mirë se pseudonimi ose email-i i tillë mund të ekizstojë!');

   	location.href='regjistrimi.html';

    </script>";
}
else 
{
	mysql_query("INSERT into pjesemarresi(Emri,Mbiemri,Mosha,Email,Username,Fjalekalimi) values"."('{$name}','{$lastname}','{$age}','{$email}', '{$username}','{$passi}')");
	$ResultsPageURL="../index.html";
	header("Location: {$ResultsPageURL}");
}
mysql_close($con);
?>
