<?php
	$title = "Corni di Canzo - Ferrata Corno Rat";
    $track = "25122023.gpx";
	$day = "25-12-2023, Lunedì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_9/cornorat-ferrata/";
?>

<head>
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="../script/script.js"></script>
	<link rel="icon" type="image/x-icon" href="../assets/icon.png">
	<title>I Luci! <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
	
		<div class="banner-container"><img class="banner" src="../assets/banner/ferrata.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ferrata selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ferrata" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ferrata">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Serata di bel tempo e anche abbastanza calda visto il periodo. La roccia sulla ferrata è ottima e ripulita dalle ripetizioni</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>F (Oracolo)</td>
					</tr>
					<tr>
						<th>Giudizio Soggettivo</th>
						<td>
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>Imbrago, casco e kit da ferrata</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Sentieri ben segnati, solo qualche attenzione sulla parte iniziale della discesa. La ferrata è impossibile da sbagliare.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima con cavo e staffe (fin troppe), restaurata nel 2021.</td>
					</tr>
				</table>
			</div>
		
			<!-- Racconti -->
			<div id="racconti" class="racconti hidden">
				<h3>Racconti</h3>
				
				<div class="story left">
				
					<div class="profile-block">
						<img class="profile" src="../assets/people/oracolo.png">
						<br>Oracolo
					</div>
					
					<div class="story-block ferrata">
						Serata di Natale, finito il pranzo prendo e vado a fare la ferrata del Corno Rat ancora illuminata. Trovo parcheggio in alto e salgo spedito usando tutte le scorciatoie, fa abbastanza caldo. Sull'ultimo pezzo mi sembra di vedere una frontale ma all'attacco e su tutta la ferrata sarò solo. Arrivato in cima becco le capre (come al solito) che però a sto giro stanno mangiando il filo di una lampadina! Le faccio un po' andar via ma so già che torneranno appena me ne vado. Un occhio al libro di vetta, qualche foto, e poi giù verso San Tomaso troverò soltanto due persone da parte alla chiesetta.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/ufaCLBYqC1shui9o7" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ferrata">
				<div class="back-button">
					<img class="back-image" src="../assets/back.png">
				</div>
				<div class="back-text">
					<p class="back-text">Home</p>
				</div>
			</div>
		</a>
	</div>

</body>
