<?php
	$title = "Munt Griatschouls - Da S-Chanf";
    $track = "03122023.gpx";
	$day = "03-12-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/fabio.png\"> Fabio, <img class=\"person\" src=\"../assets/people/fra.png\"> Fra, <img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/ruben.png\"> Ruben, <img class=\"person\" src=\"../assets/people/ste.png\"> Ste, <img class=\"person\" src=\"../assets/people/ubaldo.png\"> Ubaldo";
	$path = "../relazioni/15_2_4/muntgriatschouls/";
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
	
		<div class="banner-container"><img class="banner" src="../assets/banner/scialpinismo.png"></div>
		
		<!-- Descrizione -->
		<?php
		include $path . 'descrizione.php';
		?>
		
		<div class="picker-bar bordered-sides">
			<div class="picker-choice"><div class="picker button sci selected" id="relazione-button">Relazione</div></div>
			<div class="picker-choice"><div class="picker button sci" id="condizioni-button">Condizioni</div></div>
			<div class="picker-choice"><div class="picker button sci" id="racconti-button">Racconti</div></div>
			<div class="picker-choice"><div class="picker button sci" id="foto-button">Foto</div></div>
		</div>
		
		<div class="content">
		
			<!-- Relazione -->
			<?php
			include $path . 'index.php';
			?>
			
			<!-- Condizioni -->
			<div id="condizioni" class="condizioni hidden">
				<h3>Condizioni</h3>
				
				<table class="info sci">
					<tr>
						<th>Meteo e Condizioni</th>
						<td>Giornata fredda ma bellissima, soleggiata con visibilità ovunque. Partiti con -20° C, anche arrivati alla macchina c'erano ancora circa -10° C. La neve era abbondante e in ottime condizioni, a parte l'ultimo tratto della salita dove era stata brasata dal vento. Rischio valanghe 3 ma non abbiamo visto scariche neanche su versanti più ripidi.</td>
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
						<td>Normale dotazione scialpinistica (sci, attacchi, scarponi, pelli e bastoncini). Rampanti e ramponi non necessari nelle condizioni odierne.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile, la vetta si vede durante tutta la salita e il bosco è sempre molto rado il che permette di passare in vari punti.</td>
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
					
					<div class="story-block sci">
						C'è rischio valanghe un po' ovunque, ma decidiamo comunque di andare in Engadina con i super sciatori. Arrivati in Engadina dopo una rapida colazione a Mastai, ci fermano a Zuoz perchè stanno facendo partire valanghe controllate, quindi puntiamo a S-Chanf, con obiettivo il Piz Griatschouls. Partiamo su neve bellissima e nonostante il freddo (-20° alla partenza) al sole si starà un gran bene. Saliamo a buon ritmo fino a un punto dove la traccia perfetta porta verso il Munt Griatschouls, il Piz non è tracciato, quindi considerato anche il rischio valanghe e la tanta neve che ci farebbe faticare non poco, puntiamo anche noi verso il Munt. Saliamo lungamente, non difficile e mai troppo ripido, fino in cima dove arriviamo tutti alla spicciolata. Pausetta e poi si parte, la neve è molto bella, nonostante ciò faccio anche un bel voletto a causa di un dossetto dove mi grattano gli sci nel canalone, comunque con nessuna conseguenza. Andiamo avanti a scendere con un tratto nel bosco dove tagliamo a sinistra e un po' bacchettando ci ricongiungiamo alla via di salita, poi giù diretti dal dosso fino al paese, su neve molto bella con un tratto finale a cui fare attenzione, dove Ste a momenti si ribalta. Fabio, Ste e Ruben decidono di ripellare, noi ci cambiamo con calma e li aspettiamo facendo anche un giretto (fa ancora un freddo cane comunque, -10°), salvo poi scoprire che Ruben è un po' di fretta perchè deve scendere a Milano, quindi non appena arrivano gli altri io e Ruben partiamo di corsa, e riusciamo a fargli prendere il treno a Lecco al pelo grazie anche a un po' di fortunato ritardo di quest'ultimo.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/2ZX6QFsnyszdx6sT8" target="_blank" rel="noopener noreferrer">
					<img src="../assets/googlephotos.png">
					<p>Google Photos Album</p>
				</a>
			</div>
		</div>
	
		<a href="../">
			<div class="back sci">
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
