<!DOCTYPE html>
<html>
<head>
	<title>RPi english project</title>
	<link href="https://use.fontawesome.com/releases/v5.0.3/css/all.css" rel="stylesheet">
	<!--<link href="assets/fontawesome-all.css" rel="stylesheet">-->
	<meta charset="utf-8">
</head>
<body>
	<audio id="audioPlayer"  ontimeupdate="update(this)">
   		<source src="music/dommage.mp3">
	</audio>

	<div>
        <span id="progressTime">00:00</span>

		<button class="control" id="play-pause" onclick="play('audioPlayer', this)"><i class="fas fa-play"></i></button>
		<button class="control" onclick="resume('audioPlayer')"><i class="fas fa-stop"></i></button>
    </div>
</body>
</html>