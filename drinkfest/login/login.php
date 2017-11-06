<?php
session_start();
$host="localhost";
$username="root"; 
$password="";
$db_name="drinkfest";

mysql_connect("localhost", "root", "")or die("Cannot connect");
mysql_select_db("drinkfest")or die("Cannot select DB");

$myusername=$_POST['pseudonimi']; 
$mypassword=$_POST['fjalekalimi'];

$myusername = mysql_real_escape_string($myusername);

if(filter_var($myusername, FILTER_VALIDATE_EMAIL)) {
	$mypassword = mysql_real_escape_string($mypassword);
    $sql="SELECT * FROM menaxheri WHERE Email='$myusername' and Fjalekalimi='$mypassword'";
	$result=mysql_query($sql);
    $count=mysql_num_rows($result);
	if($count==1){
	$_SESSION["myusername"] = $myusername;
	$_SESSION["mypassword"] = $mypassword;
	header("location:../admini/index.php");
			}
	else {
	echo "<script type='text/javascript'> 

   	alert('Ju keni shenuar e-mail-in ose fjalekalimin gabim!');

   	location.href='../login.html';

    </script>";
		 }
													}
else {
	$mypassword = crypt(mysql_real_escape_string($mypassword), 'palidjidsjfhasf@#kdfm..vc/');
	$sql="SELECT * FROM pjesemarresi WHERE Username='$myusername' and Fjalekalimi='$mypassword'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){
	$_SESSION["myusername"] = $myusername;
	$_SESSION["mypassword"] = $mypassword;
	header("location:../pjesemarresi/index.php");
				 }
	else {
	echo "<script type='text/javascript'>

   	alert('Ju keni shenuar pseudonimin ose fjalekalimin gabim!');

   	location.href='../login.html';

    </script>";
	 }
    
     }
?>