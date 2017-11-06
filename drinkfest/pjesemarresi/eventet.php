<?php
session_start();
if (!isset($_SESSION['myusername'])) {
header('Location: eventet.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                                                       
    <title>DrinkFest - Eventet</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <style type="text/css">
        table, td, tr{
            -webkit-column-width: 300px;
            -moz-column-width: 300px;
            -o-column-width: 300px;
            column-width: 300px;
        }
    </style>
    <style scoped contenteditable>#page{
		margin-left: 100px;
		margin-right: 100px;
    }
    </style>
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
        <li><a href="rreth_nesh.php">Rreth Nesh</a></li>
        <li><a href="kontakti.php">Kontakti</a></li>
        <li class="unclickable"><a><img src="../images/line.png"></a>
        <li><a class="active" href="eventet.php">Eventet</a></li>
        <li><a href="../login/logout.php">Shkyçu</a></li>
    </ul>

    <div id="page">
                <?php
            $username = $_SESSION['myusername'];
            $username = mysql_real_escape_string($username);
            $connect = mysql_connect("localhost","root", "");
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("drinkfest");
            $query = mysql_query("SELECT EventiId FROM pjesemarresi WHERE Username='$username'");
            $data_e_eventit = mysql_fetch_assoc($query);
            $b = $data_e_eventit['EventiId'];
            if ($b == 0){
                echo "$username nuk ke zgjedhur ndonjë event ende, mund ta zgjedhësh ndonjërin nga këto:";
            }
            else{
                echo "$username ke rezervuar me sukses eventin me datën $b.";
            }
            $results = mysql_query("SELECT Emri, Vendi, eventidata as Data, pijaemri as Pija, Sponzori from organizohet as o, eventi as e, lokacioni as l where l.lid = o.lid and o.eventidata=e.data LIMIT 10");
            echo "<table>";
            echo "  <td>Emri</td>
                    <td>Vendi</td>
                    <td>Data</td>
                    <td>Pija</td>
                    <td>Sponzori</td><br>&nbsp";
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                	<form action="rezervimi.php" method="post">
                    <td><?php echo $row['Emri']?></td>
                    <td><?php echo $row['Vendi']?></td>
                    <td><?php echo $row['Data']?></td>
                    <td><?php echo $row['Pija']?></td>
                    <td><?php echo $row['Sponzori']?></td>
                    <input type="hidden" value="<?php echo $row['Data']?>" name="var" />
				    <td><input type="submit" name="butoni_rezervo" value="Rezervo"></td>
                    </form>
                </tr>
            <?php
            }
            echo "</table>";
            ?>
            <br>
            <form action="largimi.php" method="post">
            <center><input type="submit" name="butoni_largohu" value="Largohu nga eventi"></td><br></center>
            </form>
    </div>

    <div id="footer">
    	<h4>© 2015 DrinkFest</h4>
        <h5>Të gjitha të drejtat e rezervuara. All rights reserved | Waber Co. Design</h5>
	</div> 
</body>
</html>