<?php
	$title = "Zucco Pesciola - Cresta Ongania";
    $track = "23122023.gpx";
	$day = "23-12-2023, Sabato";
	$participants = "<img class=\"person\" src=\"../assets/people/maraja.png\"> Maraja, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo";
	$path = "../relazioni/29_2_1/crestaongania-invernale/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/alpinismoghiacciomisto.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button ghiaccio selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button ghiaccio" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info ghiaccio">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata bella ma con forte vento, soprattutto all'inizio della cresta. Più gestibile al ritorno. Poca neve ma quella che c'è è in buone condizioni, cresta pulita. La roccia in via è ripulita dalle ripetizioni, come al solito, con qualche tratto facile a cui porre attenzione.</td>
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
							<img class="star" src="../assets/emptystar.png"> (Oracolo)
						</td>
					</tr>
					<tr>
						<th>Materiale</th>
						<td>NDA per alpinismo invernale (imbrago, casco, ramponi, picozza classica, 6 rinvii, cordini per soste). È sufficiente una corda da 30m. A seconda delle proprie capacità si può portare qualche misura di friend. Un paio di viti a seconda delle condizioni possono tornare utili (inutili e quindi non portate durante la nostra ripetizione).</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Fino al Rifugio Lecco seguire i sentieri e le piste da sci, facendo attenzione quando le si attraversa. Il canalino per l'attacco dell'Ongania è abbastanza evidente dal Rif. Lecco. L'orientamento in via non è sempre scontato ma nel dubbio seguire il facile che non si sbaglia. Il canale della madonnina e il vallone dei camosci sono abbastanza facili da seguire, anche senza traccia.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Ottima a resinati e qualche chiodo vecchio. Tutto lo Zucco Pesciola in generale abbonda di protezioni fisse, rendendo l'uso di protezioni veloci spesso superfluo (comunque dipende da che via si fa).</td>
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
					
					<div class="story-block ghiaccio">
						È l'antivigilia e il Maraja vuole fare l'Ongania, accetto la proposta dato che comunque qualcosa avrei fatto, e la mattina mi sveglio in ritardo e lo faccio aspettare 30 minuti al Bione. Quando finalmente arrivo saliamo al cimitero e partiamo andando su a buon ritmo da Masone, fino al Pequeno e poi ai Piani. Arrivati alla partenza della Fortino vedo la seggiovia ferma, e nessuno in giro, all'inizio perplessità, ma poi capisco che la cabinovia è ferma per il vento! Il che significa che fondamentalmente non c'è un cacchio di nessuno in giro, figata! Saliamo fino alla Lecco al fianco delle piste tirate a lucido, e io mi rampono ai tavoli per salire fino all'attacco, Nicholas riesce senza. Tanto vento all'attacco, quindi partiamo e alterneremo: Nicholas i tiri dispari, io quelli pari. Un po' di freddo alle mani sulla prima parte, poi i guanti aiutano e anche l'esposizione farevole degli ultimi tiri, facendoci arrivare in cima senza problemi. Per Nicholas la via era nuova, per me ovviamente no, ma comunque è sempre una bella salita. Scendiamo ramponandoci nel canale della Madonnina, dove troviamo i primi alpinisti saliti senza funivia, altri ne troveremo alla Lecco. Al rifugio pranziamo, genepi, poi scendiamo a buon ritmo dalla strada, arrivando a Lecco verso le 16, giusto in tempo per prepararci per andare al Moregallo la sera.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/BcjYwYruVXfiobZC6" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back ghiaccio">
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
