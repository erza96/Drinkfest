<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: vere.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Vere</title>
    <link href="../../css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="body">
    <ul class="header">
        <p class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DrinkFest<img src="../../images/glass.png" height = 40px></p>
        <li><a href="../index.php">Kryefaqja</a></li>
        <li><a class="active" class="unclickable" href="">Galeria</a>
            <ul>
                <li><a class="active" href="vere.php">Verë</a></li>
                <li><a href="kafe.php">Kafe</a></li>
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

    <div id="pagedrink" class="unclickable">
            
        <center><img src="../../images/divider.png" height="10%" width="100%"></center>

        <table>
            
            <tr>
                <td><img src="../../images/redwine.png" height="500px"></td>
                <td><div id="h">Verë e kuqe!</div><br>Është tipi i verës që prodhohet nga rrushi i kuq. Përmban gjithashtu antioksidantë të tjerë, mirëpo një përbërës i rëndësishëm është flavonoidi. Në fakt ngjyra e kësaj vere mund edhe të ndryshoj.</td>
            </tr>
    
        </table>                
        
        <center><img src="../../images/divider.png" height="10%" width="100%"></center>        
        
        <table>
           
            <tr>
                <td><img src="../../images/whitewine.png" height="100%"></td>
                <td><div id="h">Verë e bardhë!</div><br>Prodhohen nga përzierja e varieteteve të rrushit të bardhë. Zakonisht ka prej 11% deri në 13.5% alkool. Shërbehet në temperaturë 12ᵒ-13ᵒC. </td>
            </tr>
    
        </table>

        <center><img src="../../images/divider.png" height="10%" width="100%"></center>

        <table>
        
            <tr>
                <td><img src="../../images/sweetwine.png" height="500px"></td>
                <td><div id="h">Verë e ëmbël!</div><br>Është verë e bardhë gjysmë e ëmbël cilësore, me prejardhje të mbrojtur gjeografike. Prodhuar nga rrushi Riesling dhe Rhine Riesling të kultivuar në vreshtat e Stone Castle-s në Rahovec. Vera ka ngjyrë të gjelbër në të artë. Shija e ëmbël dhe aroma e saj të kujtojnë lule zambakun e Kosovës.</td>
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