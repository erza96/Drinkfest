<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: kafe.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Kafe</title>
    <link href="../../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="body">
    <ul class="header">
        <p class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DrinkFest<img src="../../images/glass.png" height = 40px></p>
        <li><a href="../index.php">Kryefaqja</a></li>
        <li><a class="active" class="unclickable" href="">Galeria</a>
            <ul>
                <li><a href="vere.php">Verë</a></li>
                <li><a class="active" href="kafe.php">Kafe</a></li>
                <li><a href="caj.php">Çaj</a></li>
            </ul>
        </li>
        <li><a href="../rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="../kontakti.php">Kontakti</a></li>
        <li class="unclickable"><a><img src="../../images/line.png"></a>
        <li><a class="unclickable" href="">Menaxho</a>
            <ul>
                <li><a href="../Eventi/shto/shto_event.php">Eventet</a></li>
                <li><a href="../Pija/shto/shto_pije.php">Pijet</a></li>
            </ul>
        </li>
        <li><a href="../../login/logout.php">Shkyçu</a></li>
    </ul>

    <div id ="pagedrink">
            <center><img src="../../images/divider.png" height="10%" width="100%"></center>
            <table>
                <tr>
                    <td><img src="../../images/kafe-ekspres-arabica.png" height="60%"></td>
                    <td><div id="h">Kafe ekspres - Arabica!</div><br>Tashmë kafeja që kryeson tregun e cilësisë se lartë në fushën e kafesë në Shqipëri dhe jo vetëm, është një kafe 100% arabike e ardhur direkt nga Brazili eksluzivisht për kompaninë “Mulliri Vjetër”, është një mishele e përkryer e dy llojeve të kafesë 100% arabike.</td>

                </tr>
            </table>           

            <center><img src="../../images/divider.png" height="10%" width="100%"></center>
            
            <table>
                <tr>
                    <td><img src="../../images/kafeekspres.png" height="60%"></td>
                    <td><div id="h">Kafe ekspres - Crema bar!</div><br>Ky lloj i kafesë është mjaft i përhapur. Ne e sjellim në promovime me cilësi të lartë. Mund ta gjeni kudo në botë. Në rajonin tonë mund ta gjeni nga "Mulliri i vjetër".</td>

                </tr>
            </table>

            <center><img src="../../images/divider.png" height="10%" width="100%"></center>

            <table>
                <tr>
                    <td><img src="../../images/kafesupreme.png" height="60%"></td>
                    <td><div id="h">Kafe ekspres - Supreme!</div><br>Kjo shije është e importuar direkt nga vendet e origjinës: Brazil, Kolumbi, Meksikë, Panama, Kenja. Kanë një kualitet të shkëlqyeshëm: të ëmbël, pak të hidhur, me çokollatë etj.</td>

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