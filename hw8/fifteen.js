"use scrict";

(function() {
	window.addEventListener("load", function() {
		createSquare();
		document.getElementById("shufflebutton").onclick = shuffleTiles;
	});

	function createSquare() {
		for(var i = 0; i < 4; i++) {
			for(var j = 0; j < 4; j++) {
				if(!(i == 3 && j == 3)) {
					var tile = document.createElement("div");
					tile.className = "tile";
					tile.style.backgroundImage = "url('http://vine-videos.com/wp-content/uploads/2014/05/Vine-Shaq-vs-the-Wiggle-Cat_thumb0.jpg')";
					tile.style.backgroundPosition = j * -100 + "px " + i * -100 + "px";
					tile.style.left = j * 100 + "px";
					tile.style.top = i * 100 + "px";
					//var p = document.createElement("p");
					tile.innerHTML = 4*i + j + 1;
					//tile.appendChild(p);
					tile.setAttribute("id", j * 100 + "px" + i * 100 + "px");
					tile.onclick = swapSquare;
					document.getElementById("puzzlearea").appendChild(tile);
				}
			}
		}
		window.emptyLeft = "300px";
		window.emptyTop = "300px";
	}

	function swapSquare() {
		var left = window.getComputedStyle(this).left;
		var top = window.getComputedStyle(this).top;
		if((Math.abs(parseInt(left) - parseInt(window.emptyLeft)) == 100 && Math.abs(parseInt(top) - parseInt(window.emptyTop)) == 0) ||
			Math.abs(parseInt(left) - parseInt(window.emptyLeft)) == 0 && Math.abs(parseInt(top) - parseInt(window.emptyTop)) == 100) {
			this.style.left = window.emptyLeft;
			this.style.top = window.emptyTop;
			this.setAttribute("id", window.emptyLeft + window.emptyTop);
			window.emptyLeft = left;
			window.emptyTop = top;
		}
	}

	function shuffleTiles() {
		for(var k = 0; k < 1000; k++) { 
			switch(Math.floor(Math.random() * 4)) {
				case 0:
					if(parseInt(window.emptyLeft) > 0) {
						document.getElementById(parseInt(window.emptyLeft)-100 + "px" + window.emptyTop).onclick();
					}
					break;
				case 1:
					if(parseInt(window.emptyTop) > 0) {
						document.getElementById(window.emptyLeft + (parseInt(window.emptyTop)-100) + "px").onclick();
					}
					break;
				case 2:
					if(parseInt(window.emptyLeft) < 300) {
						document.getElementById(parseInt(window.emptyLeft)+100 + "px" + window.emptyTop).onclick();
					}
					break;
				default:
					if(parseInt(window.emptyTop) < 300) {
						document.getElementById(window.emptyLeft + (parseInt(window.emptyTop)+100) + "px").onclick();
					}
			}
		}
	}
}());