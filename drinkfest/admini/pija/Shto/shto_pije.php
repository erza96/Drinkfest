<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: shto_pije.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Kryefaqja</title>
    <link href="../../../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="body">
    <ul class="header">
        <p class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DrinkFest<img src="../../../images/glass.png" height = 40px></p>
        <li><a href="../../index.php">Kryefaqja</a></li>
        <li><a href="../../galeria.php">Galeria</a></li>
        <li><a href="../../rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="../../kontakti.php">Kontakti</a></li>
        <li class="unclickable"><a><img src="../../../images/line.png"></a>
        <li><a class="active" class="unclickable" href="x">Menaxho</a>
            <ul>
                <li><a href="../../Eventi/shto/shto_event.php">Eventet</a></li>
                <li><a class="active" href="shto_pije.php">Pijet</a></li>
            </ul>
        </li>
        <li><a href="../../../login/logout.php">Shkyçu</a></li>
    </ul>

    <div id="page">
        <ul class="header">
            <li><a class="active" href="/shto_pije.php">Shto Pije</a></li>
            <li><a href="../fshi/fshi_pije.php">Fshi Pije</a></li>
            <li><a href="../ndrysho/ndrysho_pije.php">Ndrysho Pije</a></li>
        </ul>

    	<form action="shto.php">
   			<table style="width:30%;float:left;"><tr>
				<tr><td><input type="text" name="emri" placeholder="Emri" required></td></tr>
                <tr><td><input type="text" name="perberesit" placeholder="Përbërësit" required></td></tr>
                <tr><td><input type="text" name="sasia_l" placeholder="Sasia në litër" required></td></tr>
                <tr><td><input type="text" name="sasia_a" placeholder="Sasia e alkoolit" required></td></tr>
                <tr><td><input type="text" name="sasia_sh" placeholder="Sasia e sheqerit" required></td></tr>				
				<tr><td><input type="text" name="viti_Prodhimit" placeholder="Viti i prodhimit" required></td></tr>
				<tr><td><input type="submit" value="Shto"></td></tr> 

    		</table>
    	</form>
    </div>

    <div id="footer">
        <h4>© 2015 DrinkFest</h4>
        <h5>Të gjitha të drejtat e rezervuara. All rights reserved | Waber Co. Design</h5>
    </div> 
</body>
</html>
