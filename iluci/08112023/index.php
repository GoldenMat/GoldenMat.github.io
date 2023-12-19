<?php
	$title = "Grignetta - Cresta Cermenati";
    $track = "08112023.gpx";
	$day = "08-11-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/crestacermenati/";
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
						<td>Mattinata fredda senza vento. C'era più neve di quella prevista, continua fin dalla partenza, mai eccessiva e molto buona in traccia.</td>
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
						<td>Facile, la salita è tracciatissima e ai bivi ci sono sempre i cartelli che evitano errori.</td>
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
						Grignetta pre lavoro, parto alle 6.10 circa dall'acquedotto, c'è neve fin dal parcheggio, quindi lascio perdere il sentiero delle Capre. Salgo spedito in Cermenati, a buon ritmo fino quasi alla spalla, dove traccio il sentiero giusto visto che gli altri son saliti all'uscita delle Capre. Passo dopo passo arrivo su praticamente in 1 ora esatta, dove ci sono già alcune persone. Foto di rito, mi cambio (con la maglietta che ghiaccia) e scendo poco dopo anche lì a buon ritmo, dove incrocio una persona che sale fuori sentiero (cercava il telefono del socio caduto verso il canale Porta). Salito tutto senza ramponi, sceso tutto con, andando talvolta nell'erba perchè era più comodo. Freddo ma sopportabile se coperti bene, in discesa anche caldino, zero vento. Neve tutto sommato buona e più del previsto.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/PYP8Zv4fekMDG5y78" target="_blank" rel="noopener noreferrer">
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
