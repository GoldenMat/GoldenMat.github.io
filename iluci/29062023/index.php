<?php
	$title = "Zucco Pesciola - Cresta Ongania";
    $track = "29062023.gpx";
	$day = "29-06-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/francescom.png\"> Francesco M, <img class=\"person\" src=\"../assets/people/giorgio.png\"> Giorgio, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_1/crestaongania/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoroccia.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button roccia selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button roccia" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
		
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info roccia">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Serata calda anche se un po' nuvolosa. Uno sciame di mosche ci ha seguito fino all'attacco della via, come purtroppo ultimamente è prassi a Bobbio d'estate. Il temporale è arrivato quando ormai eravamo scesi da un pezzo. La roccia in via è ottima e ripulita dalle ripetizioni.</td>
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
						<td>Corda (sufficiente 30m), imbrago, casco, 6 rinvii e moschettoni, eventualmente qualche protezione veloce.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri son ben segnati e l'avvicinamento è intuitivo. In via attenzione a non prendere varianti più difficili. La discesa è abbastanza logica.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima a resinati (soste comprese) e qualche chiodo vecchio.</td>
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
					
					<div class="story-block roccia">
						Nel percorso che sto facendo di preparazione per un progetto, volevo fare anche la cresta Ongania post lavoro, anche se sapevo non sarebbe stato facile visto il lungo avvicinamento senza funivia (inutilizzabile a quell'ora serale). Recluto il Biondo che so apprezza sempre questo genere di cose, e lui coinvolge anche Giorgio che è allievo del loro corso a Valmadrera. Inizialmente ero titubante ma mi son fidato del suo giudizio, e infatti una volta attaccata la via è evidente perchè l'ha chiamato: Giorgio nonostante la poca esperienza è un vero e proprio camoscio e per certi versi va anche meglio di noi. Smarchiamo avvicinamento e via rapidamente e ci concediamo una pausetta in cima, prima di intraprendere la lunga discesa fino a Moggio che faremo a passo spedito, chiudendo l'anello con tempistiche davvero ottime. Per l'occasione ci concediamo una birretta al Coyote, mentre arriva un bel diluvio che per fortuna non abbiamo preso sul Pesciola.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/L1kRNJF2W2j1tpdN8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back roccia">
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
