<?php
	$title = "Grignetta - Cinquantenario Via Normale";
    $track = "29082023.gpx";
	$day = "29-08-2023, Martedì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_3/cinquantenario-vianormale/";
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
						<td>Serata fresca con un po' di vento dal lago, ma in maglietta si stava bene. La roccia sulla via è ottima ripulita dalle numerosissime ripetizioni.</td>
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
						<td>NDA, materiale per calata, 6 rinvii, eventualmente qualche friend medio per integrare ma la via è facile. Consigliabile avere due mezze corde per velocizzare la discesa (oltre ad avere una bella doppia nel vuoto).</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>I sentieri sono ottimamente segnati. La via soprattutto nella prima parte non è sempre evidente, ma basta seguire la logica (ricordarsi che è una via dell'inizio del 1900...)</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima a resinati, anche se distanziati, ma posti nei punti più intelligenti. Soste ottime su solidi resinati e catena.</td>
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
						Avevo proprio voglia di rifare il Cinquantenario in solitaria, stavolta anche senza mal di testa, allora stacco presto da lavoro e mi porto su all'attacco che raggiungo in un'oretta circa da via del Ram. Salgo i soliti primi due tiri slegato, per poi impostare la solita "mortale" autosicura sull'ultimo tiro. Arrivo in cima senza problemi a parte un po' di perplsssità sul passo chiave, delicato come sempre. Un po' di pausa, poi doppie rapide e mi fermo un attimo sui tavolini del Rosalba, peccato per le nuvole vaganti che mi hanno impedito di fare delle belle foto al tramonto, ma di base va bene così, sempre bello salire sul Cinquantenario.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/7886mBFwHBDfkDVi7" target="_blank" rel="noopener noreferrer">
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
