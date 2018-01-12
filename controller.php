<script type="text/javascript">

	function play(idPlayer, control) {
	    var player = document.querySelector('#' + idPlayer);
		
	    if (player.paused) {
	        player.play();
	        control.innerHTML = '<i class="fas fa-pause"></i>';
	    } else {
	        player.pause();	
	        control.innerHTML = '<i class="fas fa-play"></i>';
	    }
	}

	function resume(idPlayer) {
	    var player = document.querySelector('#' + idPlayer);
		
	    player.currentTime = 0;
	    player.pause();
	    document.getElementById("play-pause").innerHTML = '<i class="fas fa-play"></i>';
	}

 	function update(player) {
		var duration = player.duration;    // Durée totale
		var time     = player.currentTime; // Temps écoulé
		var fraction = time / duration;
		var percent  = Math.ceil(fraction * 100);

		document.getElementById('progressTime').textContent = formatTime(time);
	}

	function formatTime(time) {
	  var hours = Math.floor(time / 3600);
	  var mins  = Math.floor((time % 3600) / 60);
	  var secs  = Math.floor(time % 60);

	  if (secs < 10) {
	      secs = "0" + secs;
	  }

	  if (hours) {
	      if (mins < 10) {
	          mins = "0" + mins;
	      }

	      return hours + ":" + mins + ":" + secs; // hh:mm:ss
	  } else {
	      return mins + ":" + secs; // mm:ss
	  }
	}
</script>

<?php
require_once('index.php');