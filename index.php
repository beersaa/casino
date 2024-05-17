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
	<body onload="generate()" id="tsparticles">
		<form name="obrazec" id="obrazec" method="post" autocomplete="off" action="game.php" >
        <div id="header">        
            <img src="images/mainText.png">
        </div>
        <div id="wrapper">
            <div class="player">
                <strong>PLAYER 1</strong></br></br>
                <input type="text" name="playerone" id="player1" maxlength="10" required>
            </div>
            <div class="player">
                <strong>PLAYER 2</strong></br></br>
                <input type="text" name="playertwo" id="player2" maxlength="10" required>
            </div>
            <div class="player">
                <strong>PLAYER 3</strong></br></br>
                <input type="text" name="playerthree" id="player3" maxlength="10" required>
            </div>
            <div class="num">
                <strong>NUMBER OF DICE</strong></br>
                <select name="dNum" id="dNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="num">
                <button type="submit" id="nextSlide" ><strong>START</strong></button>
                <input id="gumb" name="buttoun" style="display:none;">
            </div>
            <div class="num">
                <strong>START</strong></br>
                <select name="rNum" id="rNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
        </div>
        </form>
	</body>
</html>
