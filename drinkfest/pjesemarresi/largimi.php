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
    mysql_query("UPDATE pjesemarresi SET EventiId = NULL WHERE Username='$username'");
	$ResultsPageURL="eventet.php";
	header("Location: {$ResultsPageURL}");
	mysql_close($connect);
?>