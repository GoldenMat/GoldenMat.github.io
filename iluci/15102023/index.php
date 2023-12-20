<?php
	$title = "Valmadrera - Giro delle 7 Cime";
    $track = "15102023.gpx";
	$day = "15-10-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/11_1_9/7cime/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/escursionismo.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button escursionismo selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button escursionismo" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button escursionismo" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button escursionismo" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info escursionismo">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata serena ma fredda causa forte vento da Nord, dove si era riparati invece si stava bene. Tutti i tratti descritti in questo giro hanno roccia buona o discreta, ma su una traversata così lunga si trova di tutto.</td>
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
						<th>Orientamento</th>
						<td>Sentieri per lo più segnati, prestare più attenzione nella zona dei Corni, dove se ci si perdesse si possono prendere varianti anche molto impegnative.</td>
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
					
					<div class="story-block escursionismo">
						Non c'è in ballo niente di interessante, quindi vado da solo all'assalto al Moregallo, parto rilassato e salgo dalla crestina OSA dove sarò da solo su tutta la via, con diverse persone invece sull'avvicinamento e un ragazzo salito prima di me in crestina che non raggiungerò mai. In cima prendo la maglietta e aspetto un po' per vedere se arriva il Giorgio, ma non alla fine non arriva quindi vado e parto dopo la bocchetta sulla traversata dei Corni. Sceso verso Canzo incontro un ragazzo, Francesco mi pare, che aiuto a scendere fino al crocifisso, visto che era stato "abbandonato" dai suoi soci di escursione trovati online. Salutato il ragazzo procedo prima fino al Fo, poi sulla cresta del Malascarpa, dove il vento inizia a essere anche molto forte; infine Monte Rai e Birone, dove mi piazzo a fare uno spuntino sottovento senza grossi problemi. Scendendo mi sento con Dello, e dopo aver fatto il Luisin fino a San Tomaso mi dice di andare da lui per una birra. Ultima parte della discesa condivisa con Dani Cazzaniga e compagna, trovati per caso a San Tomaso.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/kGRF3TZZszQ5gneNA" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back escursionismo">
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
