<?php
	$title = "Corna di Medale - Via Taveggia";
    $track = "10122023.gpx";
	$day = "10-12-2023, Domenica";
	$participants = "<img class=\"person\" src=\"../assets/people/oracolo.png\"> Oracolo, <img class=\"person\" src=\"../assets/people/papa.png\"> Papa, <img class=\"person\" src=\"../assets/people/ste.png\"> Ste";
	$path = "../relazioni/29_2_3/taveggia-medale/";
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
						<td>Giornata calda ma comunque invernale, una volta che il sole è sparito verso Ovest faceva freschino. La roccia in via è salda, tranne L5, ma unta dalla numerose ripetizioni.</td>
					</tr>
					<tr>
						<th>Difficoltà Percepita</th>
						<td>TD (Oracolo)</td>
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
						<td>NDA, serie di friend fino al 2 BD, eventualmente qualche nut, cordini per clessidre e soste. Un fiffi e una staffa possono essere utili su L4 e L7, per rendere la salita meno faticosa se non si avesse quelle difficoltà in libera.</td>
					</tr>
					<tr>
						<th>Orientamento</th>
						<td>Facile fino all'attacco (indicato tra l'altro da una scritta), attenzione in via a non finire sulle altre vie, decisamente più impegnative, ma comunque seguendo la logica non si sbaglia. Discesa evidente una volta che si trova l'inizio.</td>
					</tr>
					<tr>
						<th>Chiodatura</th>
						<td>Resinati e qualche chiodo vecchio, sempre solidi. Un paio di cordoni sul tiro chiave. Soste sempre su 2 resinati, spesso con catena, tranne l'ultima su albero.</td>
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
						L'idea iniziale era di fare ghiaccio, ma poi tra una cosa e l'altra, più il fatto che non c'è niente di ben formato vicino, andiamo in Medale a fare finalmente la famigerata Taveggia. Partiamo con una cordata sopra ma che sarà su Eternium, saremo da parte circa tutta la via visto che poi loro fanno anche Messico e Nuvole. Faccio io i primi 3 tiri senza grossi problemi, poi parte Ste sul diedro untissimo, poi un tiro marcetto, un tiro atletico, e poi la nicchia dove Ste sale con eleganza nonostante qualche momento in cui lo blocco. Io salgo in artificiale non senza fatica, e il Papa passa bestemmiando. Poi parte lui con una cordata dietro di noi che, sbagliando la linea di Saronno 89 (erano finiti su Gocce Imperiali) ci vengono dietro in pratica, e fatti con maestria gli ultimi 3 tiri (compresa la fine marcia), tutte le varie cordate si ricongiungono all'uscita. La discesa la faremo con il De Zaiacomo dei ragni e amica, che avevamo visto attaccare e arrivano su da chissà quale via (non son sicuri neanche loro visto che volevano fare Gocce Imperiali ma di certo non hanno percorso quella). Date loro due indicazioni su come tornare a Rancio, scendiamo con calma fino a Laorca soddisfatti della salita.
					</div>
				</div>
			</div>
		
			<!-- Foto -->
			<div id="foto" class="foto hidden">
				<h3>Foto</h3>
				
				<a href="https://photos.app.goo.gl/LLHPkjtjkJ7G2jPd8" target="_blank" rel="noopener noreferrer">
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
