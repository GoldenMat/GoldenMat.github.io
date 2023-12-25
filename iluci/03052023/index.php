<?php
	$title = "Grignetta - Cinquantenario Via Normale";
    $track = "03052023.gpx";
	$day = "03-05-2023, Mercoledì";
	$participants = "<img class=\"person\" src=\"../assets/people/alex.png\"> Alex, <img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
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
						<td>Serata nebbiosa anche se non particolarmente fredda. Speravamo di essere appena sotto al limite delle nuvole ma così non è stato, durante l'avvicinamento eravamo quasi al sole, durante la salita sempre nella nebbia. La roccia sulla via è ottima ripulita dalle numerosissime ripetizioni, oggi a tratti umida ma mai bagnata.</td>
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
							<img class="star" src="../assets/emptystar.png">
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
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
						Serata al Cinquantenario, partiamo subito bene con il Maraja che si ostina a salire il più possibile sulla carrareccia e andrà a finire che dovremo spingere la macchina per fare l'ultima rampetta. Salendo siamo parzialmente al sole il che fa ben sperare, ma poi sulla via ovviamente nebbia totale. Saliamo slegati il primo tiro, poi il Maraja va fino al terrazzone e Alex alla sua prima volta al Cinquantenario fa l'ultimo tiro in gran scioltezza. Birrette e taralli in cima, poi ci caliamo nella penombra prima di scendere le foppe alla luce delle frontali. Niente terzo tempo visto che comunque si era fatto tardi.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/eD4GLUVbZU3Up4Ff6" target="_blank" rel="noopener noreferrer">
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
