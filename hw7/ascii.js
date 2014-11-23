"use strict";

(function() {
	var timer = null;
	var frame = null;
	var i = 0;
	var animation = null;
	var interval = 250;

	window.onload = function() {
		var playBtn = document.getElementById("play");
		playBtn.onclick = play;

		var stopBtn = document.getElementById("stop");
		stopBtn.disabled = true;
		stopBtn.onclick = stop;

		var aniSelect = document.getElementById("aniSelect");
		aniSelect.onchange = aniSwitch;

		var fontSizeSelect = document.getElementById("fontSizeSelect");
		fontSizeSelect.onchange = fontSizeSwitch;

		for(var i = 0; i < document.getElementsByName("speed").length; i++){
			document.getElementsByName("speed")[i].onchange = speedChange;
		}
	};

	function play() {
		animation = document.getElementById("textarea").value;
		frame = animation.split("=====\n");
		timer = setInterval(tick, interval);
		document.getElementById("stop").disabled = false;
		document.getElementById("play").disabled = true;
	}

	function stop() {
		clearInterval(timer);
		document.getElementById("textarea").value = animation;
		i = 0;
		document.getElementById("stop").disabled = true;
		document.getElementById("play").disabled = false;
	}

	function aniSwitch() {
		document.getElementById("textarea").value = ANIMATIONS[this.value];
	}

	function fontSizeSwitch() {
		document.getElementById("textarea").style.fontSize = document.getElementById("fontSizeSelect").value;
	}

	function speedChange() {
		for(var i = 0; i < document.getElementsByName("speed").length; i++){
			if(document.getElementsByName("speed")[i].checked){
				interval = document.getElementsByName("speed")[i].value;
				break;
			}
		}
		clearInterval(timer);
		timer = setInterval(tick, interval);
	}

	function tick() {
		document.getElementById("textarea").value = frame[i];
		i = i + 1;
		if(i >= frame.length) {
			i = 0;
		}
	}
})();