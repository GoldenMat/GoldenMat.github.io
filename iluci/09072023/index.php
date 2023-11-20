<?php
	$title = "Grignetta - Cresta Segantini";
    $track = "09072023.gpx";
	$day = "09-07-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$folder = "/relazioni/29_2_3/crestasegantini/";
	$path = ".." . $folder;
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

		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoroccia.png"></div>

		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>

		<div class="picker-bar">
			<div class="picker-choice">
				<div class="picker button roccia" id="relazione-button">Relazione</div>
			</div>
			<div class="picker-choice">
				<div class="picker button roccia" id="condizioni-button">Condizioni</div>
			</div>
			<div class="picker-choice">
				<div class="picker button roccia" id="racconti-button">Racconti</div>
			</div>
			<div class="picker-choice">
				<div class="picker button roccia" id="foto-button">Foto</div>
			</div>
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
						<td>Giornata molto calda, un pochino di vento ma comunque il caldo si è sofferto parecchio soprattutto visto che son partito di pomeriggio e la cresta è in pieno sole a quegli orari. La roccia in Segantini è ottima, con dei tratti facili dove fare un po' più di attenzione.</td>
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
						<td>Corda da 40-50m, imbrago, casco, qualche rinvio e moschettone. Eventualmente materiale da calata.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>La Direttissima e il canale Angelina, sono facili da seguire, seguire la traccia più evidente. La cresta Segantini hai dei bolli argento, frutto di una copertura maldestra di alcuni bolli rossi aggiunti qualche anno fa, consigliabile seguire accuratamente la relazione per evitare di perdersi o finire su varianti più impegnative. La cresta Cermenati è impossibile da sbagliare, basta scendere.</td>
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
					
					<div class="story-block roccia">
						La stanchezza dalla gita dei giorni precedenti si fa senza dubbio sentire, ma è Domenica e vuoi non fare un giro in Grignetta? L'idea come al solito è che riposerò Lunedì. Tutto bene se non fosse che la giornata è una di quelle calde a dismisura, e il male alle gambe di certe non aiuta, rispetto al solito dovrò fare qualche pausa in più sia nel canale Angelina (dove all'inizio trovo una piccola oasi di fresco grazie al venticello rinfrescante che sale dal lago), sia sulla cresta dove ogni tratto di ombra è un toccasana. Nonostante queste difficoltà concludo comunque il giro in tempo accettabile, superando una cordata sull'ultimo torrione (chissà quanto son stati in giro per essere lì a quell'ora...o magari son partiti tardi pure loro). Poca gente in giro per essere domenica ma gli orari hanno sicuramente fatto la loro parte.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/QvubAyk8oS5KSsty9" target="_blank" rel="noopener noreferrer">
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
