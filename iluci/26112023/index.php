<?php
	$title = "Grignone - Cresta di Piancaformia";
    $track = "26112023.gpx";
	$day = "26-11-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
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
						<td>Giornata fredda, le previsioni davano forte vento da Nord ma in diminuzione durante la mattinata, e così è stato: infatti nella parte alta della cresta non ha dato problemi. La neve non è molta ma quella che c'è è relativamente buona, soprattutto in traccia. Parte alta della cresta con parecchia roccia fuori, ma senza grossi problemi di percorrenza, per chi la conosce almeno.</td>
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
						Giornata fredda, parto tardino (8 passate da Cainallo) per evitare il più possibile il vento, incredibilmente sarò solo perchè nonostante abbia chiesto a un po' di gente a sto giro non c'è proprio nessuno. Imbocco rapidamente la Piancaformia, ci saranno persone sulla Ganda ma io sarò da solo fino in cima. Salgo senza grossi problemi, la cresta è per lo più pulita e mi ricordo ancora come usare i ramponi nonostante sia passato un po' di tempo dall'ultimo giro. Un po' freddo quanto tolgo i guanti per scalare su roccia, ma bollite alle mani nella norma, i guanti nuovi comunque si son comportati bene. Ultima parte con parecchia roccia fuori. Arrivo in cima, foto di rito, e un po' di chiacchiere al caldo fuori dal rifugio dove diverse persone sono salite da Balisio. Oggi una bellissima visibilità su tutte le alpi, si vede proprio tutto. Discesa sulla Ganda, poi mini pausa fuori dalla Bogani, e ricomincio a scendere, via i ramponi sotto all'alpe Moncodeno, e rapido fino al parcheggio che trovo pieno zeppo con mia sorpresa, visto il periodo comunque invernale.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/kuSaCd8FXRrFv7pF7" target="_blank" rel="noopener noreferrer">
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
