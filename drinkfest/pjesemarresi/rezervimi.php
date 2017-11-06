<?php
	session_start();
	$eventi = $_POST['var'];
	$username = $_SESSION['myusername'];
	$username = mysql_real_escape_string($username);
	    $connect = mysql_connect("localhost","root", "");
	    if (!$connect) {
	        die(mysql_error());
	    }
	mysql_select_db("drinkfest");
	$query = mysql_query("SELECT EventiId FROM pjesemarresi WHERE Username='$username' LIMIT 1");
	$row = mysql_fetch_assoc($query);
	$a = $row['EventiId'];
	if (strcmp($a, $eventi) == 0)
	{
		echo "<script type='text/javascript'>
		alert('E keni rezervuar me pare!');
		location.href='eventet.php';
		</script>";
	}
	else 
	{
		mysql_query("UPDATE pjesemarresi SET EventiId = '$eventi' WHERE Username='$username'");
		$ResultsPageURL="eventet.php";
		header("Location: {$ResultsPageURL}");
	}
	mysql_close($connect);
?>