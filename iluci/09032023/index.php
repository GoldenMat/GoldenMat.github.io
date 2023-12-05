<?php
	$title = "Grignone - Cresta di Piancaformia";
    $track = "09032023.gpx";
	$day = "09-03-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/giorgiot.png\"> Giorgio T, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/crestapiancaformia-invernale/";
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
						<td>Giornata bella e temperatura ottima. Purtroppo non si può dire lo stesso della neve: lo scarso rigelo e le precipitazioni dei giorni precedenti hanno reso la progressione difficoltosa, oltre a render necessario batter traccia per gran parte della salita. Visto le condizioni abbiamo preferito evitare la parte finale (ed era anni che non la saltavo!), uscendo sulla Ganda anch'essa da tracciare con non poca fatica.</td>
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
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per alpinismo invernale (imbrago, casco, ramponi, picozza classica). Consigliabile comunque avere dietro 30m di corda e qualcosa per far sicurezza ai meno esperti o in caso di cattive condizioni.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Il sentiero fino alla bocchetta di Piancaformia è facile e intuibile. La cresta è intuibile, tendenzialmente si rimane sempre sul filo di cresta, salvo per evitare passi impegnativi (solitamente si rimane a sinistra del filo); la via tra l'altro è spesso tracciata. Via della Ganda seguire la traccia (o dotarsi di una gps, se non ci fosse e non la si conoscesse).</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Catena per arrivare alla bocchetta di Piancaformia (potrebbe essere sotto la neve!) e qualche resinato e spit nella parte alta della cresta, anch'essi potrebbero essere nascosti dalla neve.</td>
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
					Col Giorgio vogliamo farci un giro, allora andiamo in Piancaformia che quest'anno non sono ancora stato (almeno, a fare proprio quella) e partiamo la mattina presto direzione Cainallo. Già all'inizio il vecio parte a cannone e non lo vedo andare sull'asfalto anzichè sulla carrareccia, così non sapendo dov'era va a finire che perderemo una ventina di minuti per ritrovarci. Poco male, saliamo sull'asciutto fino alla bocchetta di Piancaformia dove mettiamo i ramponi. La cresta non è in buone condizioni poichè rigelo ovviamente zero, e le nevicate dei giorni precedenti mi fanno batter traccia fondamentalmente sull'intero percorso. Non che sia un problema...conoscendo bene la via, però ovviamente rallenta e ci fa decidere di evitare il pezzo finale perchè sapevo già sarebbe stata una tribulata. Inoltre il vecio è senza picozza, strana scelta ma vabbe lui si arrangia. Usciti sulla Ganda incontriamo altre due persone che l'han battuta fino a lì, al pezzo finale ci penso io e usciamo in cima dove ci prendiamo una bella pausa. La discesa sarà resa piacevole dalla traccia già fatta, e andiamo spediti fino alla Bogani e poi in Cainallo.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/Hp6kuLHLVpmoy9Gu8" target="_blank" rel="noopener noreferrer">
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
