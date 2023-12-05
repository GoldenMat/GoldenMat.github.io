window.addEventListener("load", function(){ 
		
	document.getElementById("relazione-button").onclick = function() {toggleContent("relazione")};
	document.getElementById("condizioni-button").onclick = function() {toggleContent("condizioni")};
	document.getElementById("racconti-button").onclick = function() {toggleContent("racconti")};
	document.getElementById("foto-button").onclick = function() {toggleContent("foto")};

	function toggleContent(category) {
		if (document.getElementById("relazione-button")) {
			document.getElementById("relazione").classList.add('hidden');
			document.getElementById("relazione-button").classList.remove('selected');
		}
		if (document.getElementById("condizioni-button")) {
			document.getElementById("condizioni").classList.add('hidden');
			document.getElementById("condizioni-button").classList.remove('selected');
		}
		if (document.getElementById("racconti-button")) {
			document.getElementById("racconti").classList.add('hidden');
			document.getElementById("racconti-button").classList.remove('selected');
		}
		if (document.getElementById("foto-button")) {
			document.getElementById("foto").classList.add('hidden');
			document.getElementById("foto-button").classList.remove('selected');
		}
		document.getElementById(category).classList.remove('hidden');
		document.getElementById(category +"-button").classList.add('selected');
	}

	if (document.getElementById("relazione3-button")) {
		document.getElementById("relazione1-button").onclick = function () { toggleRelazione("relazione1") };
		document.getElementById("relazione2-button").onclick = function () { toggleRelazione("relazione2") };
		document.getElementById("relazione3-button").onclick = function () { toggleRelazione("relazione3") };

		function toggleRelazione(category) {
			document.getElementById("relazione1").classList.add('hidden');
			document.getElementById("relazione1-button").classList.remove('selected');
			document.getElementById("relazione2").classList.add('hidden');
			document.getElementById("relazione2-button").classList.remove('selected');
			document.getElementById("relazione3").classList.add('hidden');
			document.getElementById("relazione3-button").classList.remove('selected');
			document.getElementById(category).classList.remove('hidden');
			document.getElementById(category + "-button").classList.add('selected');
		}
	}

	else if (document.getElementById("relazione2-button")) {
		document.getElementById("relazione1-button").onclick = function () { toggleRelazione("relazione1") };
		document.getElementById("relazione2-button").onclick = function () { toggleRelazione("relazione2") };

		function toggleRelazione(category) {
			document.getElementById("relazione1").classList.add('hidden');
			document.getElementById("relazione1-button").classList.remove('selected');
			document.getElementById("relazione2").classList.add('hidden');
			document.getElementById("relazione2-button").classList.remove('selected');
			document.getElementById(category).classList.remove('hidden');
			document.getElementById(category + "-button").classList.add('selected');
		}
	}
	
}, false);