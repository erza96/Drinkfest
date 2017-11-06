<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: rreth_nesh.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Rreth Nesh</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="body">
    <ul class="header">
        <p class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DrinkFest<img src="../images/glass.png" height = 40px></p>
        <li><a href="index.php">Kryefaqja</a></li>
        <li><a class="unclickable" href="">Galeria</a>
            <ul>
                <li><a href="galeria/vere.php">Verë</a></li>
                <li><a href="galeria/kafe.php">Kafe</a></li>
                <li><a href="galeria/caj.php">Çaj</a></li>
            </ul>
        </li>
        <li><a class="active" href="rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="kontakti.php">Kontakti</a></li>
        <li class="unclickable"><a><img src="../images/line.png"></a>
        <li><a href="eventet.php">Eventet</a></li>
        <li><a href="../login/logout.php">Shkyçu</a></li>
    </ul>

   <div id="page">

        <table>
            <tr>
                <th></th>
                <th> &nbsp;Pozita: &nbsp; &nbsp;</th>
                <th>Emri: &nbsp; &nbsp;</th>
                <th>Mbiemri: &nbsp; &nbsp;</th>
                <th>Datëlindja: &nbsp; &nbsp;</th>
                <th>Vendlindja: &nbsp; &nbsp;</th>
                <th>Vendbanimi:</th>

            </tr>
            <tr>
                <td><img src="../images/besa.jpg" height="150px" border="2"></td>
                <td>&nbsp;CEO</td>
                <td>Besmire</td>
                <td>Thaqi</td>
                <td>10/08/1996</td>
                <td>Prizren</td>
                <td>Prizren</td>
            </tr>
            <tr>
                <td><img src="../images/erza.jpg" height="150px" width="111px" border="2"></td>
                <td>&nbsp;CEO</td>
                <td>Erza</td>
                <td>Hoti</td>
                <td>17/07/1996</td>
                <td>Prizren</td>
                <td>Prizren</td>
            </tr>
            <tr>
                <td><img src="../images/valon.jpg" height="150px" width="111px" border="2"></td>
                <td>&nbsp;CEO</td>
                <td>Valon</td>
                <td>Kito</td>
                <td>23/10/1995</td>
                <td>Prizren</td>
                <td>Prizren</td>
            </tr>
        </table>
        <br><br><br><br>
        <table>

        <tr><td><p><center>Adresa:<br> <i>Rr."Ersan Mazreku"<br> Prizren<br>Kosovë</i></center></p></td>

        <td><center><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="600" height="300" src="https://maps.google.com/maps?hl=en&q=42.220760, 20.741382&ie=UTF8&t=satellite&z=30&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="https://ww.premiumlinkgenerator.com/">premium link generator</a></small></div></iframe></center></td>
        </tr>
        </table>


    </div>
    
    <div id="footer">
        <h4>© 2015 DrinkFest</h4>
        <h5>Të gjitha të drejtat e rezervuara. All rights reserved | Waber Co. Design</h5>
    </div> 
</body>
</html>