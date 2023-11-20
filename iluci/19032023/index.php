<?php
	$title = "Grignetta - Cresta Segantini";
    $track = "19032023.gpx";
	$day = "19-03-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/crestasegantini-invernale/";
?>

<head>
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="../script/script.js"></script>
	<link rel="icon" type="image/x-icon" href="../assets/icon.png">
	<title>I Luci! 
		<?php echo $title; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
	
		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoghiacciomisto.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ghiaccio selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
		
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ghiaccio">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Il meteo non era il massimo, ma la mattina c'era quasi il sole. Dal canale della Lingua in poi il cielo è diventato uggioso ma nessuna precipitazione e nemmeno particolare freddo. La neve è assente dai versanti a Sud, mentre a Nord non ce n'è molta ma quella che c'è è in condizioni variabili, per lo più portante. Canale della Lingua non in ottime condizioni (a volte si tocca roccia sotto) ma meglio rispetto a come l'avevamo trovato nel 2022.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>PD (Oracolo)</td>
					</tr>
					<tr>
						<th>Giudizio Soggettivo</th>
						<td>
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png">
							<img class="star" src="../assets/star.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per alpinismo invernale (imbrago, casco, ramponi, picozza classica). Per la cresta 4 rinvii, qualche misura di friend, cordini e materiale per calate. A seconda delle condizioni le viti da ghiaccio potrebbero tornare utili. Oggi non sarebbero servite.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>La Direttissima e il canale Angelina, essendo puliti, sono facili da seguire. La cresta Segantini hai dei bolli argento, frutto di una copertura maldestra di alcuni bolli rossi aggiunti qualche anno fa; in generale d'inverno potrebbe essere più facile perdere la via (che già non è banale d'estate), quindi è consigliabile conoscere la via prima di intraprenderla d'inverno. La cresta Cermenati è impossibile da sbagliare, basta scendere.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Diversi resinati sulla cresta e qualche rado chiodo vecchio.</td>
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
					
					<div class="story-block ghiaccio">
					Oggi avevo proprio voglia di andare in Segantini per concludere l'inverno ma nessuno vuol venire per un motivo e per l'altro, allora mi tocca chiedere alla persona di cui mi fido di più, che non sarà un grande alpinista ma quanto meno siam sempre d'accordo sulle scelte e non rompe mai i maroni. Qualche dolore al braccio dovuto a una scivolata ieri a scendere dall'Angelone ma niente di debilitante. Cresta fatta con calma con tutte le varie calate, ma comunque in poco più di due ore ero all'uscita, cosa abbastanza normale quando si è da soli, i tempi si restringono per forza di cose. Nessuno in cresta e non molta gente in Cermenati, probabilmente causa meteo.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/ag3hS9HQijzQbrUo8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ghiaccio">
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
