<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="photos/icon.png" type="image/png">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Gambling Room</title>
</head>
<body>
	<div id="title"><img src="photos/mainText.png"></div>
	<div id="menu">
		<form action="game.php" method="post">
			<div id="playerOne" class="player">
				<div class="playerTitle">FIRST<br /> PLAYER<br /><br /><i class="fa fa-fw fa-user-circle-o" id="userOne"></i></div>				
				<input id="player0" autocomplete="off" onkeydown="limit(this)" onkeyup="limit(this)" type="text" class="playerInput" name="userOne" required></input>
			</div>
			<div id="playerTwo" class="player">
				<div class="playerTitle">SECOND<br /> PLAYER<br /><br /><i class="fa fa-fw fa-user-circle-o" id="userOne"></i></div>
				<input id="player1" autocomplete="off" onkeydown="limit(this)" onkeyup="limit(this)" type="text" class="playerInput" name="userTwo" required></input>
			</div>
			<div id="playerThree" class="player">
				<div class="playerTitle">THIRD<br /> PLAYER<br /><br /><i class="fa fa-fw fa-user-circle-o" id="userOne"></i></div>
				<input id="player2" autocomplete="off" onkeydown="limit(this)" onkeyup="limit(this)" type="text" class="playerInput" name="userThree" required></input>
			</div>
			<div id="roundsWrapper">
				<div id="roundsTitle">ROUNDS:</div><br />
				<select name="rolls" id="rounds">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<input type="submit" id="submit" value="START"></input>
		</form>
	</div>
	<script src="scripts/input.js"></script>
</body>

</html>