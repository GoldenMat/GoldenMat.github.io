<?php
	$title = "Corna di Medale - Via Cassin";
    $track = "12012023.gpx";
	$day = "12-01-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/dello.png\"> Dello, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/cassin-medale/";
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
						<td>Giornata soleggiata, temperatura ottima. Solo un po' nuvoloso a metà via. La roccia come sempre sulla Cassin è unta, la vegetazione essendo il periodo ideale non ha dato eccessivamente fastidio.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>D (Oracolo)</td>
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
						<td>NDA per alpinismo su roccia (imbrago, casco, scarpette, 10 rinvii, cordini per clessidre e alberi). Si può scalare anche con una singola volendo, le mezze rimangono utili solo se si integrasse tanto o se si volesse conservare la possibilità di scendere in doppia per ogni evenienza. La via è chiodata soprattutto dove è difficile, ma una serie di friend (0.4-2 BD) e qualche nut possono tornare utili.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino al sentiero sotto la parete, l'attacco non è difficile da trovare poichè indicato da un cartello su albero. In via si vede quasi sempre il resinato successivo, con l'eccezione di pochi tiri (facili), dove comunque la relazione e la logica della parete non lasciano spazio a dubbi. Il sentiero di discesa è evidente.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Per lo più a solidi resinati, con qualche chiodo vecchio. Le soste sono sempre su due resinati con catena. Su L3 e L4 ci sono delle piccole catene poco sopra le soste, utili da usare eventualmente col piede per chi non si fidasse della roccia molto unta.</td>
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
						Dopo più di un anno dalla ripetizione con Teo torno in Medale, stavolta con Dello. Era un po' che ne parlavamo anche con gli altri ma Dello è libero e prendiamo l'occasione al balzo, andando solo noi. La giornata si rivela piacevole e la via filerà tutta liscia, con Dello che sale senza problemi l'ostico secondo diedro. Unica pecca (per quanto mi riguarda) è che non saliamo in cima, ma ho fatto decidere a lui visto anche che quest'estate sulle decisioni sono stato abbastanza testardo (anche se diciamocelo, a volte avevo ragione...). Visto il tempo risparmiato con la discesa rapida ci concediamo una bella pinsa e birretta al bar Sole per festeggiare la salita, sempre bello scalare in Medale.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/pAK1HiMHkRbxvzer6" target="_blank" rel="noopener noreferrer">
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
