<?php
	session_start();
	$_SESSION["scoreOne"] = 0;
	$_SESSION["scoreTwo"] = 0;
	$_SESSION["scoreThree"] = 0;
	$_SESSION["rollsLeftOne"] = $_POST["rolls"];
	$_SESSION["rollsLeftTwo"] = $_POST["rolls"];
	$_SESSION["rollsLeftThree"] = $_POST["rolls"];
	$_SESSION["userOne"] = $_POST["userOne"];
	$_SESSION["userTwo"] = $_POST["userTwo"];
	$_SESSION["userThree"] = $_POST["userThree"];	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="photos/icon.png" type="image/png">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
	<title>Gambling Room</title>
</head>

<body>	
	<div id="title"><img src="photos/mainText.png"></div>
	<div id="menu">			
		<div id="playerOne" class="playerGame">
				<div class="playerTitle"><?php echo $_SESSION["userOne"]; ?><br />~</div>	
				<div class="score">SCORE</div>
				<div id="scoreOne" class="score">0</div>
				<div class="rollsLeft">ROLLS LEFT</div>
				<div class="rollsLeft" id="rollsLeftOne"><?php echo $_SESSION["rollsLeftOne"] ?></div>
				<input id="rollBtnOne" type="submit" class="roll" value="ROLL" onclick="rollOne();"></input>
				<canvas id="dicePicOne" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicOne2" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicOne3" class="dicePic" width="50" height="50"></canvas>
		</div>
		
		<div id="playerTwo" class="playerGame">
				<div class="playerTitle"><?php echo $_SESSION["userTwo"]; ?><br />~</div>	
				<div class="score">SCORE</div>
				<div id="scoreTwo" class="score">0</div>
				<div class="rollsLeft">ROLLS LEFT</div>
				<div class="rollsLeft" id="rollsLeftTwo"><?php echo $_SESSION["rollsLeftTwo"] ?></div>
				<input id="rollBtnTwo" type="submit" class="roll disabled" value="ROLL" onclick="rollTwo();" disabled></input>
				<canvas id="dicePicTwo" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicTwo2" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicTwo3" class="dicePic" width="50" height="50"></canvas>
		</div>		
		
		<div id="playerThree" class="playerGame">
				<div class="playerTitle"><?php echo $_SESSION["userThree"]; ?><br />~</div>	
				<div class="score">SCORE</div>
				<div id="scoreThree" class="score">0</div>
				<div class="rollsLeft">ROLLS LEFT</div>
				<div class="rollsLeft" id="rollsLeftThree"><?php echo $_SESSION["rollsLeftThree"] ?></div>
				<input id="rollBtnThree" type="submit" class="roll disabled" value="ROLL" onclick="rollThree();" disabled></input>
				<canvas id="dicePicThree" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicThree2" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicThree3" class="dicePic" width="50" height="50"></canvas>
		</div>
		
		<form action="results.php">
			<input type="submit" id="results" value="RESULTS" disabled></input>
		</form>
		
	</div>	
	<?php include 'scripts/script.php';?>
</body>	
</html>