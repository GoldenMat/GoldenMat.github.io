<?php
	$title = "Grignetta - Cresta Segantini";
    $track = "06062023.gpx";
	$day = "06-06-2023, Martedì";
	$participants = "<img class=\"person\" src=\"../assets/people/francescom.png\"> Francesco M, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
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
						<td>Serata nebbiosa, il meteo non era il massimo ma non ha piovuto. La roccia era leggermente umida nei tratti più incassati, ottima come sempre in Segantini.</td>
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
						Settimana intensa e il Biondo mi propone di andare in Segantini, naturalmente accetto. Alla partenza ci supera un signore di Sala al Barro che rapidamente non vedremo più, noi proseguiamo con calma ma comunque in continuità fino in cima. Purtroppo la situazione era abbastanza nebbiosa, temevamo anche potesse arrivare il temporale ma per fortuna non l'ha fatto. Grazie alle giornate ormai molto lunghe riusciamo ad arrivare alla macchina prima del buio.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/K9exEo83g5xZ3U119" target="_blank" rel="noopener noreferrer">
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
