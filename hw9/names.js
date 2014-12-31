"use strict";

//(function(){
	window.addEventListener("load", function() {
		var ajax = new XMLHttpRequest();
		//ajax.onload = listReturn();
		ajax.open("GET", "https://webster.cs.washington.edu/cse154/babynames.php?type=list", true);
		ajax.send();
		var list = document.getElementById("allnames");
		var option = document.createElement("option");
		option.text = "hi";
		option.value = "";
		list.add(option);
		list.disabled = false;
	});

	function listReturn() {
		swal({title: "hi", text: "alert!"});
		var results = document.getElementById("resultsarea");
		results.innerHtml = this.responseText;
	}
//}());