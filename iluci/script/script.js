window.onload = function(){ 
		
	document.getElementById("relazione-button").onclick = function() {toggleContent("relazione")};
	document.getElementById("condizioni-button").onclick = function() {toggleContent("condizioni")};
	document.getElementById("racconti-button").onclick = function() {toggleContent("racconti")};
	document.getElementById("foto-button").onclick = function() {toggleContent("foto")};

	function toggleContent(category) {
		document.getElementById("relazione").classList.add('hidden');
		document.getElementById("condizioni").classList.add('hidden');
		document.getElementById("racconti").classList.add('hidden');
		document.getElementById("foto").classList.add('hidden');
		document.getElementById(category).classList.remove('hidden');
	}
	
};