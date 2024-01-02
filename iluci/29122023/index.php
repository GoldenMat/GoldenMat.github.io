<?php
	$title = "Piz Grevasalvas - Via Normale da Plaun da Lej";
    $track = "29122023.gpx";
	$day = "29-12-2023, Venerdì";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/riki.png\"> Riki, <img class=\"person\" src=\"../assets/people/ruben.png\"> Ruben";
	$path = "../relazioni/15_2_1/grevasalvas/";
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
						<td>Giornata abbastanza fredda, in basso la nebbia ci ha avvolto mentre in alto eravamo sopra ma il sole era comunque molto pallido. Assenza rilevante di vento. La neve in alto era bella, polverosa o pressata dai passaggi, in basso ghiacciata o crostosa.</td>
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
						<td>Normale per scialpinismo (sci, attacchi, scarponi, pelli, bastoncini). Oggi i rampanti potevano essere utile in qualche tratto, noi ne abbiamo fatto a meno ma non senza fatica. Ramponi solo per emergenze, oggi inutili.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino a Grevasalvas, poi un po' da interpretare ma comunque abbastanza intuibile. Più facile la parte finale, soprattutto se con visibilità.</td>
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
						Scialpinistica prima di fine anno, ci doveva essere anche Lorenzo ma la mattina stessa sta male, allora mi trovo a Colico con Ricky e Ruben e partiamo verso l'Engadina. Saliamo inizialmente in mezzo alla nebbia, che via via si dirada lasciando spazio a una giornata fredda ma soleggiata, su neve abbastanza ghiacciata. Faremo tutta la salita senza rampanti ma a volte c'è da stare attenti. Arrivati in cresta Ricky vuole scendere, ma io li convinco a persevarare fino in cima, e per fortuna visto che ci becchiamo una vista stupenda alle cime con nebbia e neve. Discesa bella nella prima parte, poi un alternato di neve ghiacciata e crosta, fino alla strada che io seguo mentre gli altri vanno nel bosco; anche se poi alla fine a quanto pare devono tornare su. Solo una caduta innocua circa a metà percorso, difficile oggi sciare nella parte bassa, soprattutto per uno come me. Alla fine comunque tutto sommato una gita piacevole.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/arkW3RK1nuyzuADT8" target="_blank" rel="noopener noreferrer">
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
