<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Kryefaqja</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="body">
    <ul class="header">
        <p class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DrinkFest<img src="../images/glass.png" height = 40px></p>
        <li><a class="active" href="index.php">Kryefaqja</a></li>
        <li><a class="unclickable" href="">Galeria</a>
            <ul>
                <li><a href="galeria/vere.php">Verë</a></li>
                <li><a href="galeria/kafe.php">Kafe</a></li>
                <li><a href="galeria/caj.php">Çaj</a></li>
            </ul>
        </li>
        <li><a href="rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="kontakti.php">Kontakti</a></li>
        <li class="unclickable"><a><img src="../images/line.png"></a>
        <li><a href="eventet.php">Eventet</a></li>
        <li><a href="../login/logout.php">Shkyçu</a></li>
    </ul>

    <div id="welcome" class="unclickable">
        <h2>Mirë se erdhe , <?php echo $_SESSION['myusername']?>!</h2> 
        <img src="../images/winshelf.jpg" width = 100% height=330px >
        <h2>Shijoni kënaqësinë nga raftet e përzgjedhura!</h2>
        <table>
            <tr><img src="../images/winequote.jpg" width=33% height = 330px></tr>
            <tr><img src="../images/beerquote.png" width=33% height = 330px></tr>
            <tr><img src="../images/coffeequote.jpg" width=33% height= 330px></tr>
        </table>       
    </div>

    <div id="footer">
    	<h4>© 2015 DrinkFest</h4>
        <h5>Të gjitha të drejtat e rezervuara. All rights reserved | Waber Co. Design</h5>
	</div> 
</body>
</html>