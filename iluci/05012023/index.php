<?php
	$title = "Zucco Pesciola - Cresta Ongania";
    $track = "05012023.gpx";
	$day = "05-01-2023, Giovedì";
	$participants = "<img class=\"person\" src=\"../assets/people/henry.png\"> Henry, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/walterino.png\"> Walterino";
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
						<td>Giornata non eccessivamente calda, soprattutto la mattina. Vento da Nord. La roccia in via è quasi sempre ottima (soprattutto sui tratti impegnativi), ripulita dai numerosi passaggi. La neve era a tratti portante e a tratti non, ma le tracce trovate erano buone quindi non abbiam fatto mai troppa fatica.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>AD (Oracolo)</td>
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
						<td>NDA per alpinismo invernale (imbrago, casco, ramponi, picozza classica, 6 rinvii, cordini per soste). È sufficiente una corda da 30m. A seconda delle proprie capacità si può portare qualche misura di friend (noi avevamo 0.5, 1 e 2 BD, usati solo per fare una sosta per non disturbare un'altra cordata). Un paio di viti a seconda delle condizioni possono tornare utili (inutili e quindi non portate durante la nostra ripetizione).</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Fino al Rifugio Lecco seguire i sentieri e le piste da sci, facendo attenzione quando le si attraversa. Il canalino per l'attacco dell'Ongania è abbastanza evidente dal Rif. Lecco, noi l'abbiamo trovato in ogni caso tracciato. L'orientamento in via non è sempre scontato ma nel dubbio seguire il facile che non si sbaglia. Il canale della madonnina e il vallone dei camosci erano ipertracciati, ma anche se non ci fosse la traccia è molto difficile sbagliarsi.</td>
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
					Prima esperienza su misto per Walterino. Casino al parcheggio, parcheggiamo in pratica imboscati sopra al cimitero, poi cabinovia e su a piedi fino alla Lecco. Mettiamo ramponi e imbrago e saliamo all'attacco dalla solita canaletta. Henry andrà slegato sui primi due tiri e si ricongiungerà a noi per gli ultimi due. Quest'anno ho dei nuovi guanti che posso togliere lasciandoli appesi al polso e si rivelerà un ottima strategia contro il freddo alle mani, togliendoli rapidamente solo il necessario. Tiri senza ramponi, per il resto tutto con ramponi fino proprio alla funivia, dato che la neve spesso era buona. Discesa molto bella nel canale della madonnina. Breve pausa alla Lecco al ritorno dove troviamo il Peru con dei suoi amici, di ritorno dal giro classico dei canali.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/n8GRN5wwUZqqc94R8" target="_blank" rel="noopener noreferrer">
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
