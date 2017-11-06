<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: caj.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Caj</title>
    <link href="../../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="body">
    <ul class="header">
        <p class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DrinkFest<img src="../../images/glass.png" height = 40px></p>
        <li><a href="../index.php">Kryefaqja</a></li>
        <li><a class="active" class="unclickable" href="">Galeria</a>
            <ul>
                <li><a href="vere.php">Verë</a></li>
                <li><a href="kafe.php">Kafe</a></li>
                <li><a class="active" href="caj.php">Çaj</a></li>
            </ul>
        </li>
        <li><a href="../rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="../kontakti.php">Kontakti</a></li>
        <li class="unclickable"><a><img src="../../images/line.png"></a>
        <li><a href="../eventet.php">Eventet</a></li>
        <li><a href="../../login/logout.php">Shkyçu</a></li>
    </ul>


    <div id="pagedrink" class="unclickable"> 

        <center><img src="../../images/divider.png" height="10%" width="100%"></center>

        <table>
            <tr>
                <td><img src="../../images/caj-jeshil.png" height="50%"></td>
                <td><div id="h">Çaj i gjelbër!</div><br>Çaji i gjelbër e ka origjinën nga Kina. Një nga çajërat më të preferuar në botë  për nga vetitë e tij kuruese dhe qetësuese. Ka shumë të mira që na ofron si p.sh. lufton kancerin, ndihmon tretjen, ngadalëson procesin e plakjes etj.</td>
            </tr>

        </table>

        <center><img src="../../images/divider.png" height="10%" width="100%"></center>

        <table>
            <tr>
                <td><img src="../../images/fruta-lule.png" height="50%"></td>
                <td><div id="h">Çaj i frutave!</div><br>Përzierja e frutave të ndryshme i bën këto çajëra qetësuese dhe kuruese. Çajërat me fruta nuk përmbajnë kafeinë dhe mund të konsumohen gjatë gjithë ditës, veçanërisht në mbrëmje. Mund të konsumohen të nxehtë dhe të ftohtë dhe janë të rekomandueshme për të lehtësuar stresin.</td>
            </tr>

        </table>

        <center><img src="../../images/divider.png" height="10%" width="100%"></center>

        <table>
            <tr>
                <td><img src="../../images/caj-i-zi.png" height="50%"></td>
                <td><div id="h">Çaj i zi!</div><br>Një nga çajërat më të pëlqyer në botë, për nga vetitë e tij ushqyese dhe të dobishme për shëndetin tonë. Çaji i zi përdoret për të trajtuar dhimbjen e kokës dhe për të parandaluar bllokimin e arterieve fal përbërësëve që ka. Merret nga e njëjta bimë si çaji i gjelbër dhe i bardhë vetëm se është plotësisht i fermentuar.</td>
            </tr>

        </table>

        <center><img src="../../images/divider.png" height="10%" width="100%"></center>


    </div>

    <div id="footer">
        <h4>© 2015 DrinkFest</h4>
        <h5>Të gjitha të drejtat e rezervuara. All rights reserved | Waber Co. Design</h5>
    </div> 
</body>
</html>