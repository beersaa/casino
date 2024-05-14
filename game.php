<?php
    session_start();
    if(isset($_POST["buttoun"])){
        $_SESSION["p1Score"]=0;
        $_SESSION["p2Score"]=0;
        $_SESSION["p3Score"]=0;
        $_SESSION["p1"]=$_POST["playerone"];
        $_SESSION["p2"]=$_POST["playertwo"];
        $_SESSION["p3"]=$_POST["playerthree"];
        $_SESSION["diceNum"]=$_POST["dNum"];
        $_SESSION["roundNum"]=$_POST["rNum"];
        $_SESSION["roundN"]=0;
    }
    $p1Roll=array();
    $p2Roll=array();
    $p3Roll=array();
    
    for ($y = 0; $y <$_SESSION["diceNum"] ; $y++) {
            array_push($p1Roll,rand(1,6));
            array_push($p2Roll,rand(1,6));
            array_push($p3Roll,rand(1,6));
        }
    
    
    if($_SESSION["roundN"]<$_SESSION["roundNum"]){
        $_SESSION["roundN"]++;
        for ($x = 0; $x <sizeof($p1Roll) ; $x++) {
        $_SESSION["p1Score"]+=$p1Roll[$x];
        $_SESSION["p2Score"]+=$p2Roll[$x];
        $_SESSION["p3Score"]+=$p3Roll[$x];
        }
    }
?>


<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>	
            SWEET BONANZA
		</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/main.css">
		<link rel="shortcut icon" href="images/Grayicon.ico" type="image/x-icon">
		<link rel="icon" href="images/icon.png" type="image/x-icon">
        

	</head>
	<body onload="generate()">
        <form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="<?php if($_SESSION["roundN"]==$_SESSION["roundNum"]){echo 'end.php';}else{echo 'game.php';}?>">
        <div id="Header">
            <img src="images/mainText.png">
        </div>
        <div id="wrapper">
            <div class="player">
                <?php  for ($x = 0; $x <$_SESSION["diceNum"] ; $x++) {
                    echo "<img src='images/dice".  $p1Roll[$x]. ".png' alt='dice1' style='border:3px solid black; margin:0 1px; border-radius:5px;'>";
                }?></br></br></br>
                <strong class="name"><?php echo $_SESSION["p1"];  ?></strong></br>
                <div class="numero"><?php echo $_SESSION["p1Score"];  ?></div>
            </div>
            <div id="sredni"class="player">
                <?php  for ($x = 0; $x <$_SESSION["diceNum"] ; $x++) {
                    echo "<img src='images/dice".  $p2Roll[$x]. ".png' alt='dice1' style='border:3px solid black; margin:0 1px; border-radius:5px;'>";
                }
                ?>
                </br></br></br>

                <strong class="name"><?php echo $_SESSION["p2"];  ?></strong></br>
                <div class="numero"><?php echo $_SESSION["p2Score"];  ?></div>
            </div>
            <div class="player">
                <?php  for ($x = 0; $x <$_SESSION["diceNum"] ; $x++) {
                    echo "<img src='images/dice".  $p3Roll[$x]. ".png' alt='dice1' style='border:3px solid black; margin:0 1px; border-radius:5px;'>";
                }
                ?>
                </br></br></br>

                <strong class="name"><?php echo $_SESSION["p3"];  ?></strong></br>
                <div class="numero"><?php echo $_SESSION["p3Score"];  ?></div>
            </div>
            <div id="buton" >
                <input type="submit" id="gumb" value="<?php if($_SESSION["roundN"]==$_SESSION["roundNum"]){echo 'Results';}else {echo 'Roll';}  ?>">
            </div>
            <div id="round">
                    Round: <?php echo $_SESSION["roundN"]  ?>
            </div>
        </div>
        </form>
	</body>
</html>

