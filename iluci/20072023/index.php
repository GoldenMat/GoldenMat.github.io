<?php
	$title = "Grignetta - Cinquantenario Via Normale";
    $track = "20072023.gpx";
	$day = "20-07-2023, Giovedì";
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
						<td>Serata calda ma un po' di arietta dal lago ha rinfrescato, in via si stava proprio bene. La roccia sulla via è ottima ripulita dalle numerosissime ripetizioni.</td>
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
						Ultimamente non è un bel periodo, tra attacchi di mal di testa che devo ancora capire come mai mi vengono e altro, però era un po' che volevo andare a fare il Cinquantenario in solitaria e questa mi sembrava una buona serata. Salendo mi fa male la testa fino al punto che mi chiedo se sia una buona idea attaccare...ma incredibilmente appena tocco la roccia sto benissimo, vado rapido fino al terrazzone dove mi faccio autosicura per fare l'ultimo tiro. Il meteo è così bello e la temperatura perfetta che mi godo una lunga pausa in cima, si sta davvero bene. Raccattate tutte le cose scendo facendo tutte le doppie giusto in tempo per fare una pausetta fuori dalla Rosalba, anche se purtroppo delle nuvole nascondono il tramonto. Unica "pecca" della serata il telefono che si sarà riavviato da solo 20 volte, motivo per cui la traccia GPS è così sballata, ma poco importa. Una gita post lavoro di quelle che ci volevano.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/4jwH9gk5RPWK8sNT7" target="_blank" rel="noopener noreferrer">
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
