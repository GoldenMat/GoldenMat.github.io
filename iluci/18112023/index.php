<?php
	$title = "Corna di Medale - Via Cassin";
    $track = "18112023.gpx";
	$day = "18-11-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/giorgiot.png\"> Giorgio T, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$folder = "/relazioni/29_2_3/cassin-medale/";
	$path = ".." . $folder;
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
		
		<div class="picker-bar">
			<div class="picker-choice"><div class="picker button roccia" id="relazione-button">Relazione</div></div>
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
						<td>Giornata dal meteo perfetto, calda al punto giusto, non una nuvola tutta la mattina. La roccia come sempre sulla Cassin è unta, e durante questa ripetizione la vegetazione ha dato parecchio fastidio in diversi tiri.</td>
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
							<img class="star" src="../assets/star.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per alpinismo su roccia (imbrago, casco, scarpette, 10 rinvii, cordini per clessidre e alberi). Si può scalare anche con una singola volendo, le mezze rimangono utili solo se si integrasse tanto o se si volesse conservare la possibilità di scendere in doppia per ogni evenienza. La via è chiodata soprattutto dove è difficile, ma una serie di friend (0.4-2 BD) e qualche nut possono tornare utili.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino al sentiero sotto la parete, l'attacco non è difficile da trovare poichè indicato da un cartello su albero. In via si vede quasi sempre il resinato successivo, con l'eccezione di pochi tiri (facili), dove comunque la relazione e la logica della parete non lasciano spazio a dubbi. Il sentiero di discesa è evidente, eccetto la prima parte dove bisogna fare attenzione a traccia e catene.</td>
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
						Dopo un bel po' che il Giorgio mi sfracassa i maroni che vuole tornare a fare la Cassin, visto che mi sento relativamente in forma ci sentiamo e decidiamo di andare a farla. Era stato chiaro: devo tirare io, e accetto la sfida, attaccando presto col sole che inizia a lambire la parete. Avremo un tot di cordate dietro che vedrò dal terzo tiro in poi, ma ci raggiungeranno solo alla fine. Salgo bene tutti i tiri praticamente, ovviamente azzerando dove ne avevo bisogno tra unto e difficoltà, ma senza mai andare in panico o rischiare di scivolare, insomma sicuramente un bel miglioramento dalle ultime volte, oggi la via me la sono proprio goduta. Il Giorgio sale bene con tranquillità, anche se come al solito si lamenta perchè non lo tiro, sui tiri duri posso capire ma su quelli facili ha sicuramente perso un po' di lustro, ma vista l'età è perdonabile. All'uscita della via ci raggiungono le due cordate dietro: due "ragazzi" di Varese istruttori al CAI di Malnate, e un ragno con un compagno di 71 anni in cordata. Tutti tranne quello di 71 anni che han scalato già in Medale ma mai fatto la Cassin. Oggi c'era anche l'assalto al Medale organizzato dai Gamma, ma erano praticamente tutti su altre vie. Oggi più che l'unto ha dato tanto fastidio l'erba. Dopo aver scambiato un po' di chiacchiere all'uscita della via ci ricolleghiamo alla discesa tra foglie e catene, scendendo poi nella valle della Medale dove troviamo anche diverse persone che scendono dalla ferrata, evidentemente molti non sanno che la discesa verso il San Martino è più veloce (e comoda) se si fosse partiti da Rancio.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/WzezYxTzPELAAYac8" target="_blank" rel="noopener noreferrer">
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
